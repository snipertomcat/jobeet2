<?php
/**
 * User: Jesse Griffin
 * Date: 8/19/13
 * Time: 3:57 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Stc\ScraperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        //print_r($this);
        return $this->render('StcScraperBundle:Admin:index.html.twig');
    }
}