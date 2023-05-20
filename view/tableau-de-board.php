<?php
    include "../dao/dao_depense.php";
    include "../dao/dao_ressource.php";
    include "../model/utilisateur.php";
    session_start();
    $utilisateur = $_SESSION['utilisateur'];
    $daoD = new DaoDepense();
    $daoR = new DaoRessource();

    $sommeRessource = $daoR->sommeRessources($utilisateur->getLogin(),'Mensuel');
    $sommeDepense = $daoD->sommeDepenses($utilisateur->getLogin(),'Mensuel');
    // les depenses 
    $tab_depenses = array("Loyer","Energie","Assurance habitation","Taxe habitation","Taxe foncière");
    $tab_montant_depense = array(0,0,0,0,0);
    for($i=0;$i<5;$i++){
        $tab_montant_depense[$i] =  $daoD->findDepense($utilisateur->getLogin(),$tab_depenses[$i])->getMontant();
    }  
    // les ressources 
    $tab_ressources = array("Salaires","Retraites","Indemnités","Allocations diverses","Prestations familiales","Pensions alimentaires reçus","Aide au logement","Revenus fonciers");
    $tab_montant_ressource = array(0,0,0,0,0,0,0,0);
    for($i=0;$i<5;$i++){
        $tab_montant_ressource[$i] =  $daoR->findRessource($utilisateur->getLogin(),$tab_ressources[$i])->getMontant();
    }   
    $sommeRessourceAnnuel = $daoR->sommeRessources($utilisateur->getLogin(),'Annuel');
    $sommeDepenseAnnuel = $daoD->sommeDepenses($utilisateur->getLogin(),'Annuel');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/wallet.png">
    <title>Tableau de board</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dashBoard.css">
    <link rel="stylesheet" href="../css/ressources.css">
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>

<body class="bodystyle">
    <aside class="sidenav">
        <div class="sidenav-header">
            <i class="" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand" href="/Users/mgilyass/Desktop/soft-ui-dashboard-main/pages/acceuil.html" style="text-decoration: none;" target="_blank">
                <img src="../assets/img/wallet.png" class="logo-brand" alt="main_logo">
                <span class="brand">Geeks Budget</span>
            </a>
        </div>

        <div class="sidenav-middle">
            <ul class="sidenav-list">
                <hr class="sep-ligne">
                <li class="nav-item">
                    <a class="nav-link" href="tableau-de-board.php" style="text-decoration: none;">
                        <div class="item-ressource">
                            <img class="logo" src="../assets/img/Dashboard.png" alt="">
                            <span class="item-text">Tableau de board</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ressources.php" style="text-decoration: none;">
                        <div class="item">
                            <img class="logo" src="../assets/img/Ressources.png" alt="">
                            <span class="item-text">Ressources</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="depenses.php" style="text-decoration: none;">
                        <div class="item">
                            <img class="logo" src="../assets/img/Depenses.png" alt="">
                            <span class="item-text">Dépenses</span>
                        </div>
                    </a>
                </li>
                <h6 class="sep-text">Comptes</h6>
                <li class="nav-item">
                    <a class="nav-link" href="Profil.php" style="text-decoration: none;">
                        <div class="item">
                            <img class="logo" src="../assets/img/Profil.png" alt="">
                            <span class="item-text">Profil</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign-in.html" style="text-decoration: none;">
                        <div class="item">
                            <img class="logo" src="../assets/img/signin.png" alt="">
                            <span class="item-text">S'authentifier</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign-up.html" style="text-decoration: none;">
                        <div class="item">
                            <img class="logo" src="../assets/img/signup.png" alt="">
                            <span class="item-text">S'inscrire</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content">
        <nav class="navbar">
            <div class="navbar-header">
                <p class="heading-page">Pages / Tableau de board</p>
                <p class="heading-text">Tableau de board</p>
            </div>
            <div class="input">
                <div>
                    <input type="text" class="input-text-db" placeholder="Saisir un texte ici" onfocus="focused(this)">
                </div>
                <div>
                    <a class="deconnexion" href="../index.html" style="text-decoration: none;">Déconnexion</a>
                </div>

            </div>

        </nav>
        <div class="content-heading" style = "text-align : center ;">
            <div class="content-header">
                <div class="content-list" >
                    <p class="content-text-db">Ressources mensuelles</p>                  
                        <?php
                            echo $sommeRessource ; 
                        ?>                 
                </div>
            </div>
            <div class="content-header">
                <div class="content-list">
                    <p class="content-text-db">Dépences mensuelles</p>
                    <?php
                        echo $sommeDepense ; 
                    ?>
                </div>
            </div>
            <div class="content-header">
                <div class="content-list">
                    <p class="content-text-db">Résultat mensuel</p>
                    <?php
                        echo $sommeRessource - $sommeDepense;
                    ?>
                </div>
            </div>
            <div class="content-header">
                <div class="content-list">
                    <p class="content-text-db">Resultat Annuel</p>
                    <?php
                        echo $sommeRessourceAnnuel - $sommeDepenseAnnuel;
                    ?>
                </div>
            </div>
        </div>
        
        <div style = "display: flex;
    justify-content: center;
    flex-direction: column;">
        <?php // content="text/plain; charset=utf-8"
            require_once ('jpgraph/src/jpgraph.php');
            require_once ('jpgraph/src/jpgraph_pie.php');
            // Some data
            $data = $tab_montant_depense;
            // Create the Pie Graph. 
            $graph = new PieGraph(800,300);

            $theme_class="DefaultTheme";
            //$graph->SetTheme(new $theme_class());

            // Set A title for the plot
            $graph->title->Set("Les dépenses : ");
            $graph->SetBox(true);
            // Create
            $p1 = new PiePlot($data);
            $graph->Add($p1);
            $p1->setLegends($tab_depenses);
            $p1->ShowBorder();
            $p1->SetColor('black');
            $p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
            if(file_exists(dirname(__FILE__).'\outt.jpg')) {
	            unlink(dirname(__FILE__).'\outt.jpg');
	        }
            $graph->Stroke(dirname(__FILE__).'\outt.jpg');
            ?>
        <img src="./outt.jpg" style = "border-radius : 10px; margin-top : 10px;"/>
   
        <?php // content="text/plain; charset=utf-8"
            require_once ('jpgraph/src/jpgraph.php');
            require_once ('jpgraph/src/jpgraph_pie.php');
            // Some data
            $data = $tab_montant_ressource;
            // Create the Pie Graph. 
            $graph = new PieGraph(800,300);

            $theme_class="DefaultTheme";
            //$graph->SetTheme(new $theme_class());

            // Set A title for the plot
            $graph->title->Set("Les ressources : ");
            $graph->SetBox(true);
            // Create
            $p1 = new PiePlot($data);
            $graph->Add($p1);
            $p1->setLegends($tab_ressources);
            $p1->ShowBorder();
            $p1->SetColor('black');
            $p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
            if(file_exists(dirname(__FILE__).'\outt2.jpg')) {
	            unlink(dirname(__FILE__).'\outt2.jpg');
	        }
            $graph->Stroke(dirname(__FILE__).'\outt2.jpg');

            ?>
        <img src="./outt2.jpg" style = "border-radius : 10px; margin-top : 10px;"/>
        </div>

        <footer>
            <div class="footer-text">
                <p> © 2022, made with by <a href="../pages/acceuil.html" style="text-decoration: none;">Geeks Budget
                    </a>team.</p>
            </div>
        </footer>

    </main>

</body>

</html>