<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_Model
    {
        public function insertUser($nom,$mail,$pwd)
        {
            $sql = "insert into utilisateur(nom,email,motdepasse) values(%s,%s,%s)";
            $sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($mail),$this->db->escape($pwd));
            $this->db->query($sql);
        }

        public function selectUserById($id)
        {
            $sql = 'select * from utilisateur where idutilisateur='.$id;
            $query = $this->db->query($sql);

            $ans = $query->row_array();
            return $ans;
        }

        public function selectAllUsers()
        {
            $result = array();
            $query = $this->db->query('select * from utilisateur');
            
            foreach ($query->result_array() as $row) {
                $result['idutilisateur'][] = $row['idutilisateur'];
                $result['nom'][] = $row['nom'];
                $result['email'][] = $row['email'];
                $result['motdepasse'][] = $row['motdepasse'];                
            }
            return $result;
        }

        public function selectuserlogin($email, $password){
            $sql = "select * from utilisateur where email='".$email."' and motdepasse='".$password."'";
            $query = $this->db->query($sql);
            $ans = $query->row_array();
            return $ans;
        }
    }
    


?>