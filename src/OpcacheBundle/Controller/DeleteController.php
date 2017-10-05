<?php

namespace OpcacheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OpcacheBundle\Entity\Opcache;

class DeleteController extends OpcacheController
{
	
	public function __construct()
	{
		
	}
	
	/**
	 * @Route("/op/delete", name="opcache_delete")
	 */
	public function DeleteAction()
	{
		if (function_exists("opcache_reset")){
			
			opcache_reset();
			
		}
			return $this->redirectToRoute("op");
		
	}
	
}
