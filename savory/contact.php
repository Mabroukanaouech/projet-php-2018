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
	$nom_c = $_POST['nom_c'];
$email = $_POST['email'];
$message = $_POST['message'];
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql= "INSERT INTO contact (nom_c, email,message) VALUES ('$nom_c', '$email', '$message')";
    // use exec() because no results are returned
    $conn->exec($sql);
   // echo "New record created successfully";
  
   
   header('Location: http://localhost/savory/contact.html');

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
  

$conn = null;
 
//Fermeture de la connexion au SGBD
//mysql_close($conn);
?>