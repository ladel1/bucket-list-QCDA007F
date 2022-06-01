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
            
            //dd($request->request->get("age"));// post
            //dd($request->query->get("age"));// get
            return $this->render("main/home.html.twig");
        }

        /**
         * @Route("/traitement", name="app_traitement",methods={"POST"})
         */
        public function traitement(Request $request):Response{
            
            dd($request->request->get("prenom"));// post
           
        }



        /**
         * @Route("/contact/{nom}", 
         * name="app_contact",
         * requirements={"nom"="[a-zA-Z0-9]+"},
         * methods={"GET","POST"})
         */
        public function contact($nom):Response{
            // BDD requette select * from users where prenom = $nom
            return $this->json($nom);
        }        

    }


