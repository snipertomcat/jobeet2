<?php

namespace Stc\ScraperBundle\Controller;


use Stc\ScraperBundle\Entity\ScrapeContent;
use Stc\ScraperBundle\Entity\ScrapeStatus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        $contentLogic = $this->get('stc_scraper.logic.content');
        $contentModel = $this->get('stc_scraper.model.content');
        //print_r($contentLogic);exit;

        $results = $contentLogic->startFeedScraper();
        echo "<pre>";
        print_r($results);exit;
        echo "</pre>";

/*
        $scrapeStatus = new ScrapeStatus();
        $scrapeContent = new ScrapeContent();
        $parser = $this->get('stc_scraper.parser');

        $http_lib = $this->get('stc_scraper.http');
        $target = "http://www.yelp.com/biz/paradise-chevrolet-ventura";
        $ref = "http://www.schrenk.com";

        $return_array = $http_lib->http_get_withheader($target,$ref);
        $file = $return_array['FILE'];
        $headers = $parser->split_string($file, "<!DOCTYPE", BEFORE, EXCL);
        $data = $parser->split_string($file, "<!DOCTYPE", AFTER, EXCL);

        $noformatted = $parser->parse_clean($file);

        $scrapeContent->setHeaders($headers);
        $scrapeContent->setData($data);

        $em = $this->getDoctrine()->getManager();
        $em->persist($scrapeContent);
        $em->flush();*/

/*        $em = $this->getDoctrine()->getManager();
        $em->persist($scrapeContent);
        $em->flush();*/

        //$scrape_status = $this->getDoctrine()->get
        /*
        $parser = $this->get('stc_scraper.parser');
        //print_r($parser);
        $string = "The quick brown fox";

        $parsed_text = $parser->split_string($string, "quick", BEFORE, INCL);
        print_r($parsed_text);

        $parsed_text = $parser->split_string($string, "quick", AFTER, EXCL);
        print_r($parsed_text);
        */
        return $this->render('StcScraperBundle:Core:index.html.twig');
    }

}
