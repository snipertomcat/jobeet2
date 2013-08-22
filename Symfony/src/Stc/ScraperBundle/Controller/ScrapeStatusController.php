<?php

namespace Stc\ScraperBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Stc\ScraperBundle\Entity\ScrapeStatus;
use Stc\ScraperBundle\Form\ScrapeStatusType;

/**
 * ScrapeStatus controller.
 *
 */
class ScrapeStatusController extends Controller
{

    /**
     * Lists all ScrapeStatus entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('StcScraperBundle:ScrapeStatus')->findAll();

        return $this->render('StcScraperBundle:ScrapeStatus:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ScrapeStatus entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new ScrapeStatus();
        $form = $this->createForm(new ScrapeStatusType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stc_scraper_status_show', array('id' => $entity->getId())));
        }

        return $this->render('StcScraperBundle:ScrapeStatus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new ScrapeStatus entity.
     *
     */
    public function newAction()
    {
        $entity = new ScrapeStatus();
        $form   = $this->createForm(new ScrapeStatusType(), $entity);

        return $this->render('StcScraperBundle:ScrapeStatus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ScrapeStatus entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StcScraperBundle:ScrapeStatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScrapeStatus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('StcScraperBundle:ScrapeStatus:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing ScrapeStatus entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StcScraperBundle:ScrapeStatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScrapeStatus entity.');
        }

        $editForm = $this->createForm(new ScrapeStatusType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('StcScraperBundle:ScrapeStatus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ScrapeStatus entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StcScraperBundle:ScrapeStatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScrapeStatus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ScrapeStatusType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stc_scraper_status_edit', array('id' => $id)));
        }

        return $this->render('StcScraperBundle:ScrapeStatus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ScrapeStatus entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('StcScraperBundle:ScrapeStatus')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ScrapeStatus entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('stc_scraper_status'));
    }

    /**
     * Creates a form to delete a ScrapeStatus entity by id.
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
