<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Minha Loja</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Produtos<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Quarda Roupas</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Electrodomesticos</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search" method="get" action="busca.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="busca" placeholder="search">
                    </div>
                    <button class="btn btn-default">Buscar</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Contacto</a></li>

                    <?php
                        if (empty($_SESSION['id'])) {
                    ?>
                        <li><a href="formLogon.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                    <?php
                        }else{
                            if ($_SESSION['adm']==0) {
                                $consulta_user=$conexao->query("SELECT nome FROM users WHERE id_user='$_SESSION[id]'");
                                $exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC);
                            
                     ?>
                     <li><a href="#"><?php echo $exibe_user['nome']; ?></a></li>
                     <li><a href="sair.php">Sair</a></li>
                 <?php }else{  ?>

                    <li><a href="adm.php"><button class="btn btn-sm btn-danger">Adm</button></a></li>
                     <li><a href="sair.php">Sair</a></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>