<?php

    class UsuariosController extends Usuario{
        public function index(){
            $title = "Index";
            require_once("views/usuario/index.php");
        }

        public function usuarios(){
            $title = "Usuarios";
            require_once("views/usuario/usuarios.php");
        }

        public function actualizar(){
            $title = "Actualizar";
            require_once("views/usuario/update.php");
        }

        public function registrar(){
            $title = "Registrar";
            require_once("views/usuario/register.php");
        }

        public function register(){
            $nombres = $_POST['nombres'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];

            parent::registrado($nombres, $correo, $telefono);
            header('location:?class=Usuarios&view=usuarios');
        }

        public function registerUsuarios(){
            $nombres = $_POST['nombres'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];

            parent::registrado($nombres, $correo, $telefono);
            header('location:?class=Usuarios&view=usuarios');
        }

        public function update(){
            $nombres = $_POST['nombres'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $id = $_POST['id'];

            parent::updated($nombres, $correo, $telefono, $id);

            header('location:?class=Usuarios&view=usuarios&actualizado');
        }

        public function delete(){
           
            $id = $_REQUEST['id'];

            parent::deleted($id);

            header('location:?class=Usuarios&view=usuarios&success');
        }
    }

?>