<?php 
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/articles")
 */
class ArticleController extends AbstractController{


    /**
     * @Route("/")
     */
    public function list(){

    }

    /**
     * @Route("/{id}")
     */
    public function single($id){
        // select * from articles where id= $id
    }    

    /**
     * @Route("/ajouter")
     */
    public function add(){

    } 
    
    /**
     * @Route("/modifier")
     */    
    public function edit(){

    }     

    /**
     * @Route("/supprimer")
     */ 
    public function delete(){

    } 


}