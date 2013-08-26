<?php

namespace Stc\ScraperBundle\Model;

use Stc\ScraperBundle\Model\StcModelInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Stc\ScraperBundle\Entity\ScrapeStatus;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use Doctrine\ORM\EntityManager;

/**
 * ScrapeStatus controller.
 *
 */
class ScrapeStatusModel implements StcModelInterface
{
    protected $em;
    protected $repository;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->repository = $this->em->getRepository('StcScraperBundle:ScrapeStatus');
    }

    public function getEntityManager()
    {
        return $this->em;
    }

    /**
     * Lists all ScrapeStatus entities.
     *
     */
    public function findAll()
    {
        $entities = $this->em->getRepository('StcScraperBundle:ScrapeStatus')->findAll();

        return $entities;
    }

    public function save($params)
    {
        $entity = new ScrapeStatus();
        foreach ($params as $key=>$val) {
            $method = "set".ucfirst($key);
            $data = $val;
            $entity->$method($data);
        }
        $entity->setCreatedAtValue();
        $entity->setUpdatedAtValue();

        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * Creates a new ScrapeStatus entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new ScrapeStatus();


    }

    /**
     * Displays a form to create a new ScrapeStatus entity.
     *
     */
    public function newAction()
    {
        $entity = new ScrapeStatus();

    }

    /**
     * Finds and displays a ScrapeStatus entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getEntityManager();

        $entity = $em->getRepository('StcScraperBundle:ScrapeStatus')->find($id);

        if (!$entity) {
            throw new NotFoundResourceException('Unable to find ScrapeStatus entity.');
        }

    }

    /**
     * Displays a form to edit an existing ScrapeStatus entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getEntityManager();

        $entity = $em->getRepository('StcScraperBundle:ScrapeStatus')->find($id);

        if (!$entity) {
            throw new NotFoundResourceException('Unable to find ScrapeStatus entity.');
        }

    }

    /**
     * Edits an existing ScrapeStatus entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getEntityManager();

        $entity = $em->getRepository('StcScraperBundle:ScrapeStatus')->find($id);

        if (!$entity) {
            throw new NotFoundResourceException('Unable to find ScrapeStatus entity.');
        }

    }
    /**
     * Deletes a ScrapeStatus entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

            $em = $this->getEntityManager();
            $entity = $em->getRepository('StcScraperBundle:ScrapeStatus')->find($id);

            if (!$entity) {
                throw new ResourceNotFoundException('Unable to find ScrapeStatus entity.');
            }

            $em->remove($entity);
            $em->flush();

    }

}
