<?PHP
class avis
{
	private $ref;
	private $idclient;
	private $idmedicament ; 
	
	function __construct($ref,$idclient,$idmedicament)
	{
		$this->ref=$ref;
		$this->idclient=$idclient;
		$this->idmedicament=$idmedicament;

	}

	function getref()
	{
		return $this->ref;
	}

	function setref($ref)
	{
		$this->ref=$ref;
	}
	
	function getidclient()
	{
		return $this->idclient;
	}

	function setidclient($idclient)
	{
		$this->idclient=$idclient;
	}

	function getidmedicament()
	{
		return $this->idmedicament;
	}

	function setidmedicament($idmedicament)
	{
		$this->idmedicament=$idmedicament;
	}
	
}

?>