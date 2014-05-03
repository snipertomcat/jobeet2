<?php

namespace Stc\ScraperBundle\Controller;

use Alert\ReactorFactory;
use Artax\AsyncClient;
use Artax\Client;
use Stc\ScraperBundle\Component\MyParallelCrawler;
use Stc\ScraperBundle\DependencyInjection\StcScraperExtension;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Artax\Request;
use Artax\ClientException;
use Artax\Ext\Progress\ProgressDisplay;
use Artax\Ext\Progress\ProgressExtension;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $httpLib = $this->get('stc_scraper.http');
        $parser = $this->get('stc_scraper.parser');
        $scrape_sites = $em->getRepository('StcScraperBundle:Website')->findAll();
        $linksFeedsHarvestedModel = $this->get('stc_scraper.model.links_feeds_harvested');
        $count = count($scrape_sites);
        $scrapeArray = array();
        $params = array();
        $contentModel = $this->get('stc_scraper.model.content');
        if ($count > 0) {
            foreach ($scrape_sites as $site) {
                if ($site->getIsActive() == 1) {
                    $target = $site->getUrl();
                    $ref = "google.com";
                    $scrape = $httpLib->http_get_withheader($target,$ref);
                    $file = $scrape['FILE'];
                    $headers = $parser->split_string($file, "<!DOCTYPE", BEFORE, EXCL);
                    $data = $parser->split_string($file, "<!DOCTYPE", AFTER, EXCL);

                    $noFormatted = $parser->parse_clean($data);
                    $links = $parser->parse_array($file,"<a","</a>");

                    $params['header'] = $headers;
                    $params['data'] = $noFormatted;
                    $params['links'] = $links;

                }
            }

            foreach ($links as $link) {
                if (stristr($link,'obituary.aspx')) {
                    $linksFeedsHarvestedModel->saveLink($link);
                }
            }
        }

        print_r($params);

/*        $http_lib = $this->get('stc_scraper.http');
        $target = "http://www.yelp.com/biz/paradise-chevrolet-ventura";
        $ref = "http://www.schrenk.com";

        $return_array = $http_lib->http_get_withheader($target,$ref);

        print_r($return_array);*/

/*        $parser = $this->get('stc_scraper.parser');
        $string = "The quick brown fox";

        $parsed_text = $parser->split_string($string, "quick", BEFORE, INCL);
        print_r($parsed_text);

        $parsed_text = $parser->split_string($string, "quick", AFTER, EXCL);
        print_r($parsed_text);*/

        return $this->render('StcScraperBundle:Default:index.html.twig');
    }

    public function yelpAction()
    {
        $em = $this->getDoctrine()->getManager();
        $httpLib = $this->get('stc_scraper.http');
        $parser = $this->get('stc_scraper.parser');

        //$site = $this->get('stc_scraper.model.website');
        $linksFeedsHarvestedModel = $this->get('stc_scraper.model.links_feeds_harvested');
        $scrapeArray = array();
        $contentModel = $this->get('stc_scraper.model.content');
        $yelpModel = $this->get('stc_scraper.model.yelp');

        //$target = $site->getUrl();
        $target = "http://yahoo.com";
        $repository = $this->getDoctrine()->getEntityManager()->getRepository('StcScraperBundle:website');
        $scrape = $httpLib->http_get_withheader($target,$target);
        $file = $scrape['FILE'];
        $headers = $parser->split_string($file, "<!DOCTYPE", BEFORE, EXCL);
        $data = $parser->split_string($file, "<!DOCTYPE", AFTER, EXCL);
        $findDiv = $parser->parse_array($data, '<a', '</a>');
        foreach ($findDiv as $div) {
            $href[] = $parser->parse_array($div, '<a','</a>');
        }
        print_r($findDiv);
/*        $noFormatted = $parser->parse_clean($data);
        $links = $parser->parse_array($file,"<a","</a>");*/

        $params['header'] = $headers;
/*        $params['data'] = $noFormatted;
        $params['links'] = $links;*/

        return $this->render('StcScraperBundle:Default:yelp.html.twig');
    }

    public function themeAction()
    {
        $client = new Client();

        $parser = $this->get('stc_scraper.parser');
        $reactorFactory = new ReactorFactory();
        $parallelCrawler = new MyParallelCrawler($reactor=($reactorFactory->select()), new AsyncClient($reactor));
        $parallelCrawler->crawl('http://localhost/sugarcrm');
        exit;
        $client->addObservation([
            Client::REQUEST => function($dataArr) {
                $req = $dataArr[0];
                $req->setProtocol('1.0')->setHeader('Connection', 'keep-alive');
            }
        ]);


        $requests = [
            'so-home'   => (new Request)->setUri('http://stackoverflow.com'),
            'so-php'    => (new Request)->setUri('http://stackoverflow.com/questions/tagged/php'),
            'so-python' => (new Request)->setUri('http://stackoverflow.com/questions/tagged/python'),
            'so-http'   => (new Request)->setUri('http://stackoverflow.com/questions/tagged/http'),
            'so-html'   => (new Request)->setUri('http://stackoverflow.com/questions/tagged/html'),
            'so-css'    => (new Request)->setUri('http://stackoverflow.com/questions/tagged/css'),
            'so-js'     => (new Request)->setUri('http://stackoverflow.com/questions/tagged/javascript'),
            'google'    => (new Request)->setUri('http://www.google.com'),
            'bing'      => (new Request)->setUri('http://www.bing.com'),
            'yahoo'     => (new Request)->setUri('http://www.yahoo.com'),
            'nytimes'   => (new Request)->setUri('http://www.nytimes.com'),
            'wikipedia' => (new Request)->setUri('http://en.wikipedia.org/wiki/Main_Page')
        ];

        $lastUpdate = microtime(TRUE);
        $displayLines = [];
        $requestNameMap = new \SplObjectStorage;

        foreach ($requests as $key=>$request) {
            try {
                $response = $client->request($request);
            } catch(\Artax\SocketException $e) {
                continue;
            }
            $body = $response->getBody();
            //echo $body;
            //$body = $parser->parse_clean($body);
            $links = $parser->parse_array($body, '<a', '</a>');
            foreach ($links as $link) {
                //$cleanLink = $parser->parse_clean($link);
                $cleanLink = "<a href='http://www.stackoverflow.com/".$link."'>$link</a>";
                //echo $cleanLink."<br>";
            }
            //echo "<pre>";print_r($links);exit;
        }

        return $this->render('StcScraperBundle:Default:index_simple.html.twig');
    }
}
