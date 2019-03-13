<?php

namespace App\Controller;

use App\Service\StatsService;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function index(ObjectManager $manager, StatsService $statService)
    {
        $stats = $statService->getStats();

        $bestAds = $statService->getAdsStats('DESC');

        $worstAds = $statService->getAdsStats('ASC');
        

        return $this->render('admin/dashboard/index.html.twig', [
            //'stats' => [
            //    'users' => $users,
            //    'ads' => $ads,
            //    'bookings' => $bookings,
            //    'comments' => $comments 
            //]
            // ***  premiere solution **

            // **  astuce compact (fait la meme chose) ****
            'stats' => $stats,
            'bestAds' => $bestAds,
            'worstAds' => $worstAds
        ]);
    }
}
