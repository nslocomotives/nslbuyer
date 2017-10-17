<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Search;
use AppBundle\Form\SearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Search controller.
 *
 * @Route("search")
 */
class SearchController extends Controller
{
    /**
     * Lists all search entities.
     *
     * @Route("/", name="search_index")
	 * @Security("has_role('ROLE_SUBSCRIBER')")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $searches = $em->getRepository('AppBundle:Search')->findAll();

        return $this->render('search/index.html.twig', array(
            'searches' => $searches,
        ));
    }

    /**
     * Creates a new search entity.
     *
     * @Route("/new", name="search_new")
	 * @Security("has_role('ROLE_SUBSCRIBER')")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $search = new Search();
		
        $form = $this->createForm('AppBundle\Form\SearchType', $search);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($search);
            $em->flush();

            return $this->redirectToRoute('search_show', array('id' => $search->getId()));
        }

        return $this->render('search/new.html.twig', array(
            'search' => $search,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a search entity.
     *
     * @Route("/{id}", name="search_show")
	 * @Security("has_role('ROLE_SUBSCRIBER')")
     * @Method("GET")
     */
    public function showAction(Search $search)
    {
        $deleteForm = $this->createDeleteForm($search);

        return $this->render('search/show.html.twig', array(
            'search' => $search,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing search entity.
     *
     * @Route("/{id}/edit", name="search_edit")
	 * @Security("has_role('ROLE_SUBSCRIBER')")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Search $search)
    {
        $deleteForm = $this->createDeleteForm($search);
        $editForm = $this->createForm('AppBundle\Form\SearchType', $search);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('search_edit', array('id' => $search->getId()));
        }

        return $this->render('search/edit.html.twig', array(
            'search' => $search,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a search entity.
     *
     * @Route("/{id}", name="search_delete")
	 * @Security("has_role('ROLE_SUBSCRIBER')")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Search $search)
    {
        $form = $this->createDeleteForm($search);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($search);
            $em->flush();
        }

        return $this->redirectToRoute('search_index');
    }

    /**
     * Creates a form to delete a search entity.
     *
     * @param Search $search The search entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Search $search)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('search_delete', array('id' => $search->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
