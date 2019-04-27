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
	$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['login'];
$pwd = $_POST['pwd'];
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql= "INSERT INTO client (nom, prenom, login,pwd) VALUES ('$nom', '$prenom', '$login', '$pwd')";
    // use exec() because no results are returned
    $conn->exec($sql);
   // echo "New record created successfully";
//if($login=='mabroukanaouech23@gmail.com') header('Location: http://localhost/savory/admin.html') else 
   header('Location: http://localhost/savory/menu.html');

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
  

$conn = null;
 
//Fermeture de la connexion au SGBD
//mysql_close($conn);
?>