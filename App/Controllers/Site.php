<?php 


    namespace App\Controllers;

use App\Models\Crud;

    class Site extends Crud{
        
        public function home(){
            require_once __DIR__ . '/../Views/home.php';
        }

        public function carbono(){
            require_once __DIR__ . '/../Views/carbono.php';
        }

        public function integrantes(){
            require_once __DIR__ . '/../Views/integrantes.php';
        }

        public function login(){
            $cadastro = $this->cadastro();
            require_once __DIR__ . '/../Views/login.php';
        }

        public function principal(){
            require_once __DIR__ . '/../Views/principal.php';
        }
    }
