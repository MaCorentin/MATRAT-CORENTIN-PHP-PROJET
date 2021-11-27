<?php

class VehiculeController extends Controller {
    function index() {
        $vehicles=new Vehicule();
        $V=$vehicles->all();
        $marque = new Marque();
        $M=$marque->all();
        $final[]=[$V,$M];
        $this->View("home",$final );
    }
    function delete(){
        $uri = $_GET['id'];
        $vehicule = new Vehicule();
        $item = $vehicule->find($uri);
        $item->delete();
        header('location:?route=home');
        $this->index();
    }

    function create(){
        $vehicule = new Vehicule();
        $vehicule->setCouleur($_POST['couleur']);
        $vehicule->setModele($_POST['modele']);
        $vehicule->setMarque($_POST['marque']);
        $vehicule->create();
        header('location:?route=home');
        $this->index();
    }

    function find(){
        $uri = $_GET['id'];
        $vehicule = new Vehicule();
        $item = $vehicule->find($uri);
        $marque = new Marque();
        $M=$marque->all();
        $final[]=[$item,$M];
        $this->View("EditVehicule",$final );

    }

    function edit(){

        $vehicule = new Vehicule();
        $item = $vehicule->find($_POST['id']);
        $item->setCouleur($_POST['couleur']);
        $item->setModele($_POST['modele']);
        $item->setMarque($_POST['marque']);
        $item->create();
        header('location:?route=home');
        $this->index();
    }
}