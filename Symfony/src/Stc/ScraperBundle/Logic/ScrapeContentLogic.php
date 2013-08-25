<?php

namespace Stc\ScraperBundle\Logic;


use Stc\ScraperBundle\Model\ScrapeContentModel;
use Stc\ScraperBundle\Model\StcModelInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ScrapeContentLogic extends Controller implements StcLogicInterface
{
    protected $models = array();

    public function __construct(StcModelInterface $model)
    {
        $this->model['ScrapeContentModel'] = $model;
    }

    public function startFeedScraper()
    {
        $feeds = $this->get('stc_scraper.model.feeds')->getFeeds();
        foreach ($feeds as $feed)
        {
            $results[] = $this->doScrape($feed->getUrl());
        }
        return $results;
    }

    private function doScrape($urls)
    {
        $reader = $this->get('eko_feed.feed.reader');
        foreach ($urls as $url) {
            $parsedFeeds[$url] = $reader->load($url)->get();
        }
        return $parsedFeeds;
    }

}
