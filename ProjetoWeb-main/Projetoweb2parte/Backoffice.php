<?php
include "server.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/backofficestyle.css">
    <title>Backoffice PirateHood</title>


</head>
<body>


<div class="container py-5" id="cont1">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">


                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login Backoffice</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" id="form_login">
                                <div class="form-group">
                                    <label for="user">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="user" id="user" required="">

                                </div>
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pass" required="">
                                </div>
                                <div class="submit-button" style="text-align: center">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg" id="login_button">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<div class="container" id="cont2">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" style="cursor:pointer"id="home_button">Backoffice</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                            <a class="nav-link" style="cursor: pointer" id="bdb_button">Produtos</a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <button id="logout_button" class="logout" type="button">Logout</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" id="main">
            <h2 class="titulo">Dados do Site</h2>
            <div class="ativos">
                <div class="ativos2 padding_geral">
                    <div class= "esquerda">
                        Filmes
                    </div>
                    <div class="direita">
                        9
                    </div>
                </div>
                <div class="ativos2 padding_geral">
                    <div class= "esquerda">
                        Series
                    </div>
                    <div class="direita">
                        9
                    </div>
                </div>
                <div class="ativos2 padding_geral">
                    <div class= "esquerda">
                        Atores
                    </div>
                    <div class="direita">
                        9
                    </div>
                </div>
                <div class="ativos2 padding_geral">
                    <div class= "esquerda">
                        Realizadores
                    </div>
                    <div class="direita">
                        9
                    </div>
                </div>
                <div class="padding_geral">
                    <div class= "esquerda">
                        Estudios
                    </div>
                    <div class="direita">
                        6
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12" id="products">
            <h2 class="titulo">Produtos</h2>
            <div class="ativos">
                <div class="ativos2 padding_geral">
                    <div class= "esquerdaCrud">
                        Filmes
                    </div>
                    <div class="direitaCrud">
                            <button id="add1" data-toggle="modal" data-target="#add_filme" class="adicionar" type="button">Adicionar</button>
                            <button id="remove1" class="remover" type="button">Remover</button>
                            <button id="alt1" data-toggle="modal" data-target="#edit_filme" class="alterar" type="button">Alterar</button>
                            <button id="vis1" class="visualizar" type="button" onclick="visualizarfilmes()">Visualizar</button>
                    </div>
                </div>
                <div class="ativos2 padding_geral">
                    <div class= "esquerdaCrud">
                        Series
                    </div>
                    <div class="direitaCrud">
                        <form>
                            <button id="add2" data-toggle="modal" data-target="#add_serie" class="adicionar" type="button">Adicionar</button>
                            <button id="remove2" class="remover" type="button">Remover</button>
                            <button id="alt2" class="alterar" type="button">Alterar</button>
                            <button id="vis2" class="visualizar" type="button">Visualizar</button>
                        </form>
                    </div>
                </div>
                <div class="ativos2 padding_geral">
                    <div class= "esquerdaCrud">
                        Atores
                    </div>
                    <div class="direitaCrud">
                        <form>
                            <button id="add3"data-toggle="modal" data-target="#add_ator" class="adicionar" type="button">Adicionar</button>
                            <button id="remove3" class="remover" type="button">Remover</button>
                            <button id="alt3" class="alterar" type="button">Alterar</button>
                            <button id="vis3" class="visualizar" type="button">Visualizar</button>
                        </form>
                    </div>
                </div>
                <div class="ativos2 padding_geral">
                    <div class= "esquerdaCrud">
                        Realizadores
                    </div>
                    <div class="direitaCrud">
                        <form>
                            <button id="add4"data-toggle="modal" data-target="#add_realizador" class="adicionar" type="button">Adicionar</button>
                            <button id="remove4" class="remover" type="button">Remover</button>
                            <button id="alt4" class="alterar" type="button">Alterar</button>
                            <button id="vis4" class="visualizar" type="button">Visualizar</button>
                        </form>
                    </div>
                </div>
                <div class="padding_geral">
                    <div class= "esquerdaCrud">
                        Estúdios
                    </div>
                    <div class="direitaCrud">
                        <form>
                            <button id="add5"data-toggle="modal" data-target="#add_estudio" class="adicionar" type="button">Adicionar</button>
                            <button id="remove5" class="remover" type="button">Remover</button>
                            <button id="alt5" class="alterar" type="button">Alterar</button>
                            <button id="vis5" class="visualizar" type="button">Visualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_filme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content card card-image bg-dark " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 white-text font-weight-bold mb-2" id="register1"><strong>Adicionar</strong> <a
                                class="font-weight-bold"><strong></strong></a></h3>
                    <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="Backoffice.php">
                        <div class="md-form pb-3">
                            <input type="text" id="image1" class="form-control validate white-text" name="image">
                            <label data-error="wrong" data-success="right" for="imagem">Imagem</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="name1" class="form-control validate white-text" name="name">
                            <label data-error="wrong" data-success="right" for="name">Nome</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="genero1" class="form-control validate white-text" name="genero">
                            <label data-error="wrong" data-success="right" for="genero">género</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="duracao" class="form-control validate white-text" name="duracao">
                            <label data-error="wrong" data-success="right" for="duracao">Duração</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="rel_date" class="form-control validate white-text" name="releasedate">
                            <label data-error="wrong" data-success="right" for="releasedate">Release Date</label>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button id="add_filme" type="submit" name="add_filme" class="btn btn-info btn-block btn-rounded z-depth-1 w-50 mx-auto ">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_serie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content card card-image bg-dark " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 white-text font-weight-bold mb-2" id="register1"><strong>Adicionar</strong> <a
                                class="font-weight-bold"><strong></strong></a></h3>
                    <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="Backoffice.php">
                        <div class="md-form pb-3">
                            <input type="text" id="image2" class="form-control validate white-text" name="image">
                            <label data-error="wrong" data-success="right" for="imagem">Imagem</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="name2" class="form-control validate white-text" name="name">
                            <label data-error="wrong" data-success="right" for="name">Nome</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="genero2" class="form-control validate white-text" name="genero">
                            <label data-error="wrong" data-success="right" for="genero">Género</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="episodios" class="form-control validate white-text" name="episodios">
                            <label data-error="wrong" data-success="right" for="duracao">Episódios</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="estreia" class="form-control validate white-text" name="estreia">
                            <label data-error="wrong" data-success="right" for="relreasedate">Estreia</label>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button id="add_serie" type="submit" name="add_serie" class="btn btn-info btn-block btn-rounded z-depth-1 w-50 mx-auto ">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_realizador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content card card-image bg-dark " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 white-text font-weight-bold mb-2" id="register1"><strong>Adicionar</strong> <a
                                class="font-weight-bold"><strong></strong></a></h3>
                    <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="Backoffice.php">
                        <div class="md-form pb-3">
                            <input type="text" id="image3" class="form-control validate white-text" name="image">
                            <label data-error="wrong" data-success="right" for="imagem">Imagem</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="name3" class="form-control validate white-text" name="name">
                            <label data-error="wrong" data-success="right" for="name">Nome</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="nascimento1" class="form-control validate white-text" name="nascimento">
                            <label data-error="wrong" data-success="right" for="nascimento">Data de nascimento</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="pais1" class="form-control validate white-text" name="pais">
                            <label data-error="wrong" data-success="right" for="pais">País</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="maiorprojeto" class="form-control validate white-text" name="maiorprojeto">
                            <label data-error="wrong" data-success="right" for="maiorprojeto">Maior Projeto</label>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button id="add_realizador" type="submit" name="add_realizador" class="btn btn-info btn-block btn-rounded z-depth-1 w-50 mx-auto ">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_ator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content card card-image bg-dark " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 white-text font-weight-bold mb-2" id="register1"><strong>Adicionar</strong> <a
                                class="font-weight-bold"><strong></strong></a></h3>
                    <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="Backoffice.php">
                        <div class="md-form pb-3">
                            <input type="text" id="image" class="form-control validate white-text" name="image">
                            <label data-error="wrong" data-success="right" for="imagem">Imagem</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="name" class="form-control validate white-text" name="name">
                            <label data-error="wrong" data-success="right" for="name">Nome</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="nascimento2" class="form-control validate white-text" name="nascimento">
                            <label data-error="wrong" data-success="right" for="nascimento">Data de Nascimento</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="altura" class="form-control validate white-text" name="altura">
                            <label data-error="wrong" data-success="right" for="altura">Altura</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="pais" class="form-control validate white-text" name="pais">
                            <label data-error="wrong" data-success="right" for="pais">País</label>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button id="add_ator" type="submit" name="add_ator" class="btn btn-info btn-block btn-rounded z-depth-1 w-50 mx-auto ">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_estudio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content card card-image bg-dark " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 white-text font-weight-bold mb-2" id="register1"><strong>Adicionar</strong> <a
                                class="font-weight-bold"><strong></strong></a></h3>
                    <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="Backoffice.php">
                        <div class="md-form pb-3">
                            <input type="text" id="image" class="form-control validate white-text" name="image">
                            <label data-error="wrong" data-success="right" for="imagem">Imagem</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="name" class="form-control validate white-text" name="name">
                            <label data-error="wrong" data-success="right" for="name">Nome</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="fundacao" class="form-control validate white-text" name="fundacao">
                            <label data-error="wrong" data-success="right" for="fundacao">Fundação</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="local" class="form-control validate white-text" name="local">
                            <label data-error="wrong" data-success="right" for="local">Local</label>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button id="add_estudio" type="submit" name="add_estudio" class="btn btn-info btn-block btn-rounded z-depth-1 w-50 mx-auto ">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_filme" aria-labelledby="myModalLabel"
     aria-hidden="false">
    <div class="modal-dialog bg-light" role="document">
        <div class="modal-content card card-image bg-light " >
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Editar</strong> <a
                                class=" font-weight-bold"><strong></strong></a></h3>
                    <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="Backoffice.php">
                        <div class="md-form pb-3">
                            <input type="text" id="image1" class="form-control validate white-text" name="image">
                            <label data-error="wrong" data-success="right" for="imagem">Imagem</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="name1" class="form-control validate white-text" name="name">
                            <label data-error="wrong" data-success="right" for="name">Nome</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="genero1" class="form-control validate white-text" name="genero">
                            <label data-error="wrong" data-success="right" for="genero">género</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="duracao" class="form-control validate white-text" name="duracao">
                            <label data-error="wrong" data-success="right" for="duracao">Duração</label>
                        </div>
                        <div class="md-form pb-3">
                            <input type="text" id="rel_date" class="form-control validate white-text" name="releasedate">
                            <label data-error="wrong" data-success="right" for="releasedate">Release Date</label>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button name="edit_filme" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="Javascript/backoffice.js"></script>

</body>
</html>