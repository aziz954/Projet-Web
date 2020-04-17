<?PHP
include "../config.php";
class clientc {
function afficherclient ($client){
		
		echo "Nom: ".$client->getnom()."<br>";
		echo "Prénom: ".$client->getprenom()."<br>";
		echo "Adresse: ".$client->getadresse()."<br>";
		echo "Num tel: ".$client->getnum()."<br>";
		echo "id: ".$client->getid()."<br>";
	}
	
	
	function ajouterclient($client)
	{
		$sql="insert into client (nom,prenom,adresse,num,id) values ( :nom,:prenom,:adresse,:num,:id)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $adresse=$client->getadresse();
        $num=$client->getnum();
        $id=$client->getid();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':num',$num);
		$req->bindValue(':id',$id);
		
            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherclient()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($id){
		$sql="DELETE FROM client where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierclient($client,$id){
		$sql="UPDATE client SET nom=:nom,prenom=:prenom,adresse=:adresse,num=:num WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $adresse=$client->getadresse();
        $num=$client->getnum();
        $id=$client->getid();
		$datas = array( ':nom'=>$nom,':prenom'=>$prenom,':adresse'=>$adresse,':num'=>$num,':id'=>$id);
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':num',$num);
		$req->bindValue(':id',$id);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererclient($id){
		$sql="SELECT * from client where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeclient($id){
		$sql="SELECT * from client where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>
