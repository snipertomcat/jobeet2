<?php

namespace Stc\ScraperBundle\Model;

use Stc\ScraperBundle\Model\StcModelInterface;
use Doctrine\ORM\EntityManager;
use Stc\ScraperBundle\Entity\YelpContent;

class YelpContentModel extends YelpContent implements StcModelInterface
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->repository = $this->em->getRepository('StcScraperBundle:YelpContent');
    }

    public function getEntityManager()
    {
        return $this->em;
    }


}