<?PHP
class client
{
	private $nom;
	private $prenom;
	private $adresse ;
	private $num;
	private $id ; 
	
	function __construct($nom,$prenom,$adresse,$num,$id)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
		$this->num=$num;
		$this->id=$id;

	}

	function getnom()
	{
		return $this->nom;
	}

	function setnom($nom)
	{
		$this->nom=$nom;
	}
	
	function getprenom()
	{
		return $this->prenom;
	}

	function setprenom($prenom)
	{
		$this->nom=$nom;
	}

	function getadresse()
	{
		return $this->prenom;
	}
		
	function setadresse($adresse)
	{
		$this->adresse=$adresse;
	}

	function getnum()
	{
		return $this->num;
	}

	function setnum($num)
	{
		$this->num=$num;
	}

	function getid()
	{
		return $this->id;
	}

	function setid($id)
	{
		$this->id=$id;
	}
	
	
}

?>