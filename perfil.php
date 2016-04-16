<?php require_once 'duplicados/head.php'; ?>

    <div class="alert alert-success">
        Este es un mensaje de succesfully
    </div>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">PHP :: PERFIL</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <p>principa@taller.php</p>
                </li>
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="perfil.html"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="cuenta.html"><i class="fa fa-gear fa-fw"></i> Cuenta</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                           <a href="principal.html"><i class="fa fa-home fa-fw"></i> Inicio</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

            <form action="perfil.html" method="POST" role="form" style="padding-bottom: 2em">

                <div class="form-group" style="padding-top: 1em;">
                    <img src="assets/img/no-disponible.gif" width="150px" height="150px" style="margin-bottom: .5em;">
                    <input type="file" name="imagen">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Paterno</label>
                    <input type="text" name="apellidop" class="form-control" id="exampleInputEmail1" placeholder="Apellido Paterno">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Materno</label>
                    <input type="text" name="apellidom" class="form-control" id="exampleInputEmail1" placeholder="Apellido Materno">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input type="text" name="telefono" class="form-control" id="exampleInputEmail1" placeholder="Telefono">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Pais</label>
                    <select name="pais" class="form-control" id="exampleInputEmail1">
                        <option value="1">México</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Ciudad</label>
                    <select name="cudad" class="form-control" id="exampleInputEmail1">
                        <option value="1">Puerto Vallarta</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Colonia</label>
                    <select name="colonia" class="form-control" id="exampleInputEmail1">
                        <option value="1">Ixtapa</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Calle</label>
                    <input type="text" name="calle" class="form-control" id="exampleInputEmail1" placeholder="Calle">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Numero</label>
                    <input type="text" name="numero" class="form-control" id="exampleInputEmail1" placeholder="Numero #">
                </div>

                <button type="submit" class="btn btn-success">Guardar Cambios</button>

            </form>
        






        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php require_once 'duplicados/head.php'; ?>
