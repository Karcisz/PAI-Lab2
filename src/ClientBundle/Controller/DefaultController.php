<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use ClientBundle\Entity\Client;
use ClientBundle\Form\AddType;
use ClientBundle\Form\LoginType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if(isset($_SESSION["user"]))
		{
			echo "Welcome, ";
			echo $_SESSION["user"]["name"];
			echo " ";
			echo $_SESSION["user"]["surname"];
			echo ". You are logged in as: ";
			echo $_SESSION["user"]["login"];
			echo ".";
		}
		
		$clients = $this->getDoctrine()
			->getRepository('ClientBundle:Client')
			->findAllOrderedByName();
		
		return $this->
			render('ClientBundle:Default:index.html.twig',
				array( 'clients' => $clients ) );
    }
	
	public function addAction(Request $request)
	{
		$client = new Client();
		$form = $this->createForm(AddType::class, $client);
		
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($client);
			$em->flush();
			
			return $this->redirectToRoute('client_homepage');
		}
	
		return $this->
			render('ClientBundle:Default:client_form.html.twig', array(
				'form' => $form->createView(),
		) );
	}
	
	public function loginAction(Request $request)
	{
		if(isset($_SESSION["user"]))
		{
			echo "You are currently logged in as: ";
			echo $_SESSION["user"]["login"];
			echo ".";
		}
		else
		{
			echo "You are not currently logged in.";
		}
		
		$client = new Client();
		$form = $this->createForm(LoginType::class, $client);
		
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			
			$clientdata = $this->getDoctrine()->getRepository('ClientBundle:Client')->findOneByLogin($form->get('login')->getData());
			if($clientdata)
			{
				if($form->get('password')->getData()==$clientdata->getPassword())
				{
					$_SESSION["user"]["surname"]=$clientdata->getSurname();
					$_SESSION["user"]["name"]=$clientdata->getName();
					$_SESSION["user"]["login"]=$clientdata->getLogin();
					$_SESSION["user"]["password"]=$clientdata->getPassword();
					
					return $this->redirectToRoute('client_homepage');
				}
				else
				{
					return $this->redirectToRoute('client_login');
				}
			}
			
			$em->flush();
			
			return $this->redirectToRoute('client_login');
		}
		return $this->
			render('ClientBundle:Default:client_login_form.html.twig', array(
				'form' => $form->createView(),
		) );
	}
}
