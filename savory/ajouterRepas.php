<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname="livraison_repas";


//Connexion  au SGBD MYSQL

 
//Selection de la bd  de travail
//if($select = mysql_select_db("livraison_repas", $conn)) //livraison_repas = c'est la BDD
//$conn = mysql_connect("localhost", "root", "");

 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$nom_repas = $_POST['nom_repas'];
$score_repas= $_POST['score_repas'];
$prix = $_POST['prix'];
$descri = $_POST['descri'];
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql= "INSERT INTO repas (nom_repas, score_repas, prix,descri) VALUES ('$nom_repas', '$score_repas', '$prix', '$descri')";
    // use exec() because no results are returned
    $conn->exec($sql);
  
   header('Location: http://localhost/savory/admin.html');

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
 
//Fermeture de la connexion au SGBD
//mysql_close($conn);
?>