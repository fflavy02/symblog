<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageController
 *
 * @author flavi
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    //put your code here
    public function contactAction()
    {
        return $this->render('BloggerBlogBundle:Page:contact.html.twig');
    }
    
    
}
