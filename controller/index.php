
<!--  ici le controller -->

<?php



require("../models/tv_show.php");












// me permet de revenir a la racine de mon storage
    if(isset($_GET['retouraudebut'])){
    
    }

    // me permet de définir ma path et mes deux tableaux de fichiers et de dossiers si l'on est pas a l'initialisation
    if (isset($_GET['myentirepath'])){
     
     
    $path=($_GET['myentirepath']);
    $myfiletab=(putInArrayFiles($path));
      $myfoldertab=(putInArrayFolder($path));
    
    
    }
    // me permet d'afficher tt les fichiers et dossier à l'initialisation
    else{
      
      $path=$pathbeginning;
      $myfiletab=(putInArrayFiles($pathbeginning));
      $myfoldertab=(putInArrayFolder($pathbeginning));
    }
    
    // Permet de retourner dans le dossier parent grâce au paramètre "retour" placé dans l'URL .
    if(isset($_POST['retour'])){
    
      $path=($_GET['myentirepath']);  
      $myfiletab=(putInArrayFiles($path));
        $myfoldertab=(putInArrayFolder($path)); 
        
    }



    // traitement pour la partie droite:Les $_POST me permettent généralement de tester si les champs ont été rempli et les $_GET me 
    // permettent de déterminer ou faire ces actions
    
// Crée un dossier à l'endroit ou l'on est 
    if (isset($_POST['foldername']))
{

    mkdir(($path."/".$_POST['foldername']), 0700);
    header("Refresh:0");
}

// crée un fichier à l'endroit ou l'on est 
if (isset($_POST['filename'])&& isset($_POST['filecontain']))
  {
    if(isset($_GET['myentirepath'])){
      $myfile = fopen(($_GET['myentirepath'])."/".$_POST['filename'].".txt", "a") or die("Unable to open file!");

    }else{
            $myfile = fopen('../../karaoke/'. $_POST['filename'].".txt", "a") or die("Unable to open file!");

    }

      $txt = ($_POST['filecontain']);
      fwrite($myfile, $txt);
      $txt = ($_POST['filecontain']);
      fwrite($myfile, $txt);
      fclose($myfile);
      header("Refresh:0");

  }
// Supprime un fichier lorsqu'on clique sur le bouton avec la poubelle
if(isset($_POST['filetosuppress'])){
  if(isset($_GET['myentirepath'])){


      unlink(($_GET['myentirepath'])."/".$_POST['filetosuppress']);
      header("Refresh:0");



  }else{
    
          unlink($pathbeginning."/".($_POST['filetosuppress']));
          header("Refresh:0");

    
  }
  
}
// 
require('../views/index_home.php');