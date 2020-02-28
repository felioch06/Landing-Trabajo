<?php require_once("views/layouts/header.php") ?>
<body >
    <div class="ui secondary pointing menu">
        <a href="?class=Usuarios&view=usuarios" class="active item">
            Inicio
        </a>
        <a href="?class=Usuarios&view=registrar" class="active item">
        Crear Usuario
        </a>
    </div> 
    
    <div class="ui stackable container center aligned grid">
        <div class="row">
            <div class="sisteen wide column"> 
                <?php if(isset($_REQUEST['success'])){ ?>
                        <div class="ui danger message" id="Eliminado">
                            ¡Usuario Eliminado Exitosamente!
                        </div>
                <?php } ?>

                <?php if(isset($_REQUEST['actualizado'])){ ?>
                        <div class="ui success message" id="actualizado">
                            ¡Usuario Actualizado Exitosamente!
                        </div>
                <?php } ?>
                <table class="ui blue celled table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Job</th>
                            <th>CRUD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $usuarios = parent::consulta(); 
                            foreach($usuarios as $usuario){
                        ?>
                            <tr>
                                <td><?php echo $usuario->nombre ?></td>
                                <td><?php echo $usuario->email ?></td>
                                <td><?php echo $usuario->Telefono ?></td>
                                <td>
                                    <a href="?class=Usuarios&view=actualizar&id=<?php echo $usuario->id_usuario ?>" class="ui blue fluid button">Actualizar</a>
                                    <a href="?class=Usuarios&view=delete&id=<?php echo $usuario->id_usuario ?>" class="ui red fluid button">Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<?php require_once("views/layouts/footer.php") ?>
</html>