<?php

namespace MyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="my_bundle_myhomepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
	
	/**
     * @Route("/list-repos/", name="my_bundle_listrepos")
     */
    public function listAction(Request $request)
    {
		$client = new \Github\Client();
		$repositories = $client->api('user')->repositories('symfony');
	//echo '<pre>';
	//print_r($repositories);exit;
		// replace this example code with whatever you need
		return $this->render('default/list.html.twig', array(
			'title' => 'List of GitHub Symfony Repositories',
			'repositories' => $repositories,
			'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR
		));
	
    }
}
