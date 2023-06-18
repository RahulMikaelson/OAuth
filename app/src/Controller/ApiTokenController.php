<?php

namespace App\Controller;

use App\Service\Encoder\CustomEncoder;
use App\Service\OAuth\GetToken;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiTokenController extends AbstractController
{
    #[Route('/api/token', name: 'app_api_token')]
    public function index(GetToken $getToken, CustomEncoder $customEncoder): JsonResponse
    {
        $token = $getToken->getPremiumToken();
        $val=$customEncoder->decode($token);
        return $this->json(['role'=>$val["role"]]);
    }
}
