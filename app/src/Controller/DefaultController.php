<?php

namespace App\Controller;

use App\Service\Encoder\CustomEncoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index( CustomEncoder $jWTEncoder): JsonResponse
    {
        $scope =array('role'=>"user");
        $encode=$jWTEncoder->encode($scope);
        dd($encode);
        $decode =$jWTEncoder->decode($encode);
        return $this->json(['encoded'=>$encode,'decode'=>$decode]);
    }
}
