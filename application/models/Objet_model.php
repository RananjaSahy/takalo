<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Objet_model extends CI_Model
    {
        public function selectAllObject()
        {
            $result = array();
            $query = $this->db->query('select * from objet');
            
            foreach ($query->result_array() as $row) {
                $result['idobjet'][] = $row['idobjet'];
                $result['titre'][] = $row['titre'];
                $result['description'][] = $row['description']; 
                $result['idproprietaire'][] = $row['idproprietaire']; 
                $result['idcategorie'][] = $row['idcategorie']; 
                $result['prixestime'][] = $row['prixestime']; 
                
            }
            return $result;
        }  

        public function selectAllObjectbyIdProprio($idproprietaire)
        {
            $result = array();
            $query = $this->db->query('select * from objet where idproprietaire='.$idproprietaire);
            
            foreach ($query->result_array() as $row) {
                $result['idobjet'][] = $row['idobjet'];
                $result['titre'][] = $row['titre'];
                $result['description'][] = $row['description']; 
                $result['idproprietaire'][] = $row['idproprietaire']; 
                $result['idcategorie'][] = $row['idcategorie']; 
                $result['prixestime'][] = $row['prixestime']; 
                
            }
            return $result;
        }  
        
        public function selectObjectById($id)
        {
            $result = array();
            $sql = 'select * from objet where idobjet='.$id;
            $query = $this->db->query($sql);
            $ans = $query->row_array();
            return $ans;
        }

        public function selectAllCategories()
        {
            $result = array();
            $query = $this->db->query('select * from categorie');
            
            foreach ($query->result_array() as $row) {
                $result['idcategorie'][] = $row['idcategorie'];
                $result['nomcategorie'][] = $row['nomcategorie'];
            }
            return $result;
        }

        public function selectCategoryById($id)
        {

            $sql = 'select * from categorie where idCategorie='.$id;
            $query = $this->db->query($sql);
            $ans = $query->row_array();
            return $ans;
        }

        public function selectObjectByCategory($idCategorie)
        {
            $result = array();
            $sql = 'select * from objet where idcategorie='.$idCategorie;
            $query = $this->db->query($sql);
            
            foreach ($query->result_array() as $row) {
                $result['idobjet'][] = $row['idobjet'];
                $result['titre'][] = $row['titre'];
                $result['description'][] = $row['description']; 
                $result['idproprietaire'][] = $row['idproprietaire']; 
                $result['idcategorie'][] = $row['idcategorie']; 
                $result['prixestime'][] = $row['prixestime']; 

            }
            return $result;
        }

        public function insertObject($titre,$description,$idproprietaire,$idcategorie,$prixestime)
        {
            $sql = "insert into objet(titre,description,idproprietaire,idcategorie,prixestime) values(%s,%s,%d,%d,%d)";
            $sql = sprintf($sql,$this->db->escape($titre),$this->db->escape($description),$idproprietaire,$idcategorie,$prixestime);
            $this->db->query($sql);
        }


        public function selectPhotoById($idphoto)
        {
            $sql = 'select * from photo where idphoto='.$idphoto;
            $query = $this->db->query($sql);
            $ans = $query->row_array();
            return $ans;
        }


        public function selectPhotoByPath($pathphoto)
        {
            $sql = "select * from photo where pathphoto=%s";
            $sql = sprintf($sql,$this->db->escape($pathphoto));
            $query = $this->db->query($sql);
            $ans = $query->row_array();
            return $ans;
        }

        public function selectAllPhotos()
        {
            $result = array();
            $sql = 'select * from photo ';
            $query = $this->db->query($sql);
            
            foreach ($query->result_array() as $row) {
                $result['idphoto'][] = $row['idphoto'];
                $result['idobjet'][] = $row['idobjet'];              
                $result['pathphoto'][] = $row['pathphoto'];
            }
            return $result;
        }

        public function selectAllPhotosByIdobject($idObj)
        {
            $result = array();
            $sql = 'select * from photo where idobjet='.$idObj.')';
            $query = $this->db->query($sql);
            
            foreach ($query->result_array() as $row) {
                $result['idphoto'][] = $row['idhoto'];
                $result['pathphoto'][] = $row['pathphoto'];
            }
            return $result;
        }

        public function selectObjectWithoutUser($idUser)
        {
            $result = array();
            $sql = 'select * from objet where idproprietaire !='.$idUser;
            $query = $this->db->query($sql);
            
            foreach ($query->result_array() as $row) {
                $result['idobjet'][] = $row['idobjet'];
                $result['titre'][] = $row['titre'];
                $result['description'][] = $row['description']; 
                $result['idproprietaire'][] = $row['idproprietaire']; 
                $result['idcategorie'][] = $row['idcategorie']; 
                $result['prixestime'][] = $row['prixestime']; 
                
            }
            return $result;   
        }

        public function declineRequest($id)
        {
            $sql = "delete from demandeechange where iddemandeechange=".$id;
            $this->db->query($sql);   
        }

        public function selectUserByObject($id)
        {
            $sql = "select * from utilisateur where idutilisateur=(select idproprietaire from objet where idobjet=".$id." )";
            $query = $this->db->query($sql);
            $ans = $query->row_array();
            return $ans;
        }

        public function acceptRequest($id)
        {
            $idobjet = "select * from demandeechange where iddemandeechange=".$id;
            $this->db->query($sql); 

            $idUser1 = selectUserByObject($idobjet['idobjet_un']);
            $idUser2 = selectUserByObject($idobjet['idobjet_deux']);
            $sql = "update from objet set idproprietaire='%d' where idobjet ='%d'";
            $sql = sprintf($sql,$idUser1['idutilisateur'],$idobjet['idobjet_deux']);          
            $this->db->query($sql);  
            $sql = "update from objet set idproprietaire='%d' where idobjet ='%d'";
            $sql = sprintf($sql,$idUser2['idutilisateur'],$idobjet['idobjet_un']);          
            $this->db->query($sql);  
            $sql = "delete from demandeechange where iddemandeechange=".$id;
            $this->db->query($sql);  
        }


    }
    
?>