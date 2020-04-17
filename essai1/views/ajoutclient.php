<?PHP
include "../entities/client.php";
include "../core/clientc.php";

if (isset($_GET['nom']) and isset($_GET['prenom']) and isset($_GET['adresse']) and isset($_GET['num'])and isset($_GET['num'])){
$client1 = new client($_GET['nom'],$_GET['prenom'],$_GET['adresse'],$_GET['num'],$_GET['id']) ;

$client1C=new clientc();
$client1C->ajouterclient($client1);
header('Location: afficherclient.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>