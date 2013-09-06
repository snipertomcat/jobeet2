<?php

namespace Stc\ScraperBundle\Controller;

use Stc\ScraperBundle\DependencyInjection\StcScraperExtension;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerBuilder;

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
        }

        foreach ($links as $link) {
            if (stristr($link,'obituary.aspx')) {
                $linksFeedsHarvestedModel->saveLink($link);
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

        $site = $this->get('stc_scraper.model.website');
        $linksFeedsHarvestedModel = $this->get('stc_scraper.model.links_feeds_harvested');
        $scrapeArray = array();
        $contentModel = $this->get('stc_scraper.model.content');
        $yelpModel = $this->get('stc_scraper.model.yelp');

        $target = $site->getUrl();
        $ref = "google.com";
        $scrape = $httpLib->http_get_withheader($target,$ref);
        $file = $scrape['FILE'];
        $headers = $parser->split_string($file, "<!DOCTYPE", BEFORE, EXCL);
        $data = $parser->split_string($file, "<!DOCTYPE", AFTER, EXCL);
        $findDiv = $parser->parse_array($data, '<a class="biz-name"', '</a>');
        foreach ($findDiv as $div) {
            //$href[] =$parser->parse_array($div, 'href');
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
        return $this->render('StcScraperBundle:Default:index_simple.html.twig');
    }
}
