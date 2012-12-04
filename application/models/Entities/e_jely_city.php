<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_city")
 */
 class E_Jely_city {  
  
   /**
	* @Id
	* @Column(name="cityID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $cityID;
	/**
	* @Column(name="cityName", type="string",length=45, nullable=false)
	* */
	private $cityName;
	/**
	* @Column(name="cityCountry", type="string",length=45, nullable=false)
	* */
	private $cityCountry;
	
	public function getCityID() {
			return $this -> cityID;
	}
	
	public function setCityID($cityID) { $this -> cityID = $cityID;
	}
	public function getCityName() {
			return $this ->cityName;
	}
	
	public function setCityName($cityName) { $this -> cityName = $cityName;
	}
	public function getCityCountry() {
			return $this ->cityCountry;
	}
	
	public function setCityCountry($cityCountry) { $this -> cityCountry = $cityCountry;
	}
 }