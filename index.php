<style>
    .container {
        margin-top: 15px;
    }

    #save,
    .info {
        display: none;
    }

    .info {
        color: #999;
    }

    textarea {
        width: 100%;
        min-height: 100px;
        resize: vertical;
        margin: 0;
        padding: 2px;
    }
</style>

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$servername = "localhost";
$username = "appli_cms";
$password = "56185/frontend/paper_la";
$database = "appli_cms";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
function formated($rslt)
{
    if ($rslt->num_rows > 0) {
        while($row = $rslt->fetch_assoc()) {
            $html = $row["html"];
        }
    }
    return $html;
}
function formatedimg($rslt)
{
    if ($rslt->num_rows > 0) {
        while($row = $rslt->fetch_assoc()) {
            $html = $row["img"];
        }
    }
    return $html;
}
function formatedprod($rslt)
{
    $prod=array();
    if ($rslt->num_rows > 0) {
        while($row = $rslt->fetch_assoc()) {
            $prod['nom'] = $row["nom"];
            $prod['more'] = $row['more'];
            $prod['img'] = $row["img"];
            $prod['prix'] = $row["prix"];
        }
    }
    return $prod;
}
$id = 1;

$sql = "SELECT html FROM title WHERE id=".$id;
$titleA = $conn->query($sql);
$title = formated($titleA);

$sql = "SELECT html FROM subtitle WHERE id=".$id;
$subtitleA = $conn->query($sql);
$subtitle = formated($subtitleA);

$sql = "SELECT html FROM header_description WHERE id=".$id;
$hdescA = $conn->query($sql);
$hdesc = formated($hdescA);

$sql = "SELECT html FROM body1_title WHERE id=".$id;
$b1titleA = $conn->query($sql);
$b1title = formated($b1titleA);

$sql = "SELECT html FROM body1_content WHERE id=".$id;
$rslt = $conn->query($sql);
$b1content = formated($rslt);

$sql = "SELECT html FROM body2_content WHERE id=".$id;
$rslt = $conn->query($sql);
$b2content = formated($rslt);

$sql = "SELECT html FROM body2_title WHERE id=".$id;
$rslt = $conn->query($sql);
$b2title = formated($rslt);

$sql = "SELECT img FROM headerbackgroundimg WHERE id=".$id;
$rslt = $conn->query($sql);
$hdbgimg = formatedimg($rslt);

$sql = "SELECT img FROM logo WHERE id=".$id;
$rslt = $conn->query($sql);
$logo = formatedimg($rslt);

$sql = "SELECT img FROM body1_img WHERE id=".$id;
$rslt = $conn->query($sql);
$b1img = formatedimg($rslt);

$sql = "SELECT html FROM footer_apropos WHERE id=".$id;
$rslt = $conn->query($sql);
$fapropos = formated($rslt);

$sql = "SELECT html FROM footer_horaires WHERE id=".$id;
$rslt = $conn->query($sql);
$fhoraires = formated($rslt);

$sql = "SELECT html FROM lienFB WHERE id=".$id;
$rslt = $conn->query($sql);
$lienFB = formated($rslt);

$sql = "SELECT html FROM lienInsta WHERE id=".$id;
$rslt = $conn->query($sql);
$lienInsta = formated($rslt);

$sql = "SELECT html FROM lienTwitter WHERE id=".$id;
$rslt = $conn->query($sql);
$lienTwitter = formated($rslt);

$sql = "SELECT html FROM lienTA WHERE id=".$id;
$rslt = $conn->query($sql);
$lienTA = formated($rslt);

$sql = "SELECT html FROM body2_section1_titre WHERE id=".$id;
$rslt = $conn->query($sql);
$b2s1t = formated($rslt);

$sql = "SELECT html FROM body2_section2_titre WHERE id=".$id;
$rslt = $conn->query($sql);
$b2s2t = formated($rslt);

$sql = "SELECT html FROM body2_section3_titre WHERE id=".$id;
$rslt = $conn->query($sql);
$b2s3t = formated($rslt);

$sql = "SELECT html FROM tem1_content WHERE id=".$id;
$rslt = $conn->query($sql);
$t1c = formated($rslt);

$sql = "SELECT html FROM tem2_content WHERE id=".$id;
$rslt = $conn->query($sql);
$t2c = formated($rslt);

$sql = "SELECT html FROM tem1_author WHERE id=".$id;
$rslt = $conn->query($sql);
$t1a = formated($rslt);

$sql = "SELECT html FROM tem2_author WHERE id=".$id;
$rslt = $conn->query($sql);
$t2a = formated($rslt);

$sql = "SELECT html FROM tem2_author_infos WHERE id=".$id;
$rslt = $conn->query($sql);
$t2ai = formated($rslt);

$sql = "SELECT html FROM tem1_author_infos WHERE id=".$id;
$rslt = $conn->query($sql);
$t1ai = formated($rslt);

$sql = "SELECT img FROM tem1_img WHERE id=".$id;
$rslt = $conn->query($sql);
$t1i = formatedimg($rslt);

$sql = "SELECT img FROM tem2_img WHERE id=".$id;
$rslt = $conn->query($sql);
$t2i = formatedimg($rslt);

$sql = "SELECT nom, more, img, prix FROM body2_section1_produit1 WHERE id=".$id;
$rslt = $conn->query($sql);
$produit1 = formatedprod($rslt);

$sql = "SELECT nom, more, img, prix FROM body2_section1_produit2 WHERE id=".$id;
$rslt = $conn->query($sql);
$produit2 = formatedprod($rslt);

$sql = "SELECT nom, more, img, prix FROM body2_section1_produit3 WHERE id=".$id;
$rslt = $conn->query($sql);
$produit3 = formatedprod($rslt);

$sql = "SELECT nom, more, img, prix FROM body2_section2_produit1 WHERE id=".$id;
$rslt = $conn->query($sql);
$s2produit1 = formatedprod($rslt);

$sql = "SELECT nom, more, img, prix FROM body2_section2_produit2 WHERE id=".$id;
$rslt = $conn->query($sql);
$s2produit2 = formatedprod($rslt);

$sql = "SELECT nom, more, img, prix FROM body2_section2_produit3 WHERE id=".$id;
$rslt = $conn->query($sql);
$s2produit3 = formatedprod($rslt);


$sql = "SELECT nom, more, img, prix FROM body2_section3_produit1 WHERE id=".$id;
$rslt = $conn->query($sql);
$s3produit1 = formatedprod($rslt);

$sql = "SELECT nom, more, img, prix FROM body2_section3_produit2 WHERE id=".$id;
$rslt = $conn->query($sql);
$s3produit2 = formatedprod($rslt);

$sql = "SELECT nom, more, img, prix FROM body2_section3_produit3 WHERE id=".$id;
$rslt = $conn->query($sql);
$s3produit3 = formatedprod($rslt);



?>


<div class="container">
<div id="menu">
    <ul>    
        <li><a href="#entete">Accueil</a></li>
        <li><a href="#body1"><?php echo $b1title;?></a></li>
        <li><a href="#body2"><?php echo $b2title;?></a></li>
        <li><a href="#temoignages">Témoignages</a></li>
        <li><a href="#section-contact">Contact</a></li>
    </ul>
</div>
<form id="form" method="post" action="save.php" enctype="multipart/form-data">
<div id="entete" style="background-image: url('upload/<?php echo $hdbgimg;?>')";>
    <img src='upload/<?php echo $logo;?>' style="width:100px;height:100px;display: block;margin-left:auto;margin-right:auto;">
    <div class="inputimg" style="display : none">
        <label for="logo">Image du logo : </label>
        <input type="file" name="logo" id="logo" value="" accept="image/*;capture=camera">
    </div>
    <h1 class="modifiabletxt" id="titleA"><?php echo $title;?></h1>
    <h2 class="modifiabletxt" id="subtitleA"><?php echo $subtitle;?></h2>
    <p class="modifiabletxt" id="hdescA"><?php echo $hdesc;?></p>
    <div class="inputimg" style="display : none">
        <label for="imgbackgroundheader">Image de fond de l'entête : </label>
        <input type="file" name="imgbackgroundheader" id="imgbackgroundheader" value="" accept="image/*;capture=camera">
    </div>
</div>

<div id="body1">
    <h1 class="modifiabletxt" id="b1titleA"><?php echo $b1title;?></h1>
    <div class="modifiabletxt" id="b1contentA"><?php echo $b1content;?></div>
    <div class="inputimg" style="display : none">
        <label for="b1img">Image de la première partie : </label>
        <input type="file" name="b1img" id="b1img" value="" accept="image/*;capture=camera">
    </div>
    <img src='upload/<?php echo $b1img;?>'>
</div>

<div id="body2">
    <h1 class="modifiabletxt" id="b2titleA"><?php echo $b2title;?></h1>
    <div class="modifiabletxt" id="b2contentA"><?php echo $b2content;?></div>
    <div id="navbody2">
        <a id="navsection1" href="#section1" ><?php echo $b2s1t;?></a>
        <a id="navsection2" href="#section2" ><?php echo $b2s2t;?></a>
        <a id="navsection3" href="#section3" ><?php echo $b2s3t;?></a>
    </div>
    <div class="inputtxt" style="display : none">
        <label for="b2s1t">Titre Section1 : </label>
        <input type="text" name="b2s1t" id="b2s1t" value="">
        <label for="b2s2t">Titre Section2 : </label>
        <input type="text" name="b2s2t" id="b2s2t" value="">
        <label for="b2s3t">Titre Section3 : </label>
        <input type="text" name="b2s3t" id="b2s3t" value="">
    </div>

    <div id="section1"> 
    <div id="s1produit1">
        <br>
        <div class="inputimg" style="display : none">
            <label for="s1p1i">Image du produit : </label>
            <input type="file" name="s1p1i" id="s1p1i" value="" accept="image/*;capture=camera">
        </div>
        <img src='upload/<?php echo $produit1['img'];?>' style="width:100px;height:100px">
        <h3 id="s1p1nA" class="modifiabletxt"><?php echo $produit1['nom'];?></h3>
        <p id="s1p1mA" class="modifiabletxt"><?php echo $produit1['more'];?></p>
        <p id="s1p1pA" class="modifiabletxt"><?php echo $produit1['prix'];?><p>
    </div>
    <div id="s1produit2">
        <br>
        <div class="inputimg" style="display : none">
            <label for="s1p2i">Image du produit : </label>
            <input type="file" name="s1p2i" id="s1p2i" value="" accept="image/*;capture=camera">
        </div>
        <img src='upload/<?php echo $produit2['img'];?>' style="width:100px;height:100px">
        <h3 id="s1p2nA" class="modifiabletxt"><?php echo $produit2['nom'];?></h3>
        <p id="s1p2mA" class="modifiabletxt"><?php echo $produit2['more'];?></p>
        <p id="s1p2pA" class="modifiabletxt"><?php echo $produit2['prix'];?><p>
    </div>
    <div id="s1produit3">
        <br>
        <div class="inputimg" style="display : none">
            <label for="s1p3i">Image du produit : </label>
            <input type="file" name="s1p3i" id="s1p3i" value="" accept="image/*;capture=camera">
        </div>
        <img src='upload/<?php echo $produit3['img'];?>' style="width:100px;height:100px">
        <h3 id="s1p3nA" class="modifiabletxt"><?php echo $produit3['nom'];?></h3>
        <p id="s1p3mA" class="modifiabletxt"><?php echo $produit3['more'];?></p>
        <p id="s1p3pA" class="modifiabletxt"><?php echo $produit3['prix'];?><p>
    </div>

    </div>


    <div id="section2" style="display : none">  
    <div id="s2produit1">
        <br>
        <div class="inputimg" style="display : none">
            <label for="s2p1i">Image du produit : </label>
            <input type="file" name="s2p1i" id="s2p1i" value="" accept="image/*;capture=camera">
        </div>
        <img src='upload/<?php echo $s2produit1['img'];?>' style="width:100px;height:100px">
        <h3 id="s2p1nA" class="modifiabletxt"><?php echo $s2produit1['nom'];?></h3>
        <p id="s2p1mA" class="modifiabletxt"><?php echo $s2produit1['more'];?></p>
        <p id="s2p1pA" class="modifiabletxt"><?php echo $s2produit1['prix'];?><p>
    </div>
    <div id="s2produit2">
        <br>
        <div class="inputimg" style="display : none">
            <label for="s2p2i">Image du produit : </label>
            <input type="file" name="s2p2i" id="s2p2i" value="" accept="image/*;capture=camera">
        </div>
        <img src='upload/<?php echo $s2produit2['img'];?>' style="width:100px;height:100px">
        <h3 id="s2p2nA" class="modifiabletxt"><?php echo $s2produit2['nom'];?></h3>
        <p id="s2p2mA" class="modifiabletxt"><?php echo $s2produit2['more'];?></p>
        <p id="s2p2pA" class="modifiabletxt"><?php echo $s2produit2['prix'];?><p>
    </div>
    <div id="s2produit3">
        <br>
        <div class="inputimg" style="display : none">
            <label for="s2p3i">Image du produit : </label>
            <input type="file" name="s2p3i" id="s2p3i" value="" accept="image/*;capture=camera">
        </div>
        <img src='upload/<?php echo $s2produit3['img'];?>' style="width:100px;height:100px">
        <h3 id="s2p3nA" class="modifiabletxt"><?php echo $s2produit3['nom'];?></h3>
        <p id="s2p3mA" class="modifiabletxt"><?php echo $s2produit3['more'];?></p>
        <p id="s2p3pA" class="modifiabletxt"><?php echo $s2produit3['prix'];?><p>
    </div>
    </div>

    <div id="section3" style="display : none">
    <div id="s3produit1">
        <br>
        <div class="inputimg" style="display : none">
            <label for="s3p1i">Image du produit : </label>
            <input type="file" name="s3p1i" id="s3p1i" value="" accept="image/*;capture=camera">
        </div>
        <img src='upload/<?php echo $s3produit1['img'];?>' style="width:100px;height:100px">
        <h3 id="s3p1nA" class="modifiabletxt"><?php echo $s3produit1['nom'];?></h3>
        <p id="s3p1mA" class="modifiabletxt"><?php echo $s3produit1['more'];?></p>
        <p id="s3p1pA" class="modifiabletxt"><?php echo $s3produit1['prix'];?><p>
    </div>
    <div id="s3produit2">
        <br>
        <div class="inputimg" style="display : none">
            <label for="s3p2i">Image du produit : </label>
            <input type="file" name="s3p2i" id="s3p2i" value="" accept="image/*;capture=camera">
        </div>
        <img src='upload/<?php echo $s3produit2['img'];?>' style="width:100px;height:100px">
        <h3 id="s3p2nA" class="modifiabletxt"><?php echo $s3produit2['nom'];?></h3>
        <p id="s3p2mA" class="modifiabletxt"><?php echo $s3produit2['more'];?></p>
        <p id="s3p2pA" class="modifiabletxt"><?php echo $s3produit2['prix'];?><p>
    </div>
    <div id="s3produit3">
        <br>
        <div class="inputimg" style="display : none">
            <label for="s3p3i">Image du produit : </label>
            <input type="file" name="s3p3i" id="s3p3i" value="" accept="image/*;capture=camera">
        </div>
        <img src='upload/<?php echo $s3produit3['img'];?>' style="width:100px;height:100px">
        <h3 id="s3p3nA" class="modifiabletxt"><?php echo $s3produit3['nom'];?></h3>
        <p id="s3p3mA" class="modifiabletxt"><?php echo $s3produit3['more'];?></p>
        <p id="s3p3pA" class="modifiabletxt"><?php echo $s3produit3['prix'];?><p>
    </div>
    </div>
</div>
<div id="temoignages">    
<h1>Témoignages</h1>
<div id="temoignage1">
    <blockquote >
        <p id="t1cA" class="modifiabletxt"><?php echo $t1c;?></p>
            <div class="author" style="display: block;margin-left:auto;margin-right:auto;">
            <div class="inputimg" style="display : none">
                <label for="t1i">Image de l'auteur : </label>
                <input type="file" name="t1i" id="t1i" value="" accept="image/*;capture=camera">
            </div>
               <img src="upload/<?php echo $t1i;?>" alt="Image placeholder" style="width:100px;height:100px">
               <h4 id="t1aA" class="modifiabletxt"><?php echo $t1a;?></h4>
               <p id="t1aiA" class="modifiabletxt"><?php echo $t1ai;?></p>
            </div>
    </blockquote>
</div>
<div id="temoignage2" style="display : none">
    <blockquote>
    <p id="t1aA" class="modifiabletxt"><?php echo $t2c;?></p>
        <div class="author" style="display: block;margin-left:auto;margin-right:auto;">
        <div class="inputimg" style="display : none">
                <label for="t2i">Image de l'auteur : </label>
                <input type="file" name="t2i" id="t2i" value="" accept="image/*;capture=camera">
        </div>
            <img src="upload/<?php echo $t2i;?>" alt="Image placeholder" style="width:100px;height:100px">
            <h4 id="t2aA" class="modifiabletxt"><?php echo $t2a;?></h4>
            <p id="t2aiA" class="modifiabletxt"><?php echo $t2ai;?></p>
        </div>
    </blockquote>
</div>
</div>
<button id="btntemoignage1">Temoignage n°1</button>
<button id="btntemoignage2">Temoignage n°2</button>

<div id="footer" style="background-color: black; color: white">
    <div>
        <h2>A propos</h2>
        <p class="modifiabletxt" id="faproposA"><?php echo $fapropos;?><p>
    </div>
    <div>
        <h2>Horaires</h2>
        <p class="modifiabletxt" id="fhorairesA"><?php echo $fhoraires;?><p>
    </div>
    <div>
        <h2>Suivez nous</h2>
        <div class="inputtxt" style="display : none">
            <label for="lienTA">Lien TripAdvisor : </label>
            <input type="text" id="lienTA" name="lienTA" value="<?php echo $lienTA ;?>">
            <label for="lienTwitter">Lien Twitter : </label>
            <input type="text" id="lienTwitter" name="lienTwitter" value="<?php echo $lienTwitter ;?>">
            <label for="lienFB">Lien Facebook</label>
            <input type="text" id="lienFB" name="lienFB" value="<?php echo $lienFB ;?>">
            <label for="lienInsta">Lien Instagram</label>
            <input type="text" id="lienInsta" name="lienInsta" value="<?php echo $lienInsta ;?>">
        </div>
        <div class="rendu">
            <a href="<?php echo $lienFB ;?>">Facebook</a>
            <a href="<?php echo $lienTwitter ;?>">Twitter</a>
            <a href="<?php echo $lienInsta ;?>">Instagram</a>
            <a href="<?php echo $lienTA ;?>">TripAdvisor</a>
        </div>
    </div>
    <p>© Copyright 2018. Tous droits réservés. Créé et hébergé par <a href="https://www.nymphea-studio.fr">www.nymphea-studio.fr</a></p>
</div>

<div class="inputtxt">
    <input type="text" id="mailContact" name="mailContact" value="<?php echo $mailContact ;?>">
</div>



<input type="hidden" name="title" id="title" value="">
<input type="hidden" name="subtitle" id="subtitle" value="">
<input type="hidden" name="hdesc" id="hdesc" value="">
<input type="hidden" name="b1title" id="b1title" value="">
<input type="hidden" name="b1content" id="b1content" value="">
<input type="hidden" name="b2title" id="b2title" value="">
<input type="hidden" name="b2content" id="b2content" value="">
<input type="hidden" name="fapropos" id="fapropos" value="">
<input type="hidden" name="fhoraires" id="fhoraires" value="">
<input type="hidden" name="t1c" id="t1c" value="">
<input type="hidden" name="t2c" id="t2c" value="">
<input type="hidden" name="t1a" id="t1a" value="">
<input type="hidden" name="t1ai" id="t1ai" value="">
<input type="hidden" name="t2a" id="t2a" value="">
<input type="hidden" name="t2ai" id="t2ai" value="">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
<input type="hidden" name="s1p1n" id="s1p1n" value="">
<input type="hidden" name="s1p1m" id="s1p1m" value="">
<input type="hidden" name="s1p1p" id="s1p1p" value="">
<input type="hidden" name="s1p2n" id="s1p2n" value="">
<input type="hidden" name="s1p2m" id="s1p2m" value="">
<input type="hidden" name="s1p2p" id="s1p2p" value="">
<input type="hidden" name="s1p3n" id="s1p3n" value="">
<input type="hidden" name="s1p3m" id="s1p3m" value="">
<input type="hidden" name="s1p3p" id="s1p3p" value="">

<input type="hidden" name="s2p1n" id="s2p1n" value="">
<input type="hidden" name="s2p1m" id="s2p1m" value="">
<input type="hidden" name="s2p1p" id="s2p1p" value="">
<input type="hidden" name="s2p2n" id="s2p2n" value="">
<input type="hidden" name="s2p2m" id="s2p2m" value="">
<input type="hidden" name="s2p2p" id="s2p2p" value="">
<input type="hidden" name="s2p3n" id="s2p3n" value="">
<input type="hidden" name="s2p3m" id="s2p3m" value="">
<input type="hidden" name="s2p3p" id="s2p3p" value="">

<input type="hidden" name="s3p1n" id="s3p1n" value="">
<input type="hidden" name="s3p1m" id="s3p1m" value="">
<input type="hidden" name="s3p1p" id="s3p1p" value="">
<input type="hidden" name="s3p2n" id="s3p2n" value="">
<input type="hidden" name="s3p2m" id="s3p2m" value="">
<input type="hidden" name="s3p2p" id="s3p2p" value="">
<input type="hidden" name="s3p3n" id="s3p3n" value="">
<input type="hidden" name="s3p3m" id="s3p3m" value="">
<input type="hidden" name="s3p3p" id="s3p3p" value="">

</form>

<div class="section bg-light" data-aos="fade-up " id="section-contact">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Contactez-nous !</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form method="post" action="mailContact.php">
                  <div class="row mb-4">
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Nom</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon actevia-android-person"></span>
                        <input type="text" class="form-control" id="name" name="nom">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon actevia-email"></span>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Téléphone</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon actevia-android-call"></span>
                        <input type="text" class="form-control" id="phone" name="phone">
                      </div>
                    </div>

                   <div class="form-group col-md-12">
                      <label for="message" class="label">Message</label>
                     <textarea name="message" id="message" cols="30" rows="10" class="form-control "></textarea>
                   </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Envoyer">
                    </div>
                  </div>
                  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </form>
              </div>
            </div>
          </div>
        </div>


    <button class="btn btn-info" id="edit"><span class="glyphicon glyphicon-edit"></span> edit</button>
    <button class="btn btn-success" id="save"><span class="glyphicon glyphicon-save"></span> save</button>
</div>


<script src="./jquery-2.2.4.js"></script>
<script>
    $('#edit').click(function () {
        $('#edit').hide();
        $('.modifiabletxt').each(function () {
            var content = $(this).html();
            $(this).html('<textarea>' + content + '</textarea>');
        });

        $('#save').show();
        $('.info').fadeIn('fast');
        $('.inputimg').each(function(){
            $(this).show();
        });
        $('.inputtxt').each(function(){
            $(this).show();
        });
        $('.rendu').each(function(){
            $(this).hide();
        });
    });

    $('#save').click(function () {
        $('#save, .info').hide();
        $('textarea').each(function () {
            var content = $(this).val();//.replace(/\n/g,"<br>");
            $(this).html(content);
            $(this).contents().unwrap();
        });
        $('.rendu').each(function(){
            $(this).show();
        });

        $('#edit').show();
        $('#title').val($('#titleA').html());
        $('#subtitle').val($('#subtitleA').html());
        $('#hdesc').val($('#hdescA').html());
        $('#b1title').val($('#b1titleA').html());
        $('#b1content').val($('#b1contentA').html());
        $('#b2title').val($('#b2titleA').html());
        $('#b2content').val($('#b2contentA').html());
        $('#fapropos').val($('#faproposA').html());
        $('#fhoraires').val($('#fhorairesA').html());
        $('#b2s1c').val($('#section1').html());
        $('#b2s2c').val($('#section2').html());
        $('#b2s3c').val($('#section3').html());
        $('#t1c').val($('#t1cA').html());
        $('#t2c').val($('#t2cA').html());
        $('#t1a').val($('#t1aA').html());
        $('#t1ai').val($('#t1aiA').html());
        $('#t2a').val($('#t2aA').html());
        $('#t2ai').val($('#t2aiA').html());
        $('#s1p1n').val($('#s1p1nA').html());
        $('#s1p1m').val($('#s1p1mA').html());
        $('#s1p1p').val($('#s1p1pA').html());
        $('#s1p2n').val($('#s1p2nA').html());
        $('#s1p2m').val($('#s1p2mA').html());
        $('#s1p2p').val($('#s1p2pA').html());
        $('#s1p3n').val($('#s1p3nA').html());
        $('#s1p3m').val($('#s1p3mA').html());
        $('#s1p3p').val($('#s1p3pA').html());

        $('#s2p1n').val($('#s2p1nA').html());
        $('#s2p1m').val($('#s2p1mA').html());
        $('#s2p1p').val($('#s2p1pA').html());
        $('#s2p2n').val($('#s2p2nA').html());
        $('#s2p2m').val($('#s2p2mA').html());
        $('#s2p2p').val($('#s2p2pA').html());
        $('#s2p3n').val($('#s2p3nA').html());
        $('#s2p3m').val($('#s2p3mA').html());
        $('#s2p3p').val($('#s2p3pA').html());
        
        $('#s3p1n').val($('#s3p1nA').html());
        $('#s3p1m').val($('#s3p1mA').html());
        $('#s3p1p').val($('#s3p1pA').html());
        $('#s3p2n').val($('#s3p2nA').html());
        $('#s3p2m').val($('#s3p2mA').html());
        $('#s3p2p').val($('#s3p2pA').html());
        $('#s3p3n').val($('#s3p3nA').html());
        $('#s3p3m').val($('#s3p3mA').html());
        $('#s3p3p').val($('#s3p3pA').html());
        $("#form").submit();
    });


    $('#navsection1').click(function () {
        $('#section1').show();
        $('#section2').hide();
        $('#section3').hide();
    });

    $('#navsection2').click(function () {
        $('#section2').show();
        $('#section1').hide();
        $('#section3').hide();
    });

    $('#navsection3').click(function () {
        $('#section3').show();
        $('#section2').hide();
        $('#section1').hide();
    });
  
    $('#btntemoignage1').click(function () {
        event.preventDefault();
        $('#temoignage1').show();
        $('#temoignage2').hide();
    });

    $('#btntemoignage2').click(function () {
        event.preventDefault();
        $('#temoignage2').show();
        $('#temoignage1').hide();
    });

</script>