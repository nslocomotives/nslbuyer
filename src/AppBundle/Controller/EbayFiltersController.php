<?php

namespace AppBundle\Controller;

use AppBundle\Entity\EbayFilters;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ebayfilter controller.
 *
 * @Route("ebayfilters")
 */
class EbayFiltersController extends Controller
{
    /**
     * Lists all ebayFilter entities.
     *
     * @Route("/", name="ebayfilters_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		
		$user = $this->container->get('security.context')->getToken()->getUser();

        $ebayFilters = $em->getRepository('AppBundle:EbayFilters')->findByUser($user);

        return $this->render('ebayfilters/index.html.twig', array(
            'ebayFilters' => $ebayFilters,
        ));
    }

    /**
     * Creates a new ebayFilter entity.
     *
     * @Route("/new", name="ebayfilters_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ebayFilter = new Ebayfilters();
        $form = $this->createForm('AppBundle\Form\EbayFiltersType', $ebayFilter);
        $form->handleRequest($request);

		$user = $this->container->get('security.context')->getToken()->getUser();
		
        if ($form->isSubmitted() && $form->isValid()) {
			$ebayFilter->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($ebayFilter);
            $em->flush();

            return $this->redirectToRoute('ebayfilters_show', array('id' => $ebayFilter->getId()));
        }

        return $this->render('ebayfilters/new.html.twig', array(
            'ebayFilter' => $ebayFilter,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ebayFilter entity.
     *
     * @Route("/{id}", name="ebayfilters_show")
     * @Method("GET")
     */
    public function showAction(EbayFilters $ebayFilter)
    {
        $deleteForm = $this->createDeleteForm($ebayFilter);

        return $this->render('ebayfilters/show.html.twig', array(
            'ebayFilter' => $ebayFilter,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ebayFilter entity.
     *
     * @Route("/{id}/edit", name="ebayfilters_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EbayFilters $ebayFilter)
    {
        $deleteForm = $this->createDeleteForm($ebayFilter);
        $editForm = $this->createForm('AppBundle\Form\EbayFiltersType', $ebayFilter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ebayfilters_edit', array('id' => $ebayFilter->getId()));
        }

        return $this->render('ebayfilters/edit.html.twig', array(
            'ebayFilter' => $ebayFilter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ebayFilter entity.
     *
     * @Route("/{id}", name="ebayfilters_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EbayFilters $ebayFilter)
    {
        $form = $this->createDeleteForm($ebayFilter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ebayFilter);
            $em->flush();
        }

        return $this->redirectToRoute('ebayfilters_index');
    }

    /**
     * Creates a form to delete a ebayFilter entity.
     *
     * @param EbayFilters $ebayFilter The ebayFilter entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EbayFilters $ebayFilter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ebayfilters_delete', array('id' => $ebayFilter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
