<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sermon;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sermon controller.
 *
 * @Route("sermon")
 */
class SermonController extends Controller
{
    /**
     * Lists all sermon entities.
     *
     * @Route("/", name="sermon_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sermons = $em->getRepository('AppBundle:Sermon')->findAll();

        return $this->render('sermon/index.html.twig', array(
            'sermons' => $sermons,
        ));
    }

    /**
     * Creates a new sermon entity.
     *
     * @Route("/new", name="sermon_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sermon = new Sermon();
        $form = $this->createForm('AppBundle\Form\SermonType', $sermon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sermon);
            $em->flush();

            return $this->redirectToRoute('sermon_show', array('id' => $sermon->getId()));
        }

        return $this->render('sermon/new.html.twig', array(
            'sermon' => $sermon,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sermon entity.
     *
     * @Route("/{id}", name="sermon_show")
     * @Method("GET")
     */
    public function showAction(Sermon $sermon)
    {
        $deleteForm = $this->createDeleteForm($sermon);

        return $this->render('sermon/show.html.twig', array(
            'sermon' => $sermon,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sermon entity.
     *
     * @Route("/{id}/edit", name="sermon_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sermon $sermon)
    {
        $deleteForm = $this->createDeleteForm($sermon);
        $editForm = $this->createForm('AppBundle\Form\SermonType', $sermon);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sermon_edit', array('id' => $sermon->getId()));
        }

        return $this->render('sermon/edit.html.twig', array(
            'sermon' => $sermon,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sermon entity.
     *
     * @Route("/{id}", name="sermon_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sermon $sermon)
    {
        $form = $this->createDeleteForm($sermon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sermon);
            $em->flush();
        }

        return $this->redirectToRoute('sermon_index');
    }

    /**
     * Creates a form to delete a sermon entity.
     *
     * @param Sermon $sermon The sermon entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sermon $sermon)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sermon_delete', array('id' => $sermon->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
