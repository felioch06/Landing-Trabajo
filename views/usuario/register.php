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
                    <h1>CREAR USUARIO</h1>
                    <div class="ui divider">
                        </div>
                        <form action="?class=Usuarios&view=registerUsuarios" class="ui form " method="post">   
                                         
                            <div class="field">
                                <input type="text" name="nombres"  placeholder="Nombres Y Apellidos" required pattern="[A-Za-z0-9]+">
                            </div>
                            <div class="field">
                                <input type="email" name="correo" placeholder="Correo" required >
                            </div>
                            <div class="field">
                                <input type="number" name="telefono" placeholder="Télefono" required >
                            </div>

                            <button class="ui fluid red button" type="submit">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once("views/layouts/footer.php") ?>
</html>