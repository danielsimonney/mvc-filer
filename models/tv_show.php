

<!-- je met ici le modèle -->
<?php
$pathbeginning="../../karaoke";

// fonction qui me retourne tt les dossiers dans un tableau elle va prendre en entrée une path qui dépendra de l'endroit ou l'on se situe

function putInArrayFolder($mypath){
    $foldertab=[];
  $files = scandir($mypath); 
  foreach($files as $file)
  {
      
      if(is_dir($mypath. "/" . $file)){
        if($file != "." && $file != ".." ){
  array_push($foldertab,$file);
        }
      }
  }
  return($foldertab);
  }
  // pareil que putInArrayFolder mais avec les fichiers au lieu des dossiers

  function putInArrayFiles($mypath){
    $filetab=[];
    $files = scandir($mypath); 
    foreach($files as $file)
    {
        
        if(is_file($mypath. "/" . $file)){
    array_push($filetab,$file);
    
        }
    }
    return($filetab);
    }


function suppressfiles($path){

}

function suppressfolders($path){

}




