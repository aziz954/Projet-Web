<?PHP
include "../config.php";
class ordonnance 
{
	function afficherord ($ordonnance)
	{
		echo "Reference: ".$client->getref()."<br>";
		echo "Identifiant du client: ".$client->getidclient()."<br>";
		echo "Identifiant du meducament: ".$client->getidmedicament()."<br>";
		
	}
	
	function ajouterord($client)
	{
		$sql="insert into ordonnance (ref,idclient,idmedicament) values ( :ref,:idclient,:idmedicament)";
		$db = config::getConnexion();
		try
		{
        	$req=$db->prepare($sql);
        	$ref=$ordonnance->getref();
        	$idclient=$ordonnance->getidclient();
        	$idmedicament=$ordonnance->getidmedicament();

			$req->bindValue(':ref',$ref);
			$req->bindValue(':idclient',$idclient);
			$req->bindValue(':idmedicament',$idmedicament);
		
            $req->execute();
           
        }

        catch (Exception $e)
        {
            echo 'Erreur, le client n est pas ajouter: '.$e->getMessage();
        }
		
	}
	
	function afficherord()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From ordonnance";

		$db = config::getConnexion();

		try
		{
			$liste=$db->query($sql);
			return $liste;
		}

        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerord($ref)
	{
		$sql="DELETE FROM ordonnance where ref= :ref";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref',$ref);

		try
		{
            $req->execute();
           // header('Location: index.php');
        }

        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierord($ordonnance,$ref)
	{
		$sql="UPDATE ordonnance SET ref=:ref,idclient=:idclient,idmedicament=:idmedicament WHERE ref=:ref";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try
		{		
        $req=$db->prepare($sql);
		
        $ref=$ordonnance->getref();
        $idclient=$ordonnance->getidclient();
        $idmedicament=$ordonnance->getidmedicament();

		$datas = array( ':ref'=>$ref,':idclient'=>$idclient,':idmedicament'=>$idmedicament );
		
		$req->bindValue(':ref',$ref);
		$req->bindValue(':idclient',$idclient);
		$req->bindValue(':idmedicament',$idmedicament);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }
		
	}

}

?>
