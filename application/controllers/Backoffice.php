<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

require('Basesession.php');
    class Backoffice extends Basesession{

        public function indexback(){

        $data = array();
        $this->load->model('Objet_model');
        $this->load->model('user_model');
        $data['categorie'] = $this->Objet_model->selectAllCategories();
        $data['listeobjets'] = array();
        
        // $objets = array();
        for ($i=0; $i < count($data['categorie']['idcategorie']); $i++) {
            $objets = $this->Objet_model->selectObjectByCategory($data['categorie']['idcategorie'][$i]);
            // echo $data['categorie']['idcategorie'][$i];
            // echo $objets['idproprietaire'][0];
            // $data['owner'][$i] = $this->user_model->selectUserById($objets['idproprietaire'][0]);
            $data['listeobjets'][$i] = array();
            $data['listeobjets'][$i] = $objets;
            $objets = null;
            // echo $objets['titre'][0];
        }
        

        // echo $data['listeobjets'][0]['titre'][0];
        $this->load->view('forms/header_admin');
        $this->load->view('forms/pages_back',$data);
        $this->load->view('forms/footer');
        }

        public function details($id)
        {
        // echo $id;
        $data = array();
            $this->load->model('Objet_model');
            $data['objet'] = $this->Objet_model->selectObjectById($id);
            $data['categories'] = $this->Objet_model->selectAllCategories();
        // echo count($data['objet']['titre']);
            $this->load->view('forms/header_admin');
            $this->load->view('forms/pages_liste_objet',$data);
            $this->load->view('forms/footer');
        }
    }
?> 