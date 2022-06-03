<?php

namespace App\Controller;

use App\Entity\Wish;
use App\Repository\WishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/wish", name="app_wish")
 */
class WishController extends AbstractController
{

    /**
     * @Route("/list", name="_list")
     */
    public function list(WishRepository $repo): Response
    {
        $wishes = $repo->findBy(["isPublished"=>true],["dateCreated"=>"DESC"]);
        return $this->render('wish/list.html.twig',["wishes"=>$wishes]);
    }


    /**
     * @Route("/detail/{id}", name="_detail")
     */
    public function detail(Wish $wish): Response
    {
        return $this->render('wish/detail.html.twig',["wish"=>$wish]);
    }    


}
