
<!-- Ici c'est la vue -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Filer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>


<section class="section">

<div class="container">
    <h1 class="title">Mon filer</h1>
    <div class="columns">
      <div class="column">
        <table class="table is-fullwidth is-hoverable">
          <?php
         if ((isset($_GET['myentirepath']) &&(($_GET['myentirepath'])!="../../karaoke"))){
          ?>
            <tr>
              <td><i class="fas fa-level-up-alt"></i></td>
              <td><a href="">
              <?php
             
                 echo '<a href="index.php?retouraudebut=' .$pathbeginning. '">'; 
               echo "retour au dossier de base";
              echo '</a>';
              
              ?></a></td>
              <td></td>
            </tr>
            <?php
            }
            
             if ((isset($_GET['myentirepath']) &&(($_GET['myentirepath'])!="../../karaoke"))){
               ?>
            <tr>
              <td><i class="fas fa-level-up-alt"></i></td>
              <td><a href="">
              <?php
                echo "<form method='post'>";
                echo '<a name="retour" href="index.php?myentirepath='.dirname($path).'">'; 
                 

               echo "parent";
              echo '</a>';
              echo "</form>";
              ?></a></td>
              <td></td>
            </tr>



<?php

        }  

foreach($myfoldertab as $myfiles)
{
  ?>



<tr>
              <td><i class="fas fa-folder"></i></td>
              <td><a href=""><?php
                 echo '<a href="index.php?myentirepath=' .$path ."/" . $myfiles .'">';
              echo $myfiles; 
              echo '</a>';
              ?>
              </a></td>
              <td></td>
            </tr>
            

  <?php
}



 
 foreach($myfiletab as $myfiles)
{ 
  ?>
<tr>
              <td><i class="fas fa-file"></i></td>
              <td><a href=""> 
                <?php
               echo $myfiles ;
               ?></a></td>
              <td>
                <form method="post">
                  <button class="button is-light is-small" type="submit" name="filetosuppress" value="<?php  echo $myfiles ?>" ><i class="fas fa-trash-alt" ></i></button>
                </form>
              </td>
            </tr>
            <?php
            }
            ?>
            </table>
        </div>
        <div class="column">
          <form method="post">
            <div class="field">
              <label class="label">Nouveau dossier</label>
              <div class="control">
                <input class="input" type="text" placeholder="Nom du dossier" name="foldername">
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link">Créer</button>
              </div>
            </div>
          </form>
          <hr />
          <form method="post">
            <div class="field">
              <label class="label">Nouveau fichier</label>
              <div class="control">
                <input class="input" type="text" placeholder="Nom du fichier" name="filename">
              </div>
            </div>
            <div class="field">
              <label class="label">Contenu</label>
              <div class="control">
                <textarea class="textarea" placeholder="Textarea" name="filecontain"></textarea>
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link">Enregistrer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>