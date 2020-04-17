<?PHP
include "../core/clientc.php";
$client1c=new clientc();
$listeclient=$client1c->afficherclient();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>

<td>Nom</td>
<td>Prenom</td>
<td>Adresse</td>
<td>Num tel</td>
<td>id</td>
<td>supprimer</td>
<td>modifier</td>

</tr>

<?PHP
foreach($listeclient as $row){
	?>
	<tr>
	
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['num']; ?></td>
	<td><?PHP echo $row['id']; ?></td>

	<td>
        <form method="POST"
              action="supprimerclient.php">
	<input type="submit" name="supprimer"
           value="supprimer">
	<input  value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierclient.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


