<?php
$servername = "localhost";
$username = "appli_cms";
$password = "56185/frontend/paper_la";
$database = "appli_cms";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$id = $_POST['id'];

if (strlen($_POST['title']) > 0){
    $sql = "UPDATE title SET html = '".$_POST['title']."' WHERE id =".$id;
if ($conn->query($sql) === TRUE) {
    echo "New title record created successfully";
} else {echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['subtitle']) > 0){
    $sql = "UPDATE subtitle SET html = '".$_POST['subtitle']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New subtitle record created successfully";
} else {echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['hdesc']) > 0){
    $sql = "UPDATE header_description SET html = '".$_POST['hdesc']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New hdesc record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['b1title']) > 0){
    $sql = "UPDATE body1_title SET html = '".$_POST['b1title']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b1title record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['b1content']) > 0){
    $sql = "UPDATE body1_content SET html = '".$_POST['b1content']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b1content record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['b2title']) > 0){
    $sql = "UPDATE body2_title SET html = '".$_POST['b2title']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b2title record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['b2content']) > 0){
    $sql = "UPDATE body2_content SET html = '".$_POST['b2content']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b2content record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['fapropos']) > 0){
    $sql = "UPDATE footer_apropos SET html = '".$_POST['fapropos']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New fapropos record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['fhoraires']) > 0){
    $sql = "UPDATE footer_horaires SET html = '".$_POST['fhoraires']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New fhoraires record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['lienFB']) > 0){
    $sql = "UPDATE lienFB SET html = '".$_POST['lienFB']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New lienFB record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['lienTwitter']) > 0){
    $sql = "UPDATE lienTwitter SET html = '".$_POST['lienTwitter']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New lienTwitter record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['lienInsta']) > 0){
    $sql = "UPDATE lienInsta SET html = '".$_POST['lienInsta']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New lienInsta record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['lienTA']) > 0){
    $sql = "UPDATE lienTA SET html = '".$_POST['lienTA']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New lienTA record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['b2s1t']) > 0){
    $sql = "UPDATE body2_section1_titre SET html = '".$_POST['b2s1t']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b2s1t record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['b2s1c']) > 0){
    $sql = "UPDATE body2_section1_content SET html = '".$_POST['b2s1c']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b2s1c record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['b2s2t']) > 0){
    $sql = "UPDATE body2_section2_titre SET html = '".$_POST['b2s2t']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b2s2t record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['b2s2c']) > 0){
    $sql = "UPDATE body2_section2_content SET html = '".$_POST['b2s2c']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b2s2c record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['b2s3t']) > 0){
    $sql = "UPDATE body2_section3_titre SET html = '".$_POST['b2s3t']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b2s3t record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['b2s3c']) > 0){
    $sql = "UPDATE body2_section3_content SET html = '".$_POST['b2s3c']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New b2s3c record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if(isset($_FILES['imgbackgroundheader']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['imgbackgroundheader']['name']);
     if(move_uploaded_file($_FILES['imgbackgroundheader']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $sql = "UPDATE headerbackgroundimg SET img = '".$_FILES['imgbackgroundheader']['name']."' WHERE id = ".$id;
          if ($conn->query($sql) === TRUE) {
                  echo "New imgbackgroundheader record created successfully";
          } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;}

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload imgbackgroundheader!';
     }
}

if(isset($_FILES['logo']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['logo']['name']);
     if(move_uploaded_file($_FILES['logo']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $sql = "UPDATE logo SET img = '".$_FILES['logo']['name']."' WHERE id = ".$id;
          if ($conn->query($sql) === TRUE) {
                  echo "New logo record created successfully";
          } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;}

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload logo!';
     }
}


if(isset($_FILES['b1img']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['b1img']['name']);
     if(move_uploaded_file($_FILES['b1img']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $sql = "UPDATE body1_img SET img = '".$_FILES['b1img']['name']."' WHERE id = ".$id;
          if ($conn->query($sql) === TRUE) {
                  echo "New b1img record created successfully";
          } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;}

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload b1img!';
     }
}

if(isset($_FILES['t2i']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['t2i']['name']);
     if(move_uploaded_file($_FILES['t2i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $sql = "UPDATE tem2_img SET img = '".$_FILES['t2i']['name']."' WHERE id = ".$id;
          if ($conn->query($sql) === TRUE) {
                  echo "New t2i record created successfully";
          } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;}

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload b1img!';
     }
}

if(isset($_FILES['t1i']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['t1i']['name']);
     if(move_uploaded_file($_FILES['t1i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $sql = "UPDATE tem1_img SET img = '".$_FILES['t1i']['name']."' WHERE id = ".$id;
          if ($conn->query($sql) === TRUE) {
                  echo "New t1i record created successfully";
          } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;}

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload b1img!';
     }
}

if (strlen($_POST['t1c']) > 0){
        $sql = "UPDATE tem1_content SET html = '".$_POST['t1c']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New t1c record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['t2c']) > 0){
                $sql = "UPDATE tem2_content SET html = '".$_POST['t2c']."' WHERE id = ".$id;
        if ($conn->query($sql) === TRUE) {
                echo "New t2c record created successfully";
         } else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['t1a']) > 0){
    $sql = "UPDATE tem1_author SET html = '".$_POST['t1a']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New t1a record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['t2a']) > 0){
    $sql = "UPDATE tem2_author SET html = '".$_POST['t2a']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New t2a record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['t1ai']) > 0){
    $sql = "UPDATE tem1_author_infos SET html = '".$_POST['t1ai']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New t1ai record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['t2ai']) > 0){
    $sql = "UPDATE tem2_author_infos SET html = '".$_POST['t2ai']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New t2ai record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['mailContact']) > 0){
    $sql = "UPDATE mailContact SET html = '".$_POST['mailContact']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New mailContact record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['s1p1n']) > 0){
    $sql = "UPDATE body2_section1_produit1 SET nom = '".$_POST['s1p1n']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New s1p1n record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['s1p1m']) > 0){
    $sql = "UPDATE body2_section1_produit1 SET more = '".$_POST['s1p1m']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New s1p1m record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['s1p1p']) > 0){
    $sql = "UPDATE body2_section1_produit1 SET prix = '".$_POST['s1p1p']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New s1p1p record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['s1p2n']) > 0){
    $sql = "UPDATE body2_section1_produit2 SET nom = '".$_POST['s1p2n']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New s1p2n record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['s1p2m']) > 0){
    $sql = "UPDATE body2_section1_produit2 SET more = '".$_POST['s1p2m']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New s1p2m record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['s1p2p']) > 0){
    $sql = "UPDATE body2_section1_produit2 SET prix = '".$_POST['s1p2p']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New s1p2p record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if (strlen($_POST['s1p3n']) > 0){
    $sql = "UPDATE body2_section1_produit3 SET nom = '".$_POST['s1p3n']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New s1p3n record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['s1p3m']) > 0){
    $sql = "UPDATE body2_section1_produit3 SET more = '".$_POST['s1p3m']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New s1p3m record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};

if (strlen($_POST['s1p3p']) > 0){
    $sql = "UPDATE body2_section1_produit3 SET prix = '".$_POST['s1p3p']."' WHERE id = ".$id;
if ($conn->query($sql) === TRUE) {
        echo "New s1p3p record created successfully";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;}};


if(isset($_FILES['s1p1i']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['s1p1i']['name']);
     if(move_uploaded_file($_FILES['s1p1i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $sql = "UPDATE body2_section1_produit1 SET img = '".$_FILES['s1p1i']['name']."' WHERE id = ".$id;
          if ($conn->query($sql) === TRUE) {
                  echo "New s1p1i record created successfully";
          } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;}

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload b1img!';
     }
}

if(isset($_FILES['s1p2i']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['s1p2i']['name']);
     if(move_uploaded_file($_FILES['s1p2i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $sql = "UPDATE body2_section1_produit2 SET img = '".$_FILES['s1p2i']['name']."' WHERE id = ".$id;
          if ($conn->query($sql) === TRUE) {
                  echo "New s1p2i record created successfully";
          } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;}

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload b1img!';
     }
}


if(isset($_FILES['s1p3i']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['s1p3i']['name']);
     if(move_uploaded_file($_FILES['s1p3i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $sql = "UPDATE body2_section1_produit3 SET img = '".$_FILES['s1p3i']['name']."' WHERE id = ".$id;
          if ($conn->query($sql) === TRUE) {
                  echo "New s1p3i record created successfully";
          } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;}

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload b1img!';
     }
}

    if (strlen($_POST['s2p1n']) > 0){
        $sql = "UPDATE body2_section2_produit1 SET nom = '".$_POST['s2p1n']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s2p1n record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s2p1m']) > 0){
        $sql = "UPDATE body2_section2_produit1 SET more = '".$_POST['s2p1m']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s2p1m record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s2p1p']) > 0){
        $sql = "UPDATE body2_section2_produit1 SET prix = '".$_POST['s2p1p']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s2p1p record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    
    if (strlen($_POST['s2p2n']) > 0){
        $sql = "UPDATE body2_section2_produit2 SET nom = '".$_POST['s2p2n']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s2p2n record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s2p2m']) > 0){
        $sql = "UPDATE body2_section2_produit2 SET more = '".$_POST['s2p2m']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s2p2m record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s2p2p']) > 0){
        $sql = "UPDATE body2_section2_produit2 SET prix = '".$_POST['s2p2p']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s2p2p record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    
    if (strlen($_POST['s2p3n']) > 0){
        $sql = "UPDATE body2_section2_produit3 SET nom = '".$_POST['s2p3n']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s2p3n record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s2p3m']) > 0){
        $sql = "UPDATE body2_section2_produit3 SET more = '".$_POST['s2p3m']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s2p3m record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s2p3p']) > 0){
        $sql = "UPDATE body2_section2_produit3 SET prix = '".$_POST['s2p3p']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s2p3p record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    
    if(isset($_FILES['s2p1i']))
    { 
         $dossier = 'upload/';
         $fichier = basename($_FILES['s2p1i']['name']);
         if(move_uploaded_file($_FILES['s2p1i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
         {
              echo 'Upload effectué avec succès !';
              $sql = "UPDATE body2_section2_produit1 SET img = '".$_FILES['s2p1i']['name']."' WHERE id = ".$id;
              if ($conn->query($sql) === TRUE) {
                      echo "New s2p1i record created successfully";
              } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;}
    
         }
         else //Sinon (la fonction renvoie FALSE).
         {
              echo 'Echec de l\'upload b1img!';
         }
    }
    
    if(isset($_FILES['s2p2i']))
    { 
         $dossier = 'upload/';
         $fichier = basename($_FILES['s2p2i']['name']);
         if(move_uploaded_file($_FILES['s2p2i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
         {
              echo 'Upload effectué avec succès !';
              $sql = "UPDATE body2_section2_produit2 SET img = '".$_FILES['s2p2i']['name']."' WHERE id = ".$id;
              if ($conn->query($sql) === TRUE) {
                      echo "New s2p2i record created successfully";
              } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;}
    
         }
         else //Sinon (la fonction renvoie FALSE).
         {
              echo 'Echec de l\'upload b1img!';
         }
    }
    
    
    if(isset($_FILES['s2p3i']))
    { 
         $dossier = 'upload/';
         $fichier = basename($_FILES['s2p3i']['name']);
         if(move_uploaded_file($_FILES['s2p3i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
         {
              echo 'Upload effectué avec succès !';
              $sql = "UPDATE body2_section2_produit3 SET img = '".$_FILES['s2p3i']['name']."' WHERE id = ".$id;
              if ($conn->query($sql) === TRUE) {
                      echo "New s2p3i record created successfully";
              } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;}
    
         }
         else //Sinon (la fonction renvoie FALSE).
         {
              echo 'Echec de l\'upload b1img!';
         }
    }

    if (strlen($_POST['s3p1n']) > 0){
        $sql = "UPDATE body2_section3_produit1 SET nom = '".$_POST['s3p1n']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s3p1n record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s3p1m']) > 0){
        $sql = "UPDATE body2_section3_produit1 SET more = '".$_POST['s3p1m']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s3p1m record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s3p1p']) > 0){
        $sql = "UPDATE body2_section3_produit1 SET prix = '".$_POST['s3p1p']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s3p1p record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    
    if (strlen($_POST['s3p2n']) > 0){
        $sql = "UPDATE body2_section3_produit2 SET nom = '".$_POST['s3p2n']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s3p2n record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s3p2m']) > 0){
        $sql = "UPDATE body2_section3_produit2 SET more = '".$_POST['s3p2m']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s3p2m record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s3p2p']) > 0){
        $sql = "UPDATE body2_section3_produit2 SET prix = '".$_POST['s3p2p']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s3p2p record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    
    if (strlen($_POST['s3p3n']) > 0){
        $sql = "UPDATE body2_section3_produit3 SET nom = '".$_POST['s3p3n']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s3p3n record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s3p3m']) > 0){
        $sql = "UPDATE body2_section3_produit3 SET more = '".$_POST['s3p3m']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s3p3m record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    if (strlen($_POST['s3p3p']) > 0){
        $sql = "UPDATE body2_section3_produit3 SET prix = '".$_POST['s3p3p']."' WHERE id = ".$id;
    if ($conn->query($sql) === TRUE) {
            echo "New s3p3p record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;}};
    
    
    if(isset($_FILES['s3p1i']))
    { 
         $dossier = 'upload/';
         $fichier = basename($_FILES['s3p1i']['name']);
         if(move_uploaded_file($_FILES['s3p1i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
         {
              echo 'Upload effectué avec succès !';
              $sql = "UPDATE body2_section3_produit1 SET img = '".$_FILES['s3p1i']['name']."' WHERE id = ".$id;
              if ($conn->query($sql) === TRUE) {
                      echo "New s3p1i record created successfully";
              } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;}
    
         }
         else //Sinon (la fonction renvoie FALSE).
         {
              echo 'Echec de l\'upload b1img!';
         }
    }
    
    if(isset($_FILES['s3p2i']))
    { 
         $dossier = 'upload/';
         $fichier = basename($_FILES['s3p2i']['name']);
         if(move_uploaded_file($_FILES['s3p2i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
         {
              echo 'Upload effectué avec succès !';
              $sql = "UPDATE body2_section3_produit2 SET img = '".$_FILES['s3p2i']['name']."' WHERE id = ".$id;
              if ($conn->query($sql) === TRUE) {
                      echo "New s3p2i record created successfully";
              } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;}
    
         }
         else //Sinon (la fonction renvoie FALSE).
         {
              echo 'Echec de l\'upload b1img!';
         }
    }
    
    
    if(isset($_FILES['s3p3i']))
    { 
         $dossier = 'upload/';
         $fichier = basename($_FILES['s3p3i']['name']);
         if(move_uploaded_file($_FILES['s3p3i']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
         {
              echo 'Upload effectué avec succès !';
              $sql = "UPDATE body2_section3_produit3 SET img = '".$_FILES['s3p3i']['name']."' WHERE id = ".$id;
              if ($conn->query($sql) === TRUE) {
                      echo "New s3p3i record created successfully";
              } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;}
    
         }
         else //Sinon (la fonction renvoie FALSE).
         {
              echo 'Echec de l\'upload b1img!';
         }
    } 
    

            
$conn->close();

echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
