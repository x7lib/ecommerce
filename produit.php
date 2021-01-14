<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMOIL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.slim.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php require_once "req/navbar.php"; ?>

    <body>
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <nav class="col navbar navbar-expand-lg navbar-dark">
                    </nav>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="card mb-3">
                <div class="row ">
                    <!--premiere section-->
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card mx-3 my-3 ">
                                    <img src="img/products/pc.jpg" alt="" class="card-img">
                                </div>
                            </div>
                        </div>
                        <!--d'autres photos-->
                        <div class="row mx-3">
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/products/pc.jpg" alt="" class="card-img"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/products/pc.jpg" alt="" class="card-img"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/products/pc.jpg" alt="" class="card-img"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/products/pc.jpg" alt="" class="card-img"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                            </div>

                        </div>

                    </div>

                    <!--deuxieme section-->
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h3 class="card-title">PC Portable - ACER Aspire 3 </h3>
                                </div>
                                <div class="col-3 ">
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16" color="red">
                                            <path d="M8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                        </svg></a>
                                </div>

                            </div>
                            <img src="./img/stars.jpg" alt="rating" class="  ">
                            <h4 class="mx-3" style="color: red;">5599,99 MAD</h4>
                            <h5 class="card-text mt-5 mx-3 "><small class="text-muted">Options</small></h5>
                            <ul class="card-text "><small class="text-muted">
                                    <li>Processeur : Intel Pentium Silver N5000 / 1.1 GHz</li>
                                    <li>RAM : 8 Go (1 x 4 Go + 4 Go (soudé))</li>
                                    <li>Résolution : 1920 x 1080 (Full HD)</li>
                                    <li>Fonctions : Anti-éblouissement, ComfyView, taux de réponse de 8 ms, écran à bord étroit</li>
                                    <li>Stockage principal : 128 Go SSD - Kingston</li>
                                </small></ul>
                            <h5 class="card-text mx-3 "><small class="text-muted">Quantité</small></h5>
                            <form action="">
                                <div class="form-group">

                                    <select class="form-control w-25 mx-3 my-3" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <button type="button" class="btn btn-warning">Ajouter au panier</button>
                                    <button type="button" class="btn btn-danger">Acheter maintenant</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <h4 class="card-title mx-5 mt-3" style="color:rgb(2, 2, 58) ;text-decoration: underline;font-style: italic;">Description</h4>
                        <div class="card mx-3 my-2">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                        <h4 class="card-title mx-5 mt-3" style="color:rgb(2, 2, 58) ;text-decoration: underline;font-style: italic;">Spécifications</h4>
                        <div class="card mx-3 my-2">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                        <h4 class="card-title mx-5 mt-3" style="color:rgb(2, 2, 58) ;text-decoration: underline;font-style: italic;">Commentaires</h4>
                        <div class="card mx-3 my-2">
                            <div class="card-body">
                                <h6 class="card-title ">User x</h6>
                                This is some text within a card body.
                            </div>
                        </div>

                        <div class="card mx-3 my-2">
                            <div class="card-body">
                                <h6 class="card-title ">User x</h6>
                                This is some text within a card body.
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <h6 style="color:rgb(2, 2, 58) ;font-style:italic;">Ajouter votre Commentaire</h6>
                            <form action="">
                                <div class="form-group mt-3">
                                    <label for="timeInput">Votre identifiant :</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="note">Votre Commentaire :</label>
                                    <textarea id="note" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Rendre cette notation publique
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h2 class="my-5" style="color: rgb(2, 2, 58);text-decoration: underline;font-style: italic;">De la meme catégorie</h2>
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card ">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card ">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <!--a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                  </a-->
            </div>

            <h2 class="my-5" style="color: rgb(2, 2, 58);text-decoration: underline;font-style: italic;">Vous pouvez admirer aussi</h2>
            <div id="carouselControls2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <!--div class="card-img-overlay " ><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-suit-heart d-inline-flex align-self-r" viewBox="0 0 16 16" color="red" >
                                    <path d="M8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                                  </svg></a></div-->
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card ">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="carouselControls" class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card ">
                                    <img src="img/products/pc.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                            <span class="card-title h4">pc</span>
                                        </a>
                                        <img src="./img/stars.jpg" alt="product" class="w-25">
                                        <p style="color:gray">description</p>
                                        <a href="#" class="btn btn-danger">Acheter</a>
                                        <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>


                </div>
            </div>
        </div>

        </div>

    </body>

</html>