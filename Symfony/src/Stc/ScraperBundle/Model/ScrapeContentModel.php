<?php

namespace Stc\ScraperBundle\Model;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Stc\ScraperBundle\Entity\ScrapeContent;
use Stc\ScraperBundle\Form\ScrapeContentType;

/**
 * ScrapeContent controller.
 *
 */
class ScrapeContentModel implements StcModelInterface
{
    protected $em;
    protected $repository;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->repository = $this->em->getRepository('StcScraperBundle:ScrapeContent');
    }

    public function getEntityManager()
    {
        return $this->em;
    }

    /**
     * Lists all ScrapeContent entities.
     *
     */
    public function findAll()
    {
        $entities = $this->em->getRepository('StcScraperBundle:ScrapeContent')->findAll();

        return $entities;
    }

    public function findById($id)
    {
        $entity = $this->em->getRepository('StcScraperBundle:ScraperContent')->find($id);

        return $entity;
    }

    public function save($params)
    {
        $entity = new ScrapeContent();
        $entity->setData($params['data']);
        $entity->setHeaders($params['headers']);

        $this->em->persist($entity);
        $this->em->flush();
    }
    /**
     * Creates a new ScrapeContent entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new ScrapeContent();
        $form = $this->createForm(new ScrapeContentType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stc_scraper_show', array('id' => $entity->getId())));
        }

        return $this->render('StcScraperBundle:ScrapeContent:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new ScrapeContent entity.
     *
     */
    public function newAction()
    {
        $entity = new ScrapeContent();
        $form   = $this->createForm(new ScrapeContentType(), $entity);

        return $this->render('StcScraperBundle:ScrapeContent:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ScrapeContent entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StcScraperBundle:ScrapeContent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScrapeContent entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('StcScraperBundle:ScrapeContent:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing ScrapeContent entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StcScraperBundle:ScrapeContent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScrapeContent entity.');
        }

        $editForm = $this->createForm(new ScrapeContentType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('StcScraperBundle:ScrapeContent:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ScrapeContent entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StcScraperBundle:ScrapeContent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScrapeContent entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ScrapeContentType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stc_scraper_edit', array('id' => $id)));
        }

        return $this->render('StcScraperBundle:ScrapeContent:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ScrapeContent entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('StcScraperBundle:ScrapeContent')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ScrapeContent entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('stc_scraper'));
    }

    /**
     * Creates a form to delete a ScrapeContent entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
