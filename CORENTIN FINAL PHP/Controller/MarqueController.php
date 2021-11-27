<?php

class MarqueController extends Controller
{
    function index() {
        $marque=new Marque();
        $V=$marque->all();
        $this->View("Marque",$V);
    }

    function listMarque() {
        $marque=new Marque();
        $V=$marque->all();
        $this->View("home",$V);
    }

    function delete(){
        $uri = $_GET['id'];
        $marque = new Marque();
        $item = $marque->find($uri);
        $item->delete();
        $this->index();
    }

    function create(){
        $marque = new Marque();
        $marque->setNom($_POST['Nom']);
        $marque->setDescription($_POST['Description']);
        $marque->setAnneeCreate($_POST['AnneeCreate']);
        $marque->create();
        header('location:?route=Marque');
        $this->index();
    }

    function find(){
        $uri = $_GET['id'];
        $marque = new Marque();
        $item = $marque->find($uri);
        $this->View("EditMarque",$item );

    }

    function edit(){

        $marque = new Marque();
        $item = $marque->find($_POST['id']);
        $item->setNom($_POST['Nom']);
        $item->setDescription($_POST['Description']);
        $item->setAnneeCreate($_POST['AnneeCreate']);
        $item->create();
        header('location:?route=Marque');
        $this->index();
    }
}