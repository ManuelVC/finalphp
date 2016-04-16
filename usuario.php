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
                <a class="navbar-brand">PHP :: INFORMACION</a>
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

            <form action="usuario.html" method="POST" role="form" style="padding-bottom: 2em">
                <h2>Nuevo Usuario</h2>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Confirmar Contraseña</label>
                    <input type="password" name="passwordc" class="form-control" id="exampleInputEmail1" placeholder="Contraseña">
                </div>

                <button type="submit" class="btn btn-primary">Crear Usuario</button>

            </form>
        

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php require_once 'duplicados/foot.php'; ?>  
