<?php
    class Mascota extends CI_Model{
        //constructor
        function __construct()
        {
            parent::__construct();
        }
        //Insercion de mascotas en la Bdd
        function insertar($datos){
            $this->db->insert('mascota',$datos);
        }
        
    }



?>