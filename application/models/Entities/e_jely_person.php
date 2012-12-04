<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_person")
 */
 class E_Jely_Person {
  
   /**
	* @Id
	* @Column(name="personID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $personID;
	
   /**
	* @Column(name="personSurname", type="string",length=45, nullable=false)
	* */
	private $personSurname;
	
   /**
	* @Column(name="personOthername", type="string",length=45, nullable=true)
	* */
	private $personOthername;
	
   /**
	* @Column(name="personEmail", type="string",length=100, nullable=true)
	* */
	private $personEmail;
	
   /**
	* @Column(name="personGender", type="string",length=6, nullable=true)
	* */
	private $personGender;
	
   /**
	* @Column(name="createdAt", type="time", nullable=false)
	* */
	private $createdAt;
	
   /**
	* @Column(name="updatedAt", type="string",length=45, nullable=true)
	* */
	private $updatedAt;
	
	public function getPersonID() {
			return $this -> personID;
	}
	
	public function setPersonID($personID) { $this -> personID = $personID;
	}
	
	
	public function getPersonSurname() {
			return $this -> personSurname;
	}
	
	public function setPersonSurname($personSurname) { $this -> personSurname = $personSurname;
	}
	
	public function getPersonOthername() {
			return $this -> personOthername;
	}
	
	public function setPersonOthername($personOthername) { $this -> personOthername = $personOthername;
	}
	
	public function getPersonEmail() {
			return $this -> personEmail;
	}
	
	public function setPersonEmail($personEmail) { $this -> personEmail = $personEmail;
	}
	public function getPersonalGender() {
			return $this -> personalGender;
	}
	
	public function setPersonalGender($personalGender) { $this -> personalGender = $personalGender;
	}
	
	public function getCreatedAt() {
			return $this -> createdAt;
	}
	
	public function setCreatedAt($createdAt) { $this -> createdAt = $createdAt;
	}
	public function getUpdatedAt() {
			return $this -> updatedAt;
	}
	
	public function setUpdatedAt($updatedAt) { $this -> updatedAt = $updatedAt;
	}
	
	}