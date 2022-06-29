<?php

namespace App\Controller;

use App\Service\TwoTextCompareFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @var string[]
     */
    public $textFiles = ["bacon", "cupidatat", "lorem", "tatcupidat"];
    /**
     * endpoint
     * @Route("/api/first/{stream1}/second/{stream2}", name="app_api")
     * @method={"GET"}
     */
    public function index(string $stream1, string $stream2): Response
    {
        if (!(in_array($stream1, $this->textFiles)) || !(in_array($stream2, $this->textFiles))) {
            return new JsonResponse('Failed');
        }

        $factory = new TwoTextCompareFactory($stream1, $stream2);
        $compare = $factory->createCompareTextsFactory($stream1, $stream2);
        $data = $compare->compareTexts();


        return new JsonResponse($data);
    }
}
