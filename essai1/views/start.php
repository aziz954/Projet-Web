<?PHP
include "../entities/client.php";
include "../core/clientc.php";
$client=new client('BEN Ahmed','Salah','manouba',20,678909);
$clientc=new clientc();
$clientc->afficherclient($client);
echo "****************";
echo "<br>";
echo "nom:".$client->getnom();
echo "<br>";
echo "prenom:".$client->getprenom();
echo "<br>";
echo "adresse:".$client->getclient();
echo "<br>";
echo "num:".$client->getnum();
echo "<br>";
echo "id:".$client->getid();
echo "<br>";

?>