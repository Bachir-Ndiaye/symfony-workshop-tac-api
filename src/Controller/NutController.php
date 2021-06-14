<?php

namespace App\Controller;

use App\Repository\NutRepository;
use App\Entity\Nut;
use App\Entity\Order;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NutController extends AbstractController
{
    /**
     * @Route("/nuts", name="nut")
     */
    public function index(NutRepository $nutRepository): Response
    {
        return $this->json([
            $nutRepository->findAll()
        ]);
    }

    /**
     * @Route("/nut/buy/{id}", name="buy", methods={"post"})
     */
    public function buy(Nut $nut, EntityManagerInterface $em, Request $request): Response
    {
        $quantity = $request->get('quantity');
        $amount = $request->get('amount');

        $nut->setStock($nut->getStock()-1);

        $order = new Order();
        $order->setNut($nut);
        $order->setQuantity($quantity);
        $order->setAmount($amount);

        $em->persist($order);
        $em->flush();

        return $this->json([
            $order
        ]);
    }
}
