<?php

namespace Stc\ScraperBundle\Model;

use Stc\ScraperBundle\Model\StcModelInterface;
use Doctrine\ORM\EntityManager;

class FeedModel implements StcModelInterface
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->repository = $this->em->getRepository('StcScraperBundle:Feeds');
    }

    public function getEntityManager()
    {
        return $this->em;
    }

    public function getFeeds()
    {
        $feeds = $this->repository->findAll();
        return $feeds;
    }
}