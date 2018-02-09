<?php

namespace PFRX\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
	public function indexAction()
	{
		$content = $this->get('templating')->render('PFRXPlatformBundle:Advert:index.html.twig');
		// ou: $content = $this->render('@PFRXPlatform/Advert/index.html.twig');

		return new Response($content);
	}
}