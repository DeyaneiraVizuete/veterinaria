<?php
    //Definiendo la clase Mascotas
    class Mascotas extends CI_Controller{
        //Constructor
        public function __construct(){
            parent::__construct();
            //Cargar el modelo Mascota
            $this->load->model('Mascota');
        }
        //Funcion para renderizar el index de Mascota
        public function index(){
            $this-> load->view('header');
            $this->load->view('Mascotas/index');
            $this->load->view('footer');
        }
        //Funcion para recibir datos de mascota y guardarlos en la Bdd
        public function guardar(){
            $datos=array(
                'nombre_mas'=>$this->input->post('nombre_mas'),
                'raza_mas'=>$this->input->post('raza_mas'),
                'edad_mas'=>$this->input->post('edad_mas'),
                'latitud_mas'=>$this->input->post('latitud_mas'),
                'longitud_mas'=>$this->input->post('longitud_mas'),
                'latitud2_mas'=>$this->input->post('latitud2_mas'),
                'longitud2_mas'=>$this->input->post('longitud2_mas')
            );
            //print_r($datos);
            $this->Mascota->insertar($datos);
            redirect('Mascotas/index');
        }
    }
?>