<?php

namespace AWS\MonitoringBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use FOS\RestBundle\Controller\FOSRestController;

use AWS\MonitoringBundle\Entity\Station;

class StationController extends Controller
{
	/**
	*@Route("/station/index", name="aws_monitoring_station_index")
	*/
	public function indexAction(){

		$stations = $this->getStations();

		return $this->render("AWSMonitoringBundle:station:index.html.twig", 
			array("stations", $stations))
		;
	}

	/**
	* Details d'une station
	*/
	public function showAction($id, Request $request){
		$station = $this->getStation($id);

		return $this->render("AWSMonitoringBundle:station:show", 
			array("station", $station))
		;
	}

	public function editActionAction(){

	}

	public function putStationAction(){

	}

	public function postStationAction(){
		$em = $this->getDoctrine()->getManager();
		$stations = $em->getRepository('AWSMonitoringBundle:Station')->findall();
		return $station;
	}

	/**
	*@Route("/stations", name="aws_monitoring_stations")
	*/
	public function getStationsAction(Request $request){
		$stations = $this->getStations();
		if(!empty($stations)){
			$view = View::create($stations);
	        $view->setFormat('json');
	        return $view;
	    }
	}


	/**
	*@Route("/stations/{id}", name="aws_monitoring_station")
	*/
	public function getStationAction($id, Request $request){
		$station = $this->getStation($id);

		if(!empty($station)){
			$view = View::create($station);
        	$view->setFormat('json');
        	return $view;
    	}
	}

	public function deleteStationAction(){
		
	}

	private function getStations(){
		$em = $this->getDoctrine()->getManager();
		$stations = $em->getRepository('AWSMonitoringBundle:Station')->findall();
		return $stations;
	}

	private function getStation($id){
		$em = $this->getDoctrine()->getManager();
		$station = $em->getRepository('AWSMonitoringBundle:Station')->find($id);
		return $station;
	}
}
