<?php 
#lineas para mostrar errores
ini_set('display_errors',true);
error_reporting(E_ALL);

#este metodo habilita la matriz $_SESSION['']
session_start();

require_once 'mysqli/Conexion.php';
require_once 'Errores/Errores.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    #el usuario tiene que mandas datos validos
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    if($email && $password){
        #el usuario tiene que existir en la base de datos
        $conectar = new Conexion();
        #$conectar->conectar();

        trim($password);

        $sql = "SELECT * FROM usuarios WHERE email = '".$email."' AND password = '".$password."'; ";
        $usuario = $conectar->sql($sql);
        $numfilas = $usuario->num_rows;

        if($numfilas > 0){
            foreach($usuario as $fila){
                $_SESSION['usr'] = $fila;
            }
        }else{
            Errores::errorInicio('Usuario o contraseña invalidos');
        }


    }else{
        Errores::errorInicio('Favor de completar bien los campos');
    }

}else{

    if(isset($_SESSION['usr'])){

    }else{
        Errores::errorInicio('Forma de accesar incorrecta');
    }
}















require_once 'duplicados/head.php'; ?>

    <div class="alert alert-warning">
        Este es un mensaje de error
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
                <a class="navbar-brand">PHP :: PRINCIPAL</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <p><?= $_SESSION['usr']['email']; ?></p>
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
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <form action="principal.html" method="GET" role="form" style="padding: .5em 0; text-align: center;">
                                <input type="search" name="search" id="us" style="border: 1px solid #eee; line-height: 2.1; border-radius: 4px; padding-left: .5em" placeholder="Buscar usuario">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search fa-fw"></i></button>
                            </form>                                       
                        </li>
                        <li>
                           <a href="principal.html"><i class="fa fa-home fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                           <a href="usuario.html"><i class="fa fa-plus fa-fw"></i> Agregar Usuario</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

            <h2 style="padding-top: 1em;">Usuarios</h2>

            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Correo</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Rol</th>
                    <th style="text-align: center;">Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>manuel@gmail.com</td>
                    <td>Manuel</td>
                    <td>Valdovinos</td>
                    <td>Carrazco</td>
                    <td>Administrador</td>
                    <td style="text-align: center;">
                        <a class="btn btn-info" href="perfil.html?d=1"><i class="fa fa-remove fa-fw"></i> Ver Info</a>
                        <a class="btn btn-danger" href="principal.html?d=1"><i class="fa fa-remove fa-fw"></i> Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>








        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

 <?php require_once 'duplicados/foot.php'; ?>  
