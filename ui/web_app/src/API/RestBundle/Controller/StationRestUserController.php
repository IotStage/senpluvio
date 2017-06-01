<?php

namespace API\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use FOS\RestBundle\Controller\FOSRestController;


class StationRestUserController extends FOSRestController
{
	/**
	*@Rest\View()
	*@Rest\Get("/stations")
	*/
	public function getStationsAction(Request $request){

		return $this->forward('AWSMonitoringBundle:Station:getStations');
	}

	/**
	*@Rest\Get("/stations/{id}")
	*/
	public function getStationAction($id, Request $request){

		return $this->forward('AWSMonitoringBundle:Station:getStation', array('id' => $id));
	}

}
