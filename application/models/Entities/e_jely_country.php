<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_country")
 */
 class E_Jely_country {  
  
   /**
	* @Id
	* @Column(name="countryID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $countryID;
	/**
	* @Column(name="countryName", type="string",length=45, nullable=false)
	* */
	private $countryName;
	
	public function getCountryID() {
			return $this -> countryID;
	}
	
	public function setCountryID($countryID) { $this -> countryID = $countryID;
	}
	public function getCountryName() {
			return $this ->countryName;
	}
	
	public function setCountryName($countryName) { $this -> countryName = $countryName;
	}
 }