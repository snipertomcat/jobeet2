<?php

namespace Stc\ScraperBundle\Logic;


use Stc\ScraperBundle\Model\ScrapeContentModel;
use Stc\ScraperBundle\Model\StcModelInterface;
use Stc\ScraperBundle\Model\StcModelContainer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ScrapeContentLogic implements StcLogicInterface
{
    protected $models = array();

    public function __construct(StcModelContainer $container)
    {
        $this->container = $container;
    }

    public function startFeedScraper()
    {
        $feedModel = $this->container->getModel('stc_scraper.model.feeds');
        $feeds = $feedModel->getFeeds();
        foreach ($feeds as $feed)
        {
            $results = $this->doScrape($feed->getUrl());
        }
        return $results;
    }

    private function doScrape($url)
    {
        $reader = $this->container->getModel('eko_feed.feed.reader');
        $parsedFeeds[$url] = $reader->load($url)->get();
        return $parsedFeeds;
    }

}
