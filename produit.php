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


    <style>
     

        .options_label {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }

        .options_label:hover,
        .options_label:focus,
        .options_label:active,
        .options_label.active {
            background-color: #d32535;
            border-color: #bd2130;
            color: white;

        }
    </style>

</head>

<body>
    <?php require_once "req/navbar.php"; ?>



    <div class="container">
        <div class=" jumbotron ">
            <div class="">
                <div class="row " id="product_section">
                    <!--premiere section-->

                </div>
            </div>



            <div>
                <div>
                    <div>
                        <div class="card">
                            <nav class="nav nav-tabs">
                                <a class="nav-item nav-link active" href="#p1" data-toggle="tab">Description</a>
                                <a class="nav-item nav-link" href="#p2" data-toggle="tab">Commentaires</a>
                            </nav>
                            <div class="tab-content" id="tab-content">


                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div>
                <h2 class="my-5" style="color: rgb(2, 2, 58);text-decoration: underline;font-style: italic;">De la meme catégorie
                </h2>
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner w-100" id="same_categorie">
                    </div>

                </div>

                <h2 class="my-5" style="color: rgb(2, 2, 58);text-decoration: underline;font-style: italic;">Vous pouvez admirer
                    aussi</h2>
                <div id="carouselControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner w-100" id="new_items">



                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="formulaire">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Votre Commentaire:</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="col" action="test.php">
                        <div class="form-group">
                            <label for="nom" class="form-control-label">Nom d'utilisateur</label>
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="Commentaire" class="form-control-label">Commentaire</label>
                            <textarea id="note" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Envoyer</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="container-fluid">
        <?php
        require_once "req/footbar.php";

        ?>
    </div>

    <script>
        var product = {};
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        if (!urlParams.has("id_produit"))
            window.location.replace("..");
        else {
            fetch("./php/products/read_product?id_produit=" + urlParams.get("id_produit")).then(resp => resp.json()).then(json => {
                const data = json.data;
                product = data.product;
                options = data.options;
                $("#product_section").html(`
                <div class="col-12 col-md-6 mt-5">
                        <div class="row">
                            <div class="col">

                                <img src="img/products/${product.id_produit}.jpg" alt="" class="card-img" style="max-height: 400px;">

                            </div>
                        </div>
                        <!--d'autres photos (ajouter un carroussel apres)
                        <div class="row mx-3 my-2">
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/pc2.jpeg" alt="" class="card-img"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/pc2.jpeg" alt="" class="card-img"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/pc2.jpeg" alt="" class="card-img"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/pc2.jpeg" alt="" class="card-img"></a>
                                </div>
                            </div>
                        </div>-->
                    </div>

                    <!--deuxieme section-->
                    <div class="col-12 col-md-6 mt-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-9">
                                <h5 class="card-title text-secondary">${product.nom_marque}</h5>
                                <h3 class="card-title">${product.label}</h3>
                                </div>
                                <div class="col-3 ">
                                    <a href=""><i class="bi bi-suit-heart " style="font-size: 22px; color:red;"></i></a>
                                </div>

                            </div>
                            <div>
                                <ul class="list-inline pull-right">
                                    <li>
                                        <i class="bi bi-star-fill" style="color: yellow;"></i>
                                        <i class="bi bi-star-fill" style="color: yellow;"></i>
                                        <i class="bi bi-star-fill" style="color: yellow;"></i>
                                        <i class="bi bi-star-half" style="color: yellow;"></i>
                                        <i class="bi bi-star" style="color: yellow;"></i>

                                    </li>
                                </ul>
                            </div>
                            <h4 style="color: red;">${product.prix_produit.toFixed(2)} DH</h4>
                            ${options.map((element,index)=> `
                                <h5 class="mt-5 mx-3 "><small>${element.type_options}:</small></h5>
                            <div class="btn-group btn-group-toggle d-flex justify-content-around" data-toggle="buttons">
                                ${element.options.split(";").map((option,index)=> `
                                    <label class="btn  btn-warning options_label ${index==0?'active':''}">
                                    <input type="radio" name="options${index}"  autocomplete="off" ${index==0?'checked':''}> ${option}
                                    </label> 
                                    `)}
                            </div>
                                `) }
                            <form action="">
                                <div class="form-group">

                                    <span>
                                        <h5 class="card-text mt-3 mx-3 "><small class="text-muted">Quantité:</small></h5>
                                    </span><input type="number" value="0" class=" input my-3 mx-3" style="border-radius: 15px;height: 30px;width: 130px; color:darkblue;">
                                </div>
                                <div class="form-group mt-5  ">
                                    <button type="button" class="btn btn-warning" style="border-radius: 20px;">Ajouter au panier</button>
                                    <button type="button" class="btn btn-danger" style="border-radius: 20px;">Acheter maintenant</button>

                                </div>
                            </form>

                        </div>
                    </div>
                `);
                //FIX COMMENTS
                $("#tab-content").html(`
                                <div class="tab-pane active  p-3 " id="p1">${product.description_produit}</div>
                                <div class="tab-pane " id="p2">
                                    <div class="card  mx-3 my-3 ">
                                        <div class="card-body">
                                            <h6 class="card-title ">User x</h6>
                                            This is some text within a card body.
                                        </div>
                                    </div>

                                    <div class="card  mx-3 my-3 ">
                                        <div class="card-body">
                                            <h6 class="card-title ">User x</h6>
                                            This is some text within a card body.
                                        </div>
                                    </div>
                `);
            })

        }

        fetch("./php/products/get_most_products").then(resp => resp.json()).then(json => {
            const data = json.data;
            for (let index = 0; index < data.length / 2; index++) {
                const element = data[index];
                $("#same_categorie").append(`
                <div class="carousel-item ${index==0?'active':''}">
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <img src="./img/products/${data[index].id_produit}.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                    <span class="card-title h4">${data[index].label}</span>
                                </a>

                                <p style="color:gray">description</p>
                                <a href="#" class="btn btn-danger">Acheter</a>
                                <span class="h6" style="margin-left:20px;">${data[index].prix_produit.toFixed(2)} DH</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <img src="./img/products/${data[index+1].id_produit}.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                    <span class="card-title h4">${data[index+1].label}</span>
                                </a>

                                <p style="color:gray">description</p>
                                <a href="#" class="btn btn-danger">Acheter</a>
                                <span class="h6" style="margin-left:20px;">${data[index+1].prix_produit.toFixed(2)} DH</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <img src="./img/products/${data[index+2].id_produit}.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                    <span class="card-title h4">${data[index+2].label}</span>
                                </a>

                                <p style="color:gray">description</p>
                                <a href="#" class="btn btn-danger">Acheter</a>
                                <span class="h6" style="margin-left:20px;">${data[index+2].prix_produit.toFixed(2)} DH</span>
                            </div>
                        </div>
                    </div>
                </div>                   
            `);
            }
        });
        fetch("./php/products/get_newest_products").then(resp => resp.json()).then(json => {
            const data = json.data;
            for (let index = 0; index < data.length / 2; index++) {
                const element = data[index];
                $("#new_items").append(`
                <div class="carousel-item ${index==0?'active':''}">
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <img src="./img/products/${data[index].id_produit}.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                    <span class="card-title h4">${data[index].label}</span>
                                </a>

                                <p style="color:gray">description</p>
                                <a href="#" class="btn btn-danger">Acheter</a>
                                <span class="h6" style="margin-left:20px;">${data[index].prix_produit.toFixed(2)} DH</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <img src="./img/products/${data[index+1].id_produit}.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                    <span class="card-title h4">${data[index+1].label}</span>
                                </a>

                                <p style="color:gray">description</p>
                                <a href="#" class="btn btn-danger">Acheter</a>
                                <span class="h6" style="margin-left:20px;">${data[index+1].prix_produit.toFixed(2)} DH</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <img src="./img/products/${data[index+2].id_produit}.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                    <span class="card-title h4">${data[index+2].label}</span>
                                </a>

                                <p style="color:gray">description</p>
                                <a href="#" class="btn btn-danger">Acheter</a>
                                <span class="h6" style="margin-left:20px;">${data[index+2].prix_produit.toFixed(2)} DH</span>
                            </div>
                        </div>
                    </div>
                </div>                   
            `);

            }

        });

        $(function() {
            $('form').submit(function(e) {
                e.preventDefault()
                var $form = $(this)
                $.post($form.attr('action'), $form.serialize())
                    .done(function(data) {
                        $('#html').html(data)
                        $('#formulaire').modal('hide')
                    })
                    .fail(function() {
                        alert('ça ne marche pas...')
                    })
            })
            $('.modal').on('shown.bs.modal', function() {
                $('input:first').focus()
            })
        })
    </script>


</body>

</html>