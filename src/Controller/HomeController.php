<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {
    /**
     * @Route("/hello/{prenom}/{age}", name="hello")
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0){
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        $prenoms = ["lior" => 31, "david" => 12, "franck" => 55];
        return $this->render(
            'home.html.twig',
            [ 
                'title' => "bonjour à tous",
                'age' => 12,
                'tableau' => $prenoms
            ]
        );
    }

}

?>