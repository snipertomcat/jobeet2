<?php
/**
 * User: Jesse Griffin
 * Date: 8/19/13
 * Time: 3:57 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Stc\ScraperBundle\Controller;

use Stc\ScraperBundle\Model\ScrapeStatusModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        $statusModel = $this->get('stc_scraper.model.status');

        foreach ($statusModel->findAll() as $status) {
            //print_r($status);exit;
            echo $status->getFiletime();
        }

        return $this->render('StcScraperBundle:Admin:index.html.twig');
    }
}