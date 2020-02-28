<?php
    class Usuario extends DB{

        public function consulta(){
            try{
                $str = parent::connect()->prepare("SELECT * FROM usuarios");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultaPorId($id){
            try{
                $str = parent::connect()->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
                $str->bindParam(1, $id, PDO::PARAM_STR);
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function registrado($nombres, $correo, $telefono){
            try{
                $str = parent::connect()->prepare('INSERT INTO usuarios(nombre, email, telefono) VALUES(?,?,?)');
                $str->bindParam(1, $nombres, PDO::PARAM_STR);
                $str->bindParam(2, $correo, PDO::PARAM_STR);
                $str->bindParam(3, $telefono, PDO::PARAM_STR);
                $str->execute();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function updated($nombres, $correo, $telefono, $id){
            try{
                $str = parent::connect()->prepare("UPDATE usuarios SET nombre = ? , email = ? , Telefono = ? WHERE id_usuario = ? ");
                $str->bindParam(1, $nombres, PDO::PARAM_STR);
                $str->bindParam(2, $correo, PDO::PARAM_STR);
                $str->bindParam(3, $telefono, PDO::PARAM_STR);
                $str->bindParam(4, $id, PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function deleted($id){
            try{
                $str = parent::connect()->prepare("DELETE FROM usuarios WHERE id_usuario='$id' ");
                $str->execute();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>