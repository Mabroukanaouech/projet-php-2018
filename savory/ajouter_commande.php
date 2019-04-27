<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname="livraison_repas";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

function creationCommande(){
   if (!isset($_SESSION['commande'])){
      $_SESSION['commande']=array();
      $_SESSION['commande']['quantite'] = array();
      $_SESSION['commande']['date'] = array();
      $_SESSION['commande']['adresse'] = array();
      $_SESSION['commande']['cin_client'] = array();
      
   }
   return true;
}