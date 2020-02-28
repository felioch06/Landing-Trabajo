<?php require_once("views/layouts/header.php") ?>
<body >

    <!-- Banner Index -->
        <div class="ui stackable  grid">
            <div class="row blue">
                <div class="two wide column">
                </div>
                <div class="eight wide column">
                    <img src="assets/img/pic01.png" alt="" srcset="">
                </div>
                <div class="four wide column">

                <!-- Formulario de Registro -->
                    <form action="?class=Usuarios&view=register" class="ui form form-index" method="post">

                        <h3>¿Quieres Ser un <br> Guardian de la Niñez?</h3>
                        <h5>Dejanos tus datos y te contactamos</h5>

                        <div class="field">
                            <input type="text" name="nombres"  placeholder="Nombres Y Apellidos" required pattern="[A-Za-z0-9]+">
                        </div>
                        <div class="field">
                            <input type="email" name="correo" placeholder="Correo" required >
                        </div>
                        <div class="field">
                            <input type="number" name="telefono" placeholder="Télefono" required>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                            <input type="checkbox" tabindex="0" required>
                            <label><h5>Acepto Política de datos personales y términos y condiciones del Sitio
                            </h5></label>
                            </div>
                        </div>
                        <button class="ui fluid red button" type="submit">Submit</button>
                    </form>
                    <!-- Fin Formulario -->

                </div>
            </div>
        </div>
        <div class="ui stackable grid">
            <div class="row row-without-padding">
                <div class="five wide column red-footer" ></div>
                <div class="six wide column blue-footer"></div>
                <div class="five wide column yellow-footer"></div>
            </div>
        </div>
    <!-- Fin Banner Index -->

    <!-- Menú de Navegación -->
        <div class="white">
            <div class="ui stackable container">
                <div class="row ">

                    <div class="two wide  column">
                        <img src="assets/img/png00.png" class="img-size img-responsive" alt="">
                    </div>
                    <div class="ten wide column show">
                        <nav>
                            <ul>
                                <li><a href="">Conóceme</a></li>
                                <li><a href="">Mis Propuestas</a></li>
                                <li><a href="">Guardianes de la Niñez</a></li>
                                <li><a href="">Noticias</a></li>
                                <li><a href="">Agenda</a></li>
                                <li><a href="">
                                    <i class="ui facebook icon"></i>
                                    <i class="ui twitter icon"></i>
                                    <i class="ui instagram icon"></i>
                                </a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="one wide column block">
                    <header>
                        <nav class="navegacion">
                            <ul class="menu">
                                <li class="menu-flex"><a href="#"><i class="ui align justify big  icon"></i></a>
                                    <ul class="submenu">
                                        <li><a href="">Conóceme</a></li>
                                        <li><a href="">Mis Propuestas</a></li>
                                        <li><a href="">Guardianes de la Niñez</a></li>
                                        <li><a href="">Noticias</a></li>
                                        <li><a href="">Agenda</a></li>
                                        <li><a href="">Redes Sociales</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </header>
                    </div>
                 
                </div>
            </div>
        </div>
    <!-- Fin Menú de Navegación -->

    <!-- Sección Video -->
        <div class="ui stackable container">
            <div class="sixteen wide column">
                <iframe align="center" class="video" src="https://www.youtube.com/embed/fA0-_FOi_JA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>            
            </div>
        </div>
    <!-- Fin Sección Video -->
        
    <!-- Sección Propuestas, Conoceme mas, -->
            <div class="ui stackable grid">

                <!-- Sección Conoceme Mas -->
                    <div class="row dark-blue">
                        <div class="three wide column">

                        </div>
                        <div class="ten wide column">
                            <div class="title-two">Conóceme</div>
                            <p>Soy bogotana, de mamá barranquillera y papá paisa. Por eso entiendo que nuestra ciudad debe ser para todos. Soy una mujer alegre, me gusta bailar, cocinar, y viajar. ¡Tengo un perro que adoro y se llama happy, es la felicidad de la casa!</p>

                            <div class="ui animated blue button" tabindex="0">
                                <div class="visible content">Ver más</div>
                                <div class="hidden content">
                                    <i class="down arrow icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Fin Sección Conoceme Mas -->
                
                    <h1 class="title-three">Mis Propuestas</h1>

                <!-- Propuestas -->
                    <div class="row">

                        <div class="two wide column">
                            
                        </div>
                        <div class="six wide column">
                            <div class="white padding-x">
                                <img src="assets/img/png03.png" alt="">
                                <h2 class="sub-title">Bogotá libre de consumo</h2>
                                <p><b>Porque nuestra ciudad es para los niños y sus familias; no para los jíbaros.</b>
                            <br>
                            Vamos a exigirle a la administración de Bogotá que se cumpla el Decreto 1844 de 2018 del Presidente Duque: que se incauten las sustancias ilegales. No puede permitirse que se consuma en el espacio público que es para nuestros niños y para nuestras familias.
                            </p>
                                
                            </div>
                        </div>
                        <div class="six wide column">
                            <div class="white padding-x">
                            <img src="assets/img/png04.png" alt="">

                                <h2 class="sub-title">Movilidad</h2>
                                <p><b>Menos tiempo de movilización, más tiempo para las familias.</b>
                            <br>
                            Apoyaremos a nuestro Alcalde Miguel Urible que pongan en marcha la primera linea del metro de Bogotá que conecta al sur (desde patio bonito) al norte (74 con caracas) en 35 minutos. Reduciendo drásticamente los tiempos de movilidad que hoy rondan las 3 horas.
                            </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="two wide column">

                        </div>
                        <div class="six wide column">
                            <div class="white padding-x">
                            <img src="assets/img/png05.png" alt="">

                                <h2 class="sub-title">Cero violencia contra los niños</h2>
                                <p><b>¡Todo el que se meta con nuestros niños debe pagar!</b>
                            <br>
                            Trabajaremos para que la Secretaría de Seguridad fortalezca a la Policía Vamos a crear una Red de Guardianes de la Niñez en Bogotá para la Infancia y la Adolescencia, trabaje con Medicina Legal y los jueces para que haya una justicia más eficiente y efectiva.  Hoy el 97% de los delitos incentivar las denuncias y el cuidado de nuestros niños (Invitación a la ciudadania para que se sume).  cuentra nuestros niños quedan en la impunidad.
                            </p>
                            <p>
                            Pasaremos un proyecto de acuerdo para que se establezcan protocolos desde la Secretaría Social y la Secretaría de Salud para brindar tratamiento post trauma a los niños que han sido violentados.  Estamos a favor de la cadena perpetua y de los delitos sexuales contra nuestros niños sin preescriban.  Propondremos la creación de bancada de la niñez en el Concejo de Bogotá.
                            </p>
                            </div>
                        </div>
                        <div class="six wide column">
                            <div class="white padding-x padding-10">
                            <img src="assets/img/png06.png" alt="">

                                <h2 class="sub-title">Familias guardianas de los niños</h2>
                                <p><b>Recuperemos los valores y el tiempo en familia.  </b>
                            <br>
                            Vamos a crear una Red de Guardianes de la Niñez en Bogotá para incentivar las denuncias y el cuidado de nuestros niños (Invitación a la ciudadania para que se sume). </p>
                            <p> 
                            Haré veeduría y control para la Secretaría de Educación fortalezca sus escuelas de padres, orientando en prácticas de crianza positiva, rescatando los valores de familia.  Promoveremos la implementación de teletrabajo y horarios flexibles para las madres cabeza de hogar, para que puedan pasar más tiempo de calidad en familia, lo que fortalece el núcleo familiar, el sentido de pertenencia yevita los tiempos de ocio y malas compañías de nuestros niños.
                            </p>
                            </div>
                        </div>
                    </div>
                <!-- Fin Propuestas -->
            </div>
    <!-- FinSección Propuestas, Conoceme mas, -->

    <!-- Sección Segundo Formulario -->
        <div class="ui stackable center aligned grid">
            <div class="row">
                <div class="two wide column light-blue padding-bottom"></div>
                <div class="six wide column light-blue padding-bottom">
                    <img src="assets/img/png07.png" class="img-size-two" alt="">
                    <h1 class="title-four">Mandamientos Para Proteger Nuestros Niños</h1>
                    <div class="circle-number">12</div>
                    <br>
                    <p class="only-dark-blue-font"><b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, ad! Placeat eius quaerat itaque dolor suscipit veniam atque reprehenderit blanditiis! Corporis, distinctio. Ratione, odio tempore dolor expedita quo laboriosam provident!</b></p>
                    <br>

                    <div class="show">
                    <i class="ui inverted circle icon"></i>
                    <i class="ui inverted circle icon"></i>
                    <i class="ui inverted circle icon"></i>
                    <i class="ui inverted circle icon"></i>
                    <i class="ui inverted circle icon"></i>
                    <i class="ui inverted circle icon"></i>
                    <i class="ui circle icon"></i>
                    <i class="ui inverted circle icon"></i>
                    </div>
                </div>
                <div class="one wide column footer-sub padding-bottom"></div>
                <div class="four wide column footer-sub padding-bottom">
                    <!-- Segundo Formulario -->
                        <form action="?class=Usuarios&view=register" class="ui form form-secondary" method="post">

                            <h3 class="title-four title-center">¿Quieres Ser un Guardian de la Niñez?</h3>
                            <h5>Dejanos tus datos y te contactamos</h5>
                            <div class="field">
                                <input type="text" name="nombres"  placeholder="Nombres Y Apellidos" required pattern="[A-Za-z0-9]+">
                            </div>
                            <div class="field">
                                <input type="email" name="correo" placeholder="Correo" required >
                            </div>
                            <div class="field">
                                <input type="number" name="telefono" placeholder="Télefono" required>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                <input type="checkbox" tabindex="0" required>
                                <label><h5>Acepto Política de datos personales y términos y condiciones del Sitio
                                </h5></label>
                                </div>
                            </div>
                            <button class="ui fluid red button" type="submit">Submit</button>
                        </form>
                    <!-- Fin segundo Formulario -->
                    
                </div>
                <div class="three wide column footer-sub padding-bottom"></div>
            </div>
        </div>
    <!-- Fin Sección Segundo Formulario -->

    <!-- Sección Noticias -->
        <div class="ui stackable grid notice">
            <div class="row">
                <div class="one wide column"></div>
                <div class="thirteen wide column">
                    <h1 class="title-three notice-align">Noticias</h1>
                </div>
                <div class="two wide column">
                    <div class="show">
                        <ul>
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                        </ul>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="one wide column"></div>
                    <div class="five wide column">

                    <h2 class="only-dark-blue-font">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, earum deleniti amet voluptatum fuga in at placeat. Aliquam labore, nesciunt pariatur recusandae distinctio similique beatae veritatis! Eveniet quae dolores recusandae?

                        <p class="only-light-blue-font"><i class="ui clock icon"></i> Ago 12 - 2019 </p>
                        
                        </div>
                <div class="five wide column ">
                    <h2 class="only-dark-blue-font"> Adpsum dolor sit variuos luctus</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quo iure possimus, dicta error vero earum. Blanditiis in maiores repudiandae! Praesentium qui expedita, quo optio nobis numquam aliquam ratione unde!

                        <p class="only-light-blue-font"><i class="ui clock icon"></i> Ago 12 - 2019 </p>
                </div>
                <div class="five wide column ">
                    <h2 class="only-dark-blue-font">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam obcaecati dolorem sunt sint nulla repellendus molestiae illum assumenda esse illo exercitationem quibusdam odit aut, sed omnis reprehenderit doloremque, quae nisi.

                        <p class="only-light-blue-font"><i class="ui clock icon"></i> Ago 12 - 2019 </p>
                </div>
            </div>
        </div>
    <!-- fin sección noticias -->
    
    <!-- Sección agenda -->
        <div class="ui stackable grid">
            <div class="row">
                <div class="one wide column"></div>
                <div class="thirteen wide column">
                    <h1 class="title-three notice-align">Agenda</h1>
                </div>
                <div class="two wide column">
                    <div class="show">
                        <ul>
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                        </ul>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="one wide column"></div>
                    <div class="five wide column">
                    <p class="only-light-blue-font without-line-height"> REUNION CON LA COMUNIDAD </p>
                    <h2 class="only-dark-blue-font">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, earum deleniti amet voluptatum fuga in at placeat. Aliquam labore, nesciunt pariatur recusandae distinctio similique beatae veritatis! Eveniet quae dolores recusandae?

                        <p class="only-light-blue-font"><i class="ui clock icon"></i> Ago 12 - 2019 </p>
                        
                        </div>
                <div class="five wide column ">
                    <p class="only-light-blue-font without-line-height"> REUNION CON LA COMUNIDAD </p>
                    <h2 class="only-dark-blue-font"> Adpsum dolor sit variuos luctus</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quo iure possimus, dicta error vero earum. Blanditiis in maiores repudiandae! Praesentium qui expedita, quo optio nobis numquam aliquam ratione unde!

                        <p class="only-light-blue-font"><i class="ui clock icon"></i> Ago 12 - 2019 </p>
                </div>
                <div class="five wide column ">
                    <p class="only-light-blue-font without-line-height"> REUNION CON LA COMUNIDAD </p>
                    <h2 class="only-dark-blue-font">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam obcaecati dolorem sunt sint nulla repellendus molestiae illum assumenda esse illo exercitationem quibusdam odit aut, sed omnis reprehenderit doloremque, quae nisi.

                        <p class="only-light-blue-font"><i class="ui clock icon"></i> Ago 12 - 2019 </p>
                </div>
            </div>
        </div>
    <!-- Fin Sección agenda -->

</body>
<?php require_once("views/layouts/footer.php") ?>
</html>