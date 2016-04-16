<?php 

session_start();

if(isset($_SESSION)){
    unset($_SESSION['usr']);
}

require_once 'duplicados/head.php'; ?>

<?php 
    if(isset($_SESSION['errorLog'])){
        echo '<div class="alert alert-warning">';
        echo $_SESSION['errorLog'];
        echo '</div>';

        #metodo para destruir una variable
        unset($_SESSION['errorLog']);
    }

?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="principal.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'duplicados/foot.php'; ?>  
