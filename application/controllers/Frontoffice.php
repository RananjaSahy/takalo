<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    require('Basesession.php');
    class Frontoffice extends Basesession{
        
        public function indexfront(){
            $user = $this->session->userdata('user');
            $data = array();

            $this->load->model('Objet_model');
            $data['listeobjets'] = $this->Objet_model->selectObjectWithoutUser($user['idutilisateur']);
            $users = array();
            if ($data['listeobjets']!=null) {
                $this->load->model('User_model');
                for ($i=0; $i < count($data['listeobjets']['idobjet']); $i++) {
                $users[] = $this->User_model->selectUserById($data['listeobjets']['idproprietaire'][$i]);
                }
                $data['listeusers'] = $users;
            }
            

            $this->load->view('forms/header');
            $this->load->view('forms/pages_accueil',$data);
            $this->load->view('forms/footer');
        }
        
        public function affichermesobjets(){
            $user = $this->session->userdata('user');
            $this->load->model('Objet_model');    
            $data = array();
            $data['mesobjets'] = $this->Objet_model->selectAllObjectbyIdProprio($user['idutilisateur']);
            $data['user'] = $user;
            $this->load->view('forms/header');
            $this->load->view('forms/pages_liste_mes_objets',$data);
            $this->load->view('forms/footer');
        }

        public function detailsmesobjets(){
            $idobjet = $this->input->get('idobjet');
            $this->load->model('Objet_model');
            $data = array();
            $data['objet'] = $this->Objet_model->selectObjectById($idobjet);
            $this->load->view('forms/header');
            $this->load->view('forms/pages_mes_objets',$data);
            $this->load->view('forms/footer');
        }

        public function pageajout(){
        $data = array();
        $this->load->model('Objet_model');
        $data['categories'] = $this->Objet_model->selectAllCategories();
            
            $this->load->view('forms/header');
            $this->load->view('forms/pages_ajout_objet',$data);
            $this->load->view('forms/footer');
        }

        public function ajouterphoto(){

        }

        public function ajoutobjet(){
            $dataproprio = $this->session->userdata('user');

            $titre = $this->input->post('titre');
            $description = $this->input->post('description');
            $prixestime = $this->input->post('prixestime');
            $proprietaire = $dataproprio['idutilisateur'];
            $categorie = $this->input->post('categorie');

            $this->load->model('Objet_model');

            $this->Objet_model->insertObject($titre, $description, $proprietaire, $categorie, $prixestime);

            redirect(site_url('frontoffice/affichermesobjets'));
        }

        public function supprimerobjet(){
            $idobjet = $this->input->get('idobjet');
            $this->load->model('Objet_model');
            //$this->Objet_model->
            echo "a supprimer";
            //redirect(site_url('frontoffice/affichermesobjets'));
        }

        public function pagedeproposition(){
            $this->load->view('forms/header');
            $this->load->view('forms/pages_proposition');
            $this->load->view('forms/footer');
        }
        public function demande()
        {
            $this->load->view('forms/header');
            $this->load->view('forms/pages_demande');
            $this->load->view('forms/footer');
        }
    }
?>