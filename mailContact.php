<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {

$servername = "localhost";
$username = "appli_cms";
$password = "56185/frontend/paper_la";
$database = "appli_cms";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

function formated($rslt)
{
    if ($rslt->num_rows > 0) {
        while($row = $rslt->fetch_assoc()) {
            $html = $row["html"];
        }
    }
    return $html;
}

$id = $_POST['id'];

$sql = "SELECT html FROM mailContact WHERE id=".$id;
$rslt = $conn->query($sql);
$mailContact = formated($rslt);

// Récupération des variables et sécurisation des données
  $nom     = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
  $phone   = htmlentities($_POST['phone']);
  $email   = htmlentities($_POST['email']);
  $message = htmlentities($_POST['message']);
  // Variables concernant l'email
  $destinataire = $mailContact; // Adresse email du webmaster (à personnaliser)
  $sujet = 'Demande de contact ACTEVIA Entreprise'; // Titre de l'email
  $contenu = '<html><head><title>Demande de contact ACTEVIA Entreprise</title></head><body>';
  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
  $contenu .= '<p><strong>Téléphone</strong>: '.$phone.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
  // Envoyer l'email
  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
  echo '<h2>Merci pour votre message.</h2><p>Nous vous recontacterons dans les plus brefs délais</p>'; // Afficher un message pour indiquer que le message a été envoyé
  // (2) Fin du code pour traiter l'envoi de l'email
}
?>