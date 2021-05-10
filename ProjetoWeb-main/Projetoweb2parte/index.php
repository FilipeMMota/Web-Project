<?php
include "server.php"
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="Css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <title>PirateHood</title>
    </head>

    <body>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" style="cursor:pointer"id="home_button"><img class="logo" src="img/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" style="cursor: pointer" id="movies_button">Filmes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"style="cursor: pointer" id="series_button">Series</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="cursor: pointer" id="realizadores_button">Realizadores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="cursor: pointer" id="atores_button">Atores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="cursor: pointer" id="estudios_button">Estúdios</a>
                            </li>
                        </ul>

                        <div id="semlogin"
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "style='display:none';";
                            }
                            else{
                                echo "style='display:block';";
                            } ?>
                        >
                            <form class="form-inline">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="../icone/username.png"></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" id="username" name="username" aria-describedby="username">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="../icone/password.png"></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" id="password" name="password" aria-describedby="password">
                                </div>
                                    <button id="login_button" name="login" class="log btn btn-light" type="submit">Login</button>
                                    <button class="log btn btn-light" type="button"data-toggle="modal" data-target="#registerForm">Register</button>
                            </form>
                        </div>
                        <div  id="comlogin"
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "style='display:block';";

                            }
                            else{
                                echo "style='display:none';";
                            } ?> >
                            <ul class="navbar-nav mr-auto" style="">
                                <li class="nav-item">
                                    <span id="user_welcome" class="nav-link" >Welcome back, <?php echo $_SESSION['username']?>😎</span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="cursor: pointer" id="favoritos_button">Favoritos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="cursor: pointer" id="perfil_button">Perfil</a>
                                </li class="nav-item">
                                <li class="nav-item">
                                    <a class="nav-link" style="cursor: pointer" href="Backoffice.php" id="Areservarda_button">Admin Zone</a>
                                </li class="nav-item">
                                <li>
                                    <a class="nav-link" style="cursor: pointer" href="logout.php" >Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>


                <div class="container" id="home">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group margin" >
                                <div class="input-group-prepend">
                                     <span class="input-group-text cyan lighten-2"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </div>
                    <h2 id="destaque"><b>POPULAR ON PIRATEHOOD</b></h2>
                    <div class="row">
                        <div class = "col-sm-12">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/narcos.jpg" class="img-fluid d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/mandalorian.jpg" class="img-fluid d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/thisus.jpg" class="img-fluid d-block" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h2 id="brevemente"><b>COMING SOON</b></h2>
                    <div class="row">
                        <div class="col-4">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/homeanime.jpg" alt="Card image cap">
                                <div class="card-body" >
                                    <h5 class="card-title"><b>Shingeki no kyojin</b></h5>
                                    <p class="card-text">Will Eren and his friends outlive the titans? Tune in for the epic season finale.</p>
                                    <p class="btn btn-primary reminder"><i class="far fa-bell"></i> Remind me</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/homeserie.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Stranger Things</b></h5>
                                    <p class="card-text">The boys are back with new mysteries to solve in the season 4 premiere.</p>
                                    <p class="btn btn-primary reminder"><i class="far fa-bell"></i> Remind me</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/homefilme.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Black Widow</b></h5>
                                    <p class="card-text">Join Black Widow in this amazing adventure to stop Taskmaster.</p>
                                    <p class="btn btn-primary reminder"><i class="far fa-bell"></i> Remind me</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" id="movies">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group margin" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text cyan lighten-2"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" id="jojoMovie">
                            <div class="card card-nova" >
                                <img class="card-img-top" src="img/moviesjojo.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Jojo Rabbit</b></h5>
                                    <p class="card-text"><b>Genre:</b> Comedy <br> <b>Duration:</b> 1h48min <br> <b>Release Date:</b> 18/10/2019</p>
                                    <div id="star">
                                        <p class="btn btn-primary buttonAdd" id="buttonAddJojo" onclick="addFav('jojoMovie', 'buttonAddJojo', 'buttonRemoveJojo')"><i class="far fa-star"></i> Add to Favorites</p>
                                        <p class="btn btn-primary" id="buttonRemoveJojo" onclick="removeFav('jojoMovie', 'buttonRemoveJojo', 'buttonAddJojo')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="showmanMovie">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/moviesshowman.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>The Greatest Showman</b></h5>
                                    <p class="card-text"><b>Genre:</b> Musical/Drama <br> <b>Duration:</b> 1h46min <br> <b>Release Date:</b> 28/9/2017</p>
                                    <p class="btn btn-primary" id="buttonAddShowman" onclick="addFav('showmanMovie', 'buttonAddShowman', 'buttonRemoveShowman')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveShowman" onclick="removeFav('showmanMovie', 'buttonRemoveShowman', 'buttonAddShowman')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id = "inceptionMovie">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/moviesinception.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Inception</b></h5>
                                    <p class="card-text"><b>Genre:</b> Action/Syfy <br> <b>Duration:</b> 2h42min <br> <b>Release Date:</b> 22/7/2010</p>
                                    <p class="btn btn-primary" id="buttonAddInception" onclick="addFav('inceptionMovie', 'buttonAddInception', 'buttonRemoveInception')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveInception" onclick="removeFav('inceptionMovie', 'buttonRemoveInception', 'buttonAddInception')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-4" id = "kiminonawaMovie">
                                <div class="card card-nova">
                                    <img class="card-img-top" src="img/movieskiminonawa.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Kimi no na wa</b></h5>
                                        <p class="card-text"><b>Genre:</b> Romance/Drama <br> <b>Duration:</b> 1h52min <br> <b>Release Date:</b> 26/08/2016</p>
                                        <p class="btn btn-primary" id="buttonAddKiminonawa" onclick="addFav('kiminonawaMovie', 'buttonAddKiminonawa', 'buttonRemoveKiminonawa')"><i class="far fa-star"></i> Add to Favorites</p>
                                        <p class="btn btn-primary" id="buttonRemoveKiminonawa" onclick="removeFav('kiminonawaMovie', 'buttonRemoveKiminonawa', 'buttonAddKiminonawa')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" id = "jokerMovie">
                                <div class="card card-nova">
                                    <img class="card-img-top" src="img/moviesjoker.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Joker</b></h5>
                                        <p class="card-text"><b>Genre:</b> Crime/Drama/Thriller <br> <b>Duration:</b> 2h2min <br> <b>Release Date:</b> 2/10/2019</p>
                                        <p class="btn btn-primary" id="buttonAddJoker" onclick="addFav('jokerMovie', 'buttonAddJoker', 'buttonRemoveJoker')"><i class="far fa-star"></i> Add to Favorites</p>
                                        <p class="btn btn-primary" id="buttonRemoveJoker" onclick="removeFav('jokerMovie', 'buttonRemoveJoker', 'buttonAddJoker')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" id = "avengersMovie">
                                <div class="card card-nova">
                                    <img class="card-img-top" src="img/moviesavengers.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Avengers</b></h5>
                                        <p class="card-text"><b>Genre:</b> Action <br> <b>Duration:</b> 3h2min <br> <b>Release Date:</b> 25/4/2019</p>
                                        <p class="btn btn-primary" id="buttonAddAvengers" onclick="addFav('avengersMovie', 'buttonAddAvengers', 'buttonRemoveAvengers')"><i class="far fa-star"></i> Add to Favorites</p>
                                        <p class="btn btn-primary" id="buttonRemoveAvengers" onclick="removeFav('avengersMovie', 'buttonRemoveAvengers', 'buttonAddAvengers')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-4" id="parasiteMovie">
                                    <div class="card card-nova">
                                        <img class="card-img-top" src="img/moviesparasyte.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Parasite</b></h5>
                                            <p class="card-text"><b>Genre:</b> Thriller/Comedy <br> <b>Duration:</b> 2h12min <br> <b>Release Date:</b> 30/05/2019</p>
                                            <p class="btn btn-primary" id="buttonAddParasite" onclick="addFav('parasiteMovie', 'buttonAddParasite', 'buttonRemoveParasite')"><i class="far fa-star"></i> Add to Favorites</p>
                                            <p class="btn btn-primary" id="buttonRemoveParasite" onclick="removeFav('parasiteMovie', 'buttonRemoveParasite', 'buttonAddParasite')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" id = '2012Movie'>
                                    <div class="card card-nova">
                                        <img class="card-img-top" src="img/movies2012.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>2012</b></h5>
                                            <p class="card-text"><b>Genre:</b> Thriller/Action <br> <b>Duration:</b> 2h38min <br> <b>Release Date:</b> 12/09/2009</p>
                                            <p class="btn btn-primary" id="buttonAdd2012" onclick="addFav('2012Movie', 'buttonAdd2012', 'buttonRemove2012')"><i class="far fa-star"></i> Add to Favorites</p>
                                            <p class="btn btn-primary" id="buttonRemove2012" onclick="removeFav('2012Movie', 'buttonRemove2012', 'buttonAdd2012')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" id = 'avatarMovie'>
                                    <div class="card card-nova">
                                        <img class="card-img-top" src="img/moviesavatar.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Avatar</b></h5>
                                            <p class="card-text"><b>Genre:</b> Syfy <br> <b>Duration:</b> 2h42min <br> <b>Release Date:</b> 17/12/2009</p>
                                            <p class="btn btn-primary" id="buttonAddAvatar" onclick="addFav('avatarMovie', 'buttonAddAvatar', 'buttonRemoveAvatar')"><i class="far fa-star"></i> Add to Favorites</p>
                                            <p class="btn btn-primary" id="buttonRemoveAvatar" onclick="removeFav('avatarMovie', 'buttonRemoveAvatar', 'buttonAddAvatar')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                </div>

                <div class="container" id="series">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group md-form form-sm form-1 pl-0 margin" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text cyan lighten-2" ><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" id="demonslayerAnime">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/demonslayer.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Demon Slayer</b></h5>
                                    <p class="card-text"><b>Genre:</b> Anime</br><b>Episodes:</b> 26</br><b>Aired:</b> 6/4/2019</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddDemon" onclick="addFav('demonslayerAnime', 'buttonAddDemon', 'buttonRemoveDemon')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveDemon" onclick="removeFav('demonslayerAnime', 'buttonRemoveDemon', 'buttonAddDemon')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="peakySeries">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/peaky.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Peaky Blinders</b></h5>
                                    <p class="card-text"><b>Genre:</b> Action</br><b>Episodes:</b> 30</br><b>Aired:</b> 12/9/2013 </p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddPeaky" onclick="addFav('peakySeries', 'buttonAddPeaky', 'buttonRemovePeaky')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemovePeaky" onclick="removeFav('peakySeries', 'buttonRemovePeaky', 'buttonAddPeaky')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="BreakingBadSeries">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/bb.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Breaking Bad</b></h5>
                                    <p class="card-text"><b>Genre:</b> Drama</br><b>Episodes:</b> 62</br><b>Aired:</b> 20/1/2008</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddBB" onclick="addFav('BreakingBadSeries', 'buttonAddBB', 'buttonRemoveBB')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveBB" onclick="removeFav('BreakingBadSeries', 'buttonRemoveBB', 'buttonAddBB')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="vikingSeries">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/vikings.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Vikings</b></h5>
                                    <p class="card-text"><b>Genre:</b> Action</br><b>Episodes:</b> 79</br><b>Aired:</b> 3/3/2013</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddVikings" onclick="addFav('vikingSeries', 'buttonAddVikings', 'buttonRemoveVikings')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveVikings" onclick="removeFav('vikingSeries', 'buttonRemoveVikings', 'buttonAddVikings')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="gotSeries">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/got.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Game of Thrones</b></h5>
                                    <p class="card-text"><b>Genre:</b> Drama</br><b>Episodes:</b> 60</br><b>Aired:</b> 17/4/2011</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddGot" onclick="addFav('gotSeries', 'buttonAddGot', 'buttonRemoveGot')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveGot" onclick="removeFav('gotSeries', 'buttonRemoveGot', 'buttonAddGot')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id = "witcherSeries">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/witcher.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>The Witcher</b></h5>
                                    <p class="card-text"><b>Genre:</b> Fantasy</br><b>Episodes:</b> 8</br><b>Aired:</b> 20/12/2019</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddWitcher" onclick="addFav('witcherSeries', 'buttonAddWitcher', 'buttonRemoveWitcher')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveWitcher" onclick="removeFav('witcherSeries', 'buttonRemoveWitcher', 'buttonAddWitcher')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="blackSeries">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/black.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Black Mirror</b></h5>
                                    <p class="card-text"><b>Genre:</b> Satire</br><b>Episodes:</b> 13</br><b>Aired:</b> 04/12/2011</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddBlack" onclick="addFav('blackSeries', 'buttonAddBlack', 'buttonRemoveBlack')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveBlack" onclick="removeFav('blackSeries', 'buttonRemoveBlack', 'buttonAddBlack')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id = "friendSeries">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/friends.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Friends</b></h5>
                                    <p class="card-text"><b>Genre:</b> Comedy</br><b>Episodes:</b> 236</br><b>Aired:</b> 22/09/1994</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddFriends" onclick="addFav('friendSeries', 'buttonAddFriends', 'buttonRemoveFriends')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveFriends" onclick="removeFav('friendSeries', 'buttonRemoveFriends', 'buttonAddFriends')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="simpSeries">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/simpsons.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>The Simpsons</b></h5>
                                    <p class="card-text"><b>Genre:</b> Animated</br><b>Episodes:</b> 639</br><b>Aired:</b> 17/12/1989</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddSimp" onclick="addFav('simpSeries', 'buttonAddSimp', 'buttonRemoveSimp')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveSimp" onclick="removeFav('simpSeries', 'buttonRemoveSimp', 'buttonAddSimp')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" id="realizadores">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group margin" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text cyan lighten-2"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" id = 'VinceReal'>
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/vince.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Vince Gilligan</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 10/02/1967 </br><b>Country:</b> USA (Virgínia) </br><b>Biggest Project:</b> Breaking Bad </p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddVince" onclick="addFav('VinceReal', 'buttonAddVince', 'buttonRemoveVince')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveVince" onclick="removeFav('VinceReal', 'buttonRemoveVince', 'buttonAddVince')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="NolanReal">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/nolan.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Christopher Nolan</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 30/07/1970 </br><b>Country:</b> UK (London) </br><b>Biggest Project:</b> The Dark Knight Trilogy</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddNolan" onclick="addFav('NolanReal', 'buttonAddNolan', 'buttonRemoveNolan')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveNolan" onclick="removeFav('NolanReal', 'buttonRemoveNolan', 'buttonAddNolan')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="knightReal">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/knight.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Steven Knight</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 21/03/1959 </br><b>Country:</b> UK (Birmingham) </br><b>Biggest Project:</b> Peaky Blinders</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddknight" onclick="addFav('knightReal', 'buttonAddknight', 'buttonRemoveknight')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveknight" onclick="removeFav('knightReal', 'buttonRemoveknight', 'buttonAddknight')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="StevenReal">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/steven.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Steven Spielberg</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 10/02/1967 </br><b>Country:</b> USA (Virgínia) </br><b>Biggest Project:</b> Breaking Bad </p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddSteven" onclick="addFav('StevenReal', 'buttonAddSteven', 'buttonRemoveSteven')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveSteven" onclick="removeFav('StevenReal', 'buttonRemoveSteven', 'buttonAddSteven')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="QuentinReal">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/quentin.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Quentin Tarantino</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 27/03/1963 </br><b>Country:</b> USA (Tennessee) </br><b>Biggest Project:</b> Pulp Fiction </p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddQuentin" onclick="addFav('QuentinReal', 'buttonAddQuentin', 'buttonRemoveQuentin')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveQuentin" onclick="removeFav('QuentinReal', 'buttonRemoveQuentin', 'buttonAddQuentin')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="GeorgeReal">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/george.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>George R. R. Martin</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 20/09/1948 </br><b>Country:</b> USA (New Jersey) </br><b>Biggest Project:</b> A Song of Ice and Fire </p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddGeorge" onclick="addFav('GeorgeReal', 'buttonAddGeorge', 'buttonRemoveGeorge')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveGeorge" onclick="removeFav('GeorgeReal', 'buttonRemoveGeorge', 'buttonAddGeorge')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="BongReal">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/bong.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Bong Joon-ho</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 14/09/1969 </br><b>Country:</b> Seul Corean (Daegu) </br><b>Biggest Project:</b> Parasite </p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddBong" onclick="addFav('BongReal', 'buttonAddBong', 'buttonRemoveBong')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveBong" onclick="removeFav('BongReal', 'buttonRemoveBong', 'buttonAddBong')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="RolandReal">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/roland.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Roland Emmerich</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 10/11/1955 </br><b>Country:</b> Germany (Stuttgart) </br><b>Biggest Project:</b> 2012 </p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddRoland" onclick="addFav('RolandReal', 'buttonAddRoland', 'buttonRemoveRoland')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveRoland" onclick="removeFav('RolandReal', 'buttonRemoveRoland', 'buttonAddRoland')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="LucasReal">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/lucas.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>George Lucas</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 14/05/1944 </br><b>Country:</b> USA (California) </br><b>Biggest Project:</b> Star Wars </p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddLucas" onclick="addFav('LucasReal', 'buttonAddLucas', 'buttonRemoveLucas')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveLucas" onclick="removeFav('LucasReal', 'buttonRemoveLucas', 'buttonAddLucas')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" id="atores">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group margin" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text cyan lighten-2"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" id="DiCaprioActor">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/di.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Leonardo DiCaprio</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 11/11/1974 </br><b>Height:</b> 1.83m</br><b>Country:</b> USA (Los Angeles) </p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddCaprio" onclick="addFav('DiCaprioActor', 'buttonAddCaprio', 'buttonRemoveCaprio')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveCaprio" onclick="removeFav('DiCaprioActor', 'buttonRemoveCaprio', 'buttonAddCaprio')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="CillianActor">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/cill.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Cillian Murphy</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 25/05/1976 </br><b>Height:</b> 1.72m</br><b>Country:</b> Ireland (Douglas)</br></p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddCillian" onclick="addFav('CillianActor', 'buttonAddCillian', 'buttonRemoveCillian')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveCillian" onclick="removeFav('CillianActor', 'buttonRemoveCillian', 'buttonAddCillian')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" id="TomActor">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/tom.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Tom Hardy</b></h5>
                                    <p class="card-text"><b>Birth Date:</b> 15/09/1977 </br><b>Height:</b> 1.75m</br><b>Country:</b> UK (London)</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddTom" onclick="addFav('TomActor', 'buttonAddTom', 'buttonRemoveTom')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveTom" onclick="removeFav('TomActor', 'buttonRemoveTom', 'buttonAddTom')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                            <div class="col-4" id="KitActor">
                                <div class="card card-nova">
                                    <img class="card-img-top" src="img/kitha.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Kit Harington</b></h5>
                                        <p class="card-text"><b>Birth Date:</b> 26/12/1986 </br><b>Height:</b> 1.73m</br><b>Country:</b> UK (London) </p>
                                        <p class="btn btn-primary buttonAdd" id="buttonAddKit" onclick="addFav('KitActor', 'buttonAddKit', 'buttonRemoveKit')"><i class="far fa-star"></i> Add to Favorites</p>
                                        <p class="btn btn-primary" id="buttonRemoveKit" onclick="removeFav('KitActor', 'buttonRemoveKit', 'buttonAddKit')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" id="JoaquinActor">
                                <div class="card card-nova">
                                    <img class="card-img-top" src="img/joaquin.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Joaquin Phoenix</b></h5>
                                        <p class="card-text"><b>Birth Date:</b> 28/10/1974 </br><b>Height:</b> 1.73m</br><b>Country:</b> Porto Rico (San Juan) </p>
                                        <p class="btn btn-primary buttonAdd" id="buttonAddJoaquin" onclick="addFav('JoaquinActor', 'buttonAddJoaquin', 'buttonRemoveJoaquin')"><i class="far fa-star"></i> Add to Favorites</p>
                                        <p class="btn btn-primary" id="buttonRemoveJoaquin" onclick="removeFav('JoaquinActor', 'buttonRemoveJoaquin', 'buttonAddJoaquin')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" id="BryanActor">
                                <div class="card card-nova">
                                    <img class="card-img-top" src="img/bryan.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Bryan Cranston</b></h5>
                                        <p class="card-text"><b>Birth Date:</b> 07/03/1956 </br><b>Height:</b> 1.79m</br><b>Country:</b> USA (Los Angeles) </p>
                                        <p class="btn btn-primary buttonAdd" id="buttonAddBryan" onclick="addFav('BryanActor', 'buttonAddBryan', 'buttonRemoveBryan')"><i class="far fa-star"></i> Add to Favorites</p>
                                        <p class="btn btn-primary" id="buttonRemoveBryan" onclick="removeFav('BryanActor', 'buttonRemoveBryan', 'buttonAddBryan')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                    </div>
                                </div>
                            </div>
                                <div class="col-4" id='ScarletActor'>
                                    <div class="card card-nova">
                                        <img class="card-img-top" src="img/scarlet.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Scarlett Johansson</b></h5>
                                            <p class="card-text"><b>Birth Date:</b> 22/11/1984 </br><b>Height:</b> 1.60m</br><b>Country:</b> USA (Nova York) </p>
                                            <p class="btn btn-primary buttonAdd" id="buttonAddScarlet" onclick="addFav('ScarletActor', 'buttonAddScarlet', 'buttonRemoveScarlet')"><i class="far fa-star"></i> Add to Favorites</p>
                                            <p class="btn btn-primary" id="buttonRemoveScarlet" onclick="removeFav('ScarletActor', 'buttonRemoveScarlet', 'buttonAddScarlet')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" id = 'HughActor'>
                                    <div class="card card-nova">
                                        <img class="card-img-top" src="img/hugh.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Hugh Jackman</b></h5>
                                            <p class="card-text"><b>Birth Date:</b> 12/10/1968 </br><b>Height:</b> 1.90m</br><b>Country:</b> Australia (Sydney) </p>
                                            <p class="btn btn-primary buttonAdd" id="buttonAddHugh" onclick="addFav('HughActor', 'buttonAddHugh', 'buttonRemoveHugh')"><i class="far fa-star"></i> Add to Favorites</p>
                                            <p class="btn btn-primary" id="buttonRemoveHugh" onclick="removeFav('HughActor', 'buttonRemoveHugh', 'buttonAddHugh')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" id="KateryinActor">
                                    <div class="card card-nova">
                                        <img class="card-img-top" src="img/kathrin.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>Katheryn Winnick</b></h5>
                                            <p class="card-text"><b>Birth Date:</b> 17/12/1977 </br><b>Height:</b> 1.68m</br><b>Country:</b> Canada (Toronto) </p>
                                            <p class="btn btn-primary buttonAdd" id="buttonAddKat" onclick="addFav('KateryinActor', 'buttonAddKat', 'buttonRemoveKat')"><i class="far fa-star"></i> Add to Favorites</p>
                                            <p class="btn btn-primary" id="buttonRemoveKat" onclick="removeFav('KateryinActor', 'buttonRemoveKat', 'buttonAddKat')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>

                <div class="container" id="estudios">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group margin" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text cyan lighten-2"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" id="paramountStudio">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/paramount.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Paramount Studios</b></h5>
                                    <p class="card-text"><b>Foundation:</b> 08/05/1912</br> <b>Headquarters:</b> Los Angeles, USA</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddpar" onclick="addFav('paramountStudio', 'buttonAddpar', 'buttonRemovepar')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemovepar" onclick="removeFav('paramountStudio', 'buttonRemovepar', 'buttonAddpar')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6" id="WBStudio">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/wanerbros.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Warner Bros</b></h5>
                                    <p class="card-text"><b>Foundation:</b> 04/04/1923</br> <b>Headquarters:</b> Watford, UK</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAddWB" onclick="addFav('WBStudio', 'buttonAddWB', 'buttonRemoveWB')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveWB" onclick="removeFav('WBStudio', 'buttonRemoveWB', 'buttonAddWB')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-6" id="20Studio">
                            <div class="card card-nova">
                                <img class="card-img-top" src="img/20century.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>20th Century Fox</b></h5>
                                    <p class="card-text"><b>Foundation:</b> 31/05/1935</br> <b>Headquarters:</b> Los Angeles, USA</p>
                                    <p class="btn btn-primary buttonAdd" id="buttonAdd20" onclick="addFav('20Studio', 'buttonAdd20', 'buttonRemove20')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemove20" onclick="removeFav('20Studio', 'buttonRemove20', 'buttonAdd20')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-6" id="pixarStudio">
                             <div class="card card-nova">
                                 <img class="card-img-top" src="img/pixar.jpg" alt="Card image cap">
                                 <div class="card-body">
                                     <h5 class="card-title"><b>Pixar</b></h5>
                                     <p class="card-text"><b>Foundation:</b> 3/02/1986</br> <b>Headquarters:</b> California, USA</p>
                                     <p class="btn btn-primary buttonAdd" id="buttonAddPixar" onclick="addFav('pixarStudio', 'buttonAddPixar', 'buttonRemovePixar')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemovePixar" onclick="removeFav('pixarStudio', 'buttonRemovePixar', 'buttonAddPixar')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6" id="disneyStudio">
                             <div class="card card-nova">
                                 <img class="card-img-top" src="img/waltdisney.jpg" alt="Card image cap">
                                 <div class="card-body">
                                     <h5 class="card-title"><b>Walt Disney</b></h5>
                                     <p class="card-text"><b>Foundation:</b> 16/10/1923</br> <b>Headquarters:</b> California, USA</p>
                                     <p class="btn btn-primary buttonAdd" id="buttonAddDisney" onclick="addFav('disneyStudio', 'buttonAddDisney', 'buttonRemoveDisney')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveDisney" onclick="removeFav('disneyStudio', 'buttonRemoveDisney', 'buttonAddDisney')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-6" id="UPStudio">
                             <div class="card card-nova">
                                 <img class="card-img-top" src="img/universal.jpg" alt="Card image cap">
                                 <div class="card-body">
                                     <h5 class="card-title"><b>Universal pictures</b></h5>
                                     <p class="card-text"><b>Foundation:</b> 30/04/1912</br> <b>Headquarters:</b> California, EUA</p>
                                     <p class="btn btn-primary buttonAdd" id="buttonAddUP" onclick="addFav('UPStudio', 'buttonAddUP', 'buttonRemoveUP')"><i class="far fa-star"></i> Add to Favorites</p>
                                    <p class="btn btn-primary" id="buttonRemoveUP" onclick="removeFav('UPStudio', 'buttonRemoveUP', 'buttonAddUP')"><i class="fas fa-trash"></i></i> Remove from Favorites</p>
                                 </div>
                             </div>
                         </div>
                     </div>

                </div>

                <div class="container" id="favoritos" style="min-height:800px;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group margin" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text cyan lighten-2"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                    </div>
                    <h1 id="fav_header"><b>Favoritos</b></h1>
                    <div class="row" id="insertFav">

                    </div>
                </div>

                <div class="container" id="perfil">
                    <h1 id="per_header"><b>Perfil</b></h1>
                    <div class="row shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="col-4">
                            <div class="shadow p-3 mb-5 bg-white rounded">
                                <h1 id="change_user"><strong><?php echo $_SESSION['username']?></strong></h1>
                                <button class="perfil_button btn" data-toggle="modal" data-target="#AlterarUsername"><strong style="color: blue">Alterar Username</strong></button>
                                <button class="perfil_button btn" data-toggle="modal" data-target="#AlterarPassword"><strong style="color: blue">Alterar Password</strong></button>
                                <button class="perfil_button btn" data-toggle="modal" data-target="#AlterarEmail"><strong style="color: blue">Alterar Email</strong></button>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="shadow p-3 mb-5 bg-white rounded">
                                <div class="esquerda">
                                    <h1><strong>Favoritos</strong></h1>
                                </div>
                                <div>
                                    <div class ="esquerda">
                                        <h4><strong>Filmes</strong></h4>
                                    </div>
                                    <div class="direita">
                                        <strong>6</strong>
                                    </div>
                                </div>
                                <div>
                                    <div class ="esquerda">
                                        <h4><strong>Séries</strong></h4>
                                    </div>
                                    <div class="direita">
                                        <strong>3</strong>
                                    </div>
                                </div>
                                <div>
                                    <div class ="esquerda">
                                        <h4><strong>Realizadores</strong></h4>
                                    </div>
                                    <div class="direita">
                                        <strong>2</strong>
                                    </div>
                                </div>
                                <div>
                                    <div class ="esquerda">
                                        <h4><strong>Atores</strong></h4>
                                    </div>
                                    <div class="direita">
                                        <strong>5</strong>
                                    </div>
                                </div>
                                <div>
                                    <div class ="esquerda">
                                        <h4><strong>Estúdios</strong></h4>
                                    </div>
                                    <div class="direita">
                                        <strong>3</strong>
                                    </div>
                                </div>
                                <div>
                                    <div class ="esquerda">
                                        <h4><strong>Total</strong></h4>
                                    </div>
                                    <div class="direita">
                                        <strong>19</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="AlterarUsername" tabindex="-1" role="dialog" aria-labelledby="perfilChanges" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Alterar Username</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="md-form pb-3">
                                        <label data-error="wrong" data-success="right" for="username">Novo Username</label>
                                        <input type="text" id="usernamePerfil" class="form-control validate white-text" name="username1">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="buttonNome" type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="AlterarPassword" tabindex="-1" role="dialog" aria-labelledby="perfilChanges" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Alterar Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="md-form pb-3">
                                        <label data-error="wrong" data-success="right" for="password">Password Atual</label>
                                        <input type="password" id="passwordPerfilExistente" class="form-control validate white-text" name="passwordExistente">
                                    </div>
                                    <div class="md-form pb-3">
                                        <label data-error="wrong" data-success="right" for="password">Nova Password</label>
                                        <input type="password" id="passwordPerfil1" class="form-control validate white-text" name="password1">
                                    </div>
                                    <div class="md-form pb-3">
                                        <label data-error="wrong" data-success="right" for="password">Confirmar Password</label>
                                        <input type="password" id="passwordPerfil2" class="form-control validate white-text" name="password2">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="buttonPassword" type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="AlterarEmail" tabindex="-1" role="dialog" aria-labelledby="perfilChanges" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Alterar Email</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="md-form pb-3">
                                        <label data-error="wrong" data-success="right" for="email">Novo Email</label>
                                        <input type="email" id="emailPerfil" class="form-control validate white-text" name="email1">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="buttonEmail" type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content card card-image bg-dark " >
                            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                                <div class="modal-header text-center pb-4">
                                    <h3 class="modal-title w-100 white-text font-weight-bold mb-2" id="register1"><strong>Register</strong> <a
                                            class="font-weight-bold"><strong></strong></a></h3>
                                    <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="index.php">
                                        <div class="md-form pb-3">
                                            <input type="text" id="username2" class="form-control validate white-text" name="username2">
                                            <label data-error="wrong" data-success="right" for="username2">Username</label>
                                        </div>
                                        <div class="md-form pb-3">
                                            <input type="email" id="email" class="form-control validate white-text" name="email">
                                            <label data-error="wrong" data-success="right" for="email">Email</label>
                                        </div>
                                        <div class="md-form pb-3">
                                            <input type="password" id="pass2" class="form-control validate white-text" name="password2">
                                            <label data-error="wrong" data-success="right" for="pass2">Password</label>
                                        </div>
                                        <div class="md-form pb-3">
                                            <input type="password" id="pass3" class="form-control validate white-text" name="passwordconfirmation">
                                            <label data-error="wrong" data-success="right" for="pass3">Re-type Password</label>
                                        </div>
                                        <div class="row d-flex align-items-center mb-4">
                                            <div class="text-center mb-3 col-md-12">
                                                <button id="submitregister" type="submit" name="register" class="btn btn-info btn-block btn-rounded z-depth-1 w-50 mx-auto ">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <footer>
                    <div class="footer-content">
                        <h3>PirateHood</h3>
                        <p>Quer saber mais sobre nós? Visite as nossas redes sociais! </p>
                        <ul class="socials">
                            <li><a href="https://www.facebook.com/gboss.mamen" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/Mota2000Mota"target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/miguelmikesilva/"target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/jo%C3%A3o-cristo-b576791a3/"target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-bottom">
                        <p>copyright &copy;2020 PirateHood. designed by João Cristo, Filipe Mota, Paulo Miguel Silva & Guilherme Silva</p>
                    </div>
                    </footer>



        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="Javascript/main.js"></script>




    </body>

</html>


