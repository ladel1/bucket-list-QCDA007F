<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController{

    /**
     * @Route("/", name="app_home")
     */
    public function home(Request $request):Response{
        return $this->render("main/home.html.twig");
    }


    /**
     * @Route("/about-us", name="app_aboutus")
     */
    public function aboutUs():Response{
        return $this->render("main/aboutus.html.twig");
    }


    /**
     * @Route("/legal-stuff", name="app_legalstuff")
     */
    public function legalstuff():Response{
        return $this->render("main/legalstuff.html.twig");
    }

    



}


