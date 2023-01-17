<?php
/**
 * Class Modele
 * Template de classe modèle. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2019-01-21
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class Modele {

	
		private  $rp; // Objet de requête paramétrée PDO
	
	
    protected $_db;
	function __construct ()
	{
		$this->_db = MonSQL::getInstance();
	}
	
	function __destruct ()
	{
		
	}


	private function soumettre(string $req, array $params) 
    {
      
        $this->_db = $this->_db->prepare($req);    
        $this->rp->execute($params);
  
    }
	protected function lireUn(string $req, array $params=[]) 
    {
        $this->soumettre($req, $params);
        return $this->rp->fetch();
    }


	protected function creer(string $req, array $params=[]) 
    {
        $this->soumettre($req, $params);
        return $this->_db->lastInsertId();
    }

}




?>