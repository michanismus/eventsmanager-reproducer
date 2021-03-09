<?php declare(strict_types=1);

namespace App\Controller;

use App\Entity\Test;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test", methods={"GET"})
     */
    public function test(EntityManagerInterface $em)
    {
        $entities = $em->getRepository(Test::class)
            ->findAll();

        return new Response('Passed');
    }
}
