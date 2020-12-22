<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="main_page")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', $this->getPageContent(__METHOD__));
    }

    /**
     * @Route("/about", name="about_page")
     */
    public function about(): Response
    {
        return $this->render('page/about.html.twig', $this->getPageContent(__METHOD__));

    }


    /**
     * @Route("/cont", name="cont_page")
     */
    public function cont(): Response
    {
        return $this->render('page/cont.html.twig', $this->getPageContent(__METHOD__));
    }

    /**
     * @Route("/examples", name="examples_page")
     */
    public function examples(): Response
    {
        return $this->render('page/examples.html.twig', $this->getPageContent(__METHOD__));
    }

    /**
     * @Route("/articles", name="articles_page")
     */
    public function articles(): Response
    {
        return $this->render('page/articles.html.twig', $this->getPageContent(__METHOD__));
    }

    private function getPageContent($method): array
    {
        return [
            'controller_name' => PageController::class,
            'page_name' => $method
               ];
    }

}
