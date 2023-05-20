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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    

    <title>Dépenses</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link rel="stylesheet" href="../css/ressources_depenses.css">
</head>

<body class="bodystyle">
    <!-- alert de enregistrement -->
    <form action="../controller/controller_depense.php?action=update" method="post">
        <!-- la page d'ajout de  sources  -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter une dépenses </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!--  notre input -->
            <div class="modal-body">
              <!-- <strong>Catégorie Salaires <br/> </strong> -->
            
              <label for="montant" style="margin-top: 10px;">Entrer le montant SVP : </label>
              <input type="text" id="montant">
              <h6 style="margin-top: 10px;">Périodicité</h6>
              <div style="margin-top: 10px;width: 80%;display: flex;justify-content: space-around;align-items: center;">
                <label for="Mensuel">Mensuel</label>
                <input type="radio" name="periodicite" value="Mensuel" id="Mensuel">
                <label for="Trimestriel">Trimestriel</label>
                <input type="radio" name="periodicite" value="Trimestriel" id="Trimestriel">
                <label for="Annuel">Annuel</label>
                <input type="radio" name="periodicite" value="Annuel" id="Annuel">
                <label for="Annuel">Ponctuel</label>
                <input type="radio" name="periodicite" value="Ponctuel" id="Ponctuel">
              </div>
          
            </div>
            <!--button save and close -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="Fermer">Fermer</button>
              <button type="button" class="btn btn-primary"  data-dismiss="modal" id="Sauvegarder">Sauvegarder</button>
            </div>
    
          </div>
        </div>
      </div>
      </form>
    <!-- Fin  -->
    <aside class="sidenav">
        <div class="sidenav-header">
            <i class="" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand" href="/Users/mgilyass/Desktop/soft-ui-dashboard-main/pages/acceuil.html"
                style="text-decoration: none;" target="_blank">
                <img src="../assets/img/wallet.png" class="logo-brand" alt="main_logo">
                <span class="brand">Geeks Budget</span>
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
                        <div class="item-ressource">
                            <img class="logo" src="../assets/img/Depenses.png" alt="depenses">
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
                <p class="heading-page">Pages / Dépenses</p>
                <p class="heading-text">Dépenses</p>
            </div>
            <div class="input">
                <div>
                    <input type="text" class="input-text" placeholder="Saisir un texte ici" onfocus="focused(this)">
                </div>
                <div>
                    <a class="deconnexion" href="../index.html" style="text-decoration: none;">Déconnexion</a>
                </div>
            </div>
        </nav>
        <div class="content">
            <div>
                <p class="content-text">Dépenses</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th class="ressources"><h6 class="sep-text">Catégorie de la dépense</h6></th>
                        <th class="montant"><h6 class="sep-text">Montant</h6></th>
                        <th class="periodicite"><h6 class="sep-text">Périodicité</h6></th>
                        <th class="edit"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/Loyer.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Loyer</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_loyer">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_loyer">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="loyer">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/horloge.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Energie (éléctricité,gaz,eau)</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_energie">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_energie">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit" data-toggle="modal" data-target="#exampleModal" id = "energie">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/resident.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Assurance habitation</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant"  id="montant_assurance_habitaion">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_assurance_habitaion">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit" data-toggle="modal" data-target="#exampleModal" id="assurance_habitaion">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/habitation.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Taxe habitation </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id = "montant_taxe_habitation" >0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id = "periodicite_taxe_habitation">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="taxe_habitation">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/parallel.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Taxe foncière</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_taxe_fonciere">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_taxe_fonciere">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit" data-toggle="modal" data-target="#exampleModal" id="taxe_fonciere">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <footer>
                <div class="footer-text">
                    <p> © 2022, made with by <a href="../pages/acceuil.html" style="text-decoration: none;">Geeks Budget </a>team.</p>
                </div>
            </footer>
        </div>
        
    </main>

    <script>

window.onload = loadDepenses();
function loadDepenses(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status ==200){
            var resultat = xhr.responseText;
            var tab = resultat.split(':');
       
            document.getElementById("periodicite_loyer").innerHTML=tab[0];
            document.getElementById("montant_loyer").innerHTML=tab[1];

            document.getElementById("periodicite_energie").innerHTML=tab[2];
            document.getElementById("montant_energie").innerHTML=tab[3];

            document.getElementById("periodicite_assurance_habitaion").innerHTML=tab[4];
            document.getElementById("montant_assurance_habitaion").innerHTML=tab[5];

            document.getElementById("periodicite_taxe_habitation").innerHTML=tab[6];
            document.getElementById("montant_taxe_habitation").innerHTML=tab[7];

            document.getElementById("periodicite_taxe_fonciere").innerHTML=tab[8];
            document.getElementById("montant_taxe_fonciere").innerHTML=tab[9];

        }else{
            console.log(xhr.responseText);
        }
    }
    xhr.open('GET',"../controller/controller_depense.php?action=afficher",true);
    xhr.send();
}
setInterval(loadDepenses,1000);

function setMontant(){// sert a reccupurer la valeur du montant saisi
    return document.getElementById("montant").value;
}

function setPeriodicite(){ //sert a lire la periodicité choisi
    var radios = document.getElementsByName('periodicite');
    var periodicite;
    for(var i = 0; i < radios.length; i++){
     if(radios[i].checked){
         periodicite = radios[i].value;
        }
    }
   return periodicite;
}

 

function sendDepense(categorie){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status ==200){
                var montant = document.getElementById("montant");
                //console.log("============" + montant.value);
                montant.value="";  
            }else{
                console.log(xhr.responseText);
            }
        };
        xhr.open('POST',"../controller/controller_depense.php?action=save",true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("message="+categorie+":"+setPeriodicite()+":"+montant.value);
        loadRessources();
    } 
let clik;// pour stocker l'ID du boutton cliqué
document.getElementById("loyer").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });
document.getElementById("energie").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
});
document.getElementById("assurance_habitaion").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });
document.getElementById("taxe_habitation").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });
document.getElementById("taxe_fonciere").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });




document.getElementById("Sauvegarder").addEventListener('click',function(){
                 switch(clik){
                    case 'loyer':
                        sendDepense("Loyer");
                        break;
                    case 'energie':
                        sendDepense("Energie");
                        break;
                    case 'assurance_habitaion':
                        sendDepense("Assurance habitation"); 
                        break;
                    case 'taxe_habitation':
                        sendDepense("Taxe habitation");  
                        break;
                    case 'taxe_fonciere' :
                        sendDepense("Taxe foncière"); 
                        break;
                    
                        
        
        }
 })
 

   
</script>

</body>