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
            <div class="eight wide column"> 
                <div class="ui segment padding-y">
                    <h1>ACTUALIZAR USUARIO</h1>
                    <div class="ui divider">
                        </div>
                        <form action="?class=Usuarios&view=update" class="ui form " method="post">   
                            <?php $usuarios = parent::consultaPorId($_REQUEST['id']); 
                            ?>              
                            <div class="field">
                                <input type="text" value="<?php echo $usuarios->nombre ?>" name="nombres"  placeholder="Nombres Y Apellidos" required>
                            </div>
                            <div class="field">
                                <input type="email" value="<?php echo $usuarios->email ?>" name="correo" placeholder="Correo" required>
                            </div>
                            <div class="field">
                                <input type="number" value="<?php echo $usuarios->Telefono ?>" name="telefono" placeholder="Télefono" required>
                            </div>
                            <input type="hidden" value="<?php echo $usuarios->id_usuario ?>" name="id" >

                            <button class="ui fluid red button" type="submit">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once("views/layouts/footer.php") ?>
</html>