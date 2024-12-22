<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navigation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #d3d3d3; 
            color: black; 
            padding: 5px;
            margin : 10px;
            border-radius: 8px;
        }
        nav a {
            color: black; 
            padding: 10px 15px; 
            text-decoration: none;
            text-align: center;
            display: inline-block;
        }
        nav a:hover {
            background-color: #a9a9a9; 
        }
    </style>
</head>
<body>

    <nav>
        <a href="index.php?controller=categorie">Catégories</a>
        <a href="index.php?controller=produit">Produits</a>
        <a href="index.php?controller=utilisateur">Utilisateurs</a>
    </nav>

    <div class = "container">
        <?php

        

        
        $controller = $_GET["controller"];

        if($controller == 'produit'){
            require_once './controller/produitController.php';
        }
        if($controller == 'categorie'){
            require_once './controller/categorieController.php';
        }
        if($controller == 'utilisateur'){
            require_once './controller/utilisateurController.php';
        }

        if(isset($_GET['action']) && !empty($_GET['action'])){
            if($_GET['action']=='add'){
                pageAdd();
            }
            
            if($_GET['action']=='delete'){
                remove();
            }
            if($_GET['action']=='save'){
                save();
            }
            if($_GET['action']=='edit' && $controller =='categorie'){
                getCategorie();
            }
            if($_GET['action']=='edit' && $controller =='produit'){
                getProduit();
            }
            if($_GET['action']=='edit' && $controller =='utilisateur'){
                getUtilisateur();
            }
            if($_GET['action']=='update'){
                update();
            }
        }else{
            index();
        }



        ?>

    </div>

</body>

</html>

