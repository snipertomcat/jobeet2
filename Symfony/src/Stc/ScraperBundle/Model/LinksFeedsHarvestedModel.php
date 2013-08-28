<?php

namespace Stc\ScraperBundle\Model;

use Stc\ScraperBundle\Model\StcModelInterface;
use Doctrine\ORM\EntityManager;
use Stc\ScraperBundle\Entity\LinksFeedsHarvested;

class LinksFeedsHarvestedModel extends LinksFeedsHarvested implements StcModelInterface
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

    public function saveLink($link)
    {
        $entity = new LinksFeedsHarvested();
        $entity->setDiscoveredAt(new \DateTime('now'));
        $entity->setUrl($link);
        $entity->setStatus(0);

        $this->em->persist($entity);
        $this->em->flush();
    }
}