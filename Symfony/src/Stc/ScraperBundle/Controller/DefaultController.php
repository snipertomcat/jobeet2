<?php

namespace Stc\ScraperBundle\Controller;

use Stc\ScraperBundle\DependencyInjection\StcScraperExtension;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DefaultController extends Controller
{
    public function indexAction()
    {
/*        $http_lib = $this->get('stc_scraper.http');
        $target = "http://www.yelp.com/biz/paradise-chevrolet-ventura";
        $ref = "http://www.schrenk.com";

        $return_array = $http_lib->http_get_withheader($target,$ref);

        print_r($return_array);*/

        $parser = $this->get('stc_scraper.parser');
        $string = "The quick brown fox";

        $parsed_text = $parser->split_string($string, "quick", 'BEFORE', 'INCL');
        print_r($parsed_text);

        $parsed_text = split_string($string, "quick", 'AFTER', 'EXCL');
        print_r($parsed_text);

        return $this->render('StcScraperBundle:Default:index.html.twig');
    }
}
