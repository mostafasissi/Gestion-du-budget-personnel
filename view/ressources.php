

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



    <title>Ressources</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link rel="stylesheet" href="../css/ressources_depenses.css">
    
</head>

<body class="bodystyle">

<form action="../controller/controller_ressource.php?action=update" method="post">
    <!-- la page d'ajout de  sources  -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter une ressources </h5>
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
    <aside class="sidenav">
        <div class="sidenav-header">
            <i class="" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand" href="/Users/mgilyass/Desktop/soft-ui-dashboard-main/pages/acceuil.html"
                style="text-decoration: none;" target="_blank">
                <img src="../assets/img/wallet.png" class="logo-brand" alt="main_logo">
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
                        <div class="item-ressource">
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
                <p class="heading-page">Pages / Ressources</p>
                <p class="heading-text">Ressources</p>
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
                <p class="content-text">Ressources</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th class="ressources"><h6 class="sep-text">Catégorie de la ressource</h6></th>
                        <th class="montant"><h6 class="sep-text">Montant</h6></th>
                        <th class="periodicite"><h6 class="sep-text">Périodicité</h6></th>
                        <th class="edit"><h6 class="sep-text">action</h6></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/Salaires.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Salaires</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_salaire">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_salaire">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="salaire">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/Retraites.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Retraites</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_retraite">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_retraite">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="retraite">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/Indemnités.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Indemnités</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_indemnite">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_indemnite">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="indemnite">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/Allocations_diverses.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Allocations diverses</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_allocation_diverse">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_allocation_diverse">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="allocation_diverse">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/Prestations_familiales.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Prestations familiales</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_prestation_familiale">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_prestation_familiale">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="prestation_familiale">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/Pensions_alimentaires_recus.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Pensions alimentaires reçus</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_pension_alimentaire">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_pension_alimentaire">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="pension_alimentaire">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/Aide_au_logement.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Aide au logement</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_logement">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_logement">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="logement">Edit</button>
                        </td>
                    </tr>
                    <tr class="sep-ligne-items">
                        <td>
                            <div class="list-items" style="height: 48px; width: 48px;">
                                <div style="height: 48px; width: 48px;">
                                    <img class="icons" src="../assets/img/Revenus_fonciers.png" alt="salaires">
                                </div>
                                <div class="list-items-text">
                                    <p class="list-items-textp">Revenus fonciers</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="list-items-montant" id="montant_revenu_foncier">0</p>
                        </td>
                        <td>
                            <span class="box-periodicite" id="periodicite_revenu_foncier">champ periodicité</span>
                        </td>
                        <td>
                            <button class="list-item-edit"  data-toggle="modal" data-target="#exampleModal" id="revenu_foncier">Edit</button>
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

window.onload = loadRessources();
function loadRessources(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status ==200){
            var resultat = xhr.responseText;
            var tab = resultat.split(':');
       
            document.getElementById("periodicite_salaire").innerHTML=tab[0];
            document.getElementById("montant_salaire").innerHTML=tab[1];

            document.getElementById("periodicite_retraite").innerHTML=tab[2];
            document.getElementById("montant_retraite").innerHTML=tab[3];

            document.getElementById("periodicite_indemnite").innerHTML=tab[4];
            document.getElementById("montant_indemnite").innerHTML=tab[5];

            document.getElementById("periodicite_allocation_diverse").innerHTML=tab[6];
            document.getElementById("montant_allocation_diverse").innerHTML=tab[7];

            document.getElementById("periodicite_prestation_familiale").innerHTML=tab[8];
            document.getElementById("montant_prestation_familiale").innerHTML=tab[9];

            document.getElementById("periodicite_pension_alimentaire").innerHTML=tab[10];
            document.getElementById("montant_pension_alimentaire").innerHTML=tab[11];

            document.getElementById("periodicite_logement").innerHTML=tab[12];
            document.getElementById("montant_logement").innerHTML=tab[13];

            document.getElementById("periodicite_revenu_foncier").innerHTML=tab[14];
            document.getElementById("montant_revenu_foncier").innerHTML=tab[15];        

        }else{
            console.log(xhr.responseText);
        }
    }
    xhr.open('GET',"../controller/controller_ressource.php?action=afficher",true);
    xhr.send();
}
setInterval(loadRessources,1000);

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

 
function SaveRessource(Unmontant,IdMontant,unePeriodicite,IdPeriodicite){
    document.getElementById(IdMontant).innerHTML=Unmontant;
    document.getElementById(IdPeriodicite).innerHTML=unePeriodicite;
}

function sendRessource(categorie){
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
        xhr.open('POST',"../controller/controller_ressource.php?action=save",true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("message="+categorie+":"+setPeriodicite()+":"+montant.value);
        loadRessources();
    } 
let clik;// pour stocker l'ID du boutton cliqué
document.getElementById("salaire").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });
document.getElementById("retraite").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
});
document.getElementById("indemnite").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });
document.getElementById("allocation_diverse").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });
document.getElementById("prestation_familiale").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });
document.getElementById("pension_alimentaire").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });
document.getElementById("logement").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
    });
document.getElementById("revenu_foncier").addEventListener('click' , function(evt){
    clik=this.id;
    //console.log(clik);
});



document.getElementById("Sauvegarder").addEventListener('click',function(){
                 switch(clik){
                    case 'salaire':
                        sendRessource("Salaires");
                        break;
                    case 'retraite':
                        sendRessource("Retraites");
                        break;
                    case 'indemnite':
                        sendRessource("Indemnités"); 
                        break;
                    case 'allocation_diverse':
                        sendRessource("Allocations diverses");  
                        break;
                    case 'prestation_familiale' :
                        sendRessource("Prestations familiales"); 
                        break;
                    case 'pension_alimentaire' :
                        sendRessource("Pensions alimentaires reçus");
                       break;
                    case 'logement' :
                        sendRessource("Aide au logement");
                        break;
                    case 'revenu_foncier' :
                        sendRessource("Revenus fonciers");
                        break;
                        
        
        }
 })
 

   
</script>

</body>