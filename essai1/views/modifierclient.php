<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/client.php";
include "../core/clientc.php";

if (isset($_GET['id']))
{
	$clientc=new clientc();
    $result=$clientc->recupererclient($_GET['id']);
	foreach($result as $row){
		
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$adresse=$row['adresse'];
		$num=$row['num'];
		$id=$row['id'];
?>
<form method="POST">
<table>
<caption>Modifier client</caption>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>Num tel</td>
<td><input type="number" name="num" value="<?PHP echo $num ?>"></td>
</tr>
<tr>
<td>Identifiant</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier']))
{
	$client=new client($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['num'],$_POST['id']);
	$clientc->modifierclient($client,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherclient.php');
}
?>
</body>
</HTMl>