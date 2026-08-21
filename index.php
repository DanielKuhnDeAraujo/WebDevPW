<?php include "config.php";
include DBAPI;
include(HEADER_TEMPLATE);
$erro =null;
try{
 $db = open_database(); 
} catch (Exception $e){
    $erro = $e;
}?>

<h1>Dashboard</h1>
<hr />

<?php if ($db): ?>

    <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-2">
            <a href="customers/add.php" class="btn btn-secondary">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <i class="fa fa-user-plus fa-5x"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Novo Cliente</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3 col-md-2">
            <a href="customers" class="btn btn-light">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <i class="fa fa-user-group fa-5x"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Clientes</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

<?php else: ?>
    <div class="alert alert-danger" role="alert">
        <p>
            <b>ERRO:</b> Não foi possível Conectar ao Banco de Dados!<br>
            <?= $erro;?>
        </p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>