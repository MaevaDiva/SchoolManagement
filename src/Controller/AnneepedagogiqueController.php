<?php

namespace App\Controller;

use App\Entity\Anneepedagogique;
use App\Entity\Classe;
use App\Form\AnneepedagogiqueType;
use App\Repository\AnneepedagogiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/anneepedagogique")
 */
class AnneepedagogiqueController extends AbstractController
{
    /**
     * @Route("/", name="app_anneepedagogique_index", methods={"GET"})
     */
    public function index(AnneepedagogiqueRepository $anneepedagogiqueRepository): Response
    {
        return $this->render('anneepedagogique/index.html.twig', [
            'anneepedagogiques' => $anneepedagogiqueRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_anneepedagogique_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AnneepedagogiqueRepository $anneepedagogiqueRepository, EntityManagerInterface $entityManager): Response
    {
        //liste des classes
        $classes = $entityManager->getRepository(Classe::class)->findAll();

        $anneepedagogique = new Anneepedagogique();
        $form = $this->createForm(AnneepedagogiqueType::class, $anneepedagogique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $anneepedagogiqueRepository->add($anneepedagogique, true);

            return $this->redirectToRoute('app_anneepedagogique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('anneepedagogique/new.html.twig', [
            'anneepedagogique' => $anneepedagogique,
            'form' => $form,
            'classes' => $classes
        ]);
    }

    /**
     * @Route("/{id}", name="app_anneepedagogique_show", methods={"GET"})
     */
    public function show(Anneepedagogique $anneepedagogique): Response
    {
        return $this->render('anneepedagogique/show.html.twig', [
            'anneepedagogique' => $anneepedagogique,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_anneepedagogique_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Anneepedagogique $anneepedagogique, AnneepedagogiqueRepository $anneepedagogiqueRepository): Response
    {
        
        $form = $this->createForm(AnneepedagogiqueType::class, $anneepedagogique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $anneepedagogiqueRepository->add($anneepedagogique, true);

            return $this->redirectToRoute('app_anneepedagogique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('anneepedagogique/edit.html.twig', [
            'anneepedagogique' => $anneepedagogique,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_anneepedagogique_delete", methods={"POST"})
     */
    public function delete(Request $request, Anneepedagogique $anneepedagogique, AnneepedagogiqueRepository $anneepedagogiqueRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$anneepedagogique->getId(), $request->request->get('_token'))) {
            $anneepedagogiqueRepository->remove($anneepedagogique, true);
        }

        return $this->redirectToRoute('app_anneepedagogique_index', [], Response::HTTP_SEE_OTHER);
    }
}
