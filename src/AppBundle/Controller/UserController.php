<?php

namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Datauser;
use AppBundle\Entity\User;
use AppBundle\Entity\Link;
    /**
     * @Route("/", name="profil")
     */

class UserController extends Controller
{
	public function showProfilAction (Request $request)
    {
		$user = Doctrine::getTable('User')->findOneByUsername('test');
        return $this->render('default/profil.html.twig', array('base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
    	));
    }
}