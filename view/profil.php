<?php
    include "../model/utilisateur.php";
    include "../model/profil.php";
    session_start();
    $utilisateur = $_SESSION['utilisateur'];
    $profil = $_SESSION['profil'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="wallet-icon" sizes="76x76" href="../assets/img/wallet.png">
    <link rel="icon" type="image/png" href="../assets/img/wallet.png">
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=M+PLUS+Rounded+1c:wght@500&display=swap"
        rel="stylesheet">


    <title>Ressources</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link rel="stylesheet" href="../css/ressources.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


</head>

<body class="bodystyle">
    <aside class="sidenav">
        <div class="sidenav-header">
            <i class="" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand" href="/Users/mgilyass/Desktop/soft-ui-dashboard-main/pages/acceuil.html"
                style="text-decoration: none;" target="_blank">
                <img  src="../assets/img/wallet.png" class="logo-brand" alt="main_logo">
                <span class="brand" style="font-size: 1.2rem;">Geeks Budget</span>
            </a>
        </div>

        <div class="sidenav-middle">
            <ul class="sidenav-list">
                <hr class="sep-ligne">
                <li class="nav-item">
                    <a class="nav-link" href="tableau-de-board.php" style="text-decoration: none;">
                        <div class="item">
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
                        <div class="item-profil">
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
                <p class="heading-page">Pages / Profil</p>
                <p class="heading-text">Profil</p>
            </div>
            <div class="input">
                
                <div>
                    <a class="deconnexion" href="../index.html" style="text-decoration: none;">Déconnexion</a>
                </div>

            </div>

        </nav>
        <div class="content">
        <table>
                <tr class="Champ_input" >
                    <td>
                        <lable class="Champ">Nom : </lable> <br/>
                        <input class="_input" type="text" name="Nom" value = <?php echo $utilisateur->getNom();?>/>
                   </td>
                    
                </tr>
                <tr class="Champ_input">
                    <td>
                    <lable class="Champ">Prenom : </lable> <br/>
                        <input class="_input" type="text" name="Prenom" value = <?php echo $utilisateur->getPrenom();?> />
                    </td>             
                </tr>
                <tr class="Champ_input">
                    <td>
                    <lable class="Champ">Telephone : </lable> <br/>
                        <input class="_input" type="tel" name="Telephone" value = "<?php echo $profil->getTelephone();?>"/>
                    </td>
                    
                </tr>
                <tr class="Champ_input">
                    <td>
                    <lable class="Champ">Pays : </lable> <br/>
                        <input class="_input" type="text" name="pays" placeholder="Maroc" value= <?php echo $profil->getPays();?> />
                        
                    </td>
                    
                </tr>
                <tr class="Champ_input">
                    <td>
                    <lable class="Champ">Adresse : </lable> <br/>
                        <input class="_input" type="text" name="adresse" value = <?php echo $profil->getAdresse();?>  />
                    </td>
                    
                </tr>
                <tr class="Champ_input" >
                    <td>
                    <lable class="Champ">Sexe :</lable> <br/>
                        <input class="_input" type="text" name="age" value = <?php echo $profil->getSexe();?> />
                     </td>
                     
                </tr>

                <tr class="Champ_input">
                <td>
                    <lable class="Champ">Age :</lable> <br/>
                        <input class="_input" type="text" name="age" value = <?php echo $profil->getAge();?> />
                     </td>
                     
                </tr>
                         
                                  
            </table>
            <div>
            <a href="update-profil.html" class="deconnexion" style ="text-decoration : none ; ">modifier</a> 
            </div>   
            
            
</div>
           
        </div>
        
    </main>
</body>
</html>