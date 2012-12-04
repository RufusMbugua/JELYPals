<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_admin")
 */
 class E_Jely_Admin {  
  
   /**
	* @Id
	* @Column(name="jelyAdminID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $jelyAdminID;
	
   /**
	* @ManyToOne(targetEntity="jely_person",inversedBy="personID")
    * @Column(name="jelyAdminPersonID", type="integer",length=11, nullable=false)
	* */
	private $jelyAdminPersonID;
	
   /**
    * @Column(name="jelyAdminAccountStatus", type="integer",length=4, nullable=true)
	* */
	private $jelyAdminAccountStatus;
	
   /**
	* @Column(name="createdAt", type="datetime", nullable=true)
	* */
	private $createdAt;
	
   /**
	* @Column(name="modifiedAt", type="datetime", nullable=true)
	* */
	private $updatedAt;
	
	public function getJelyAdminID() {
			return $this -> jelyAdminID;
	}
	
	public function setJelyAdminID($jelyAdminID) { $this -> jelyAdminID = $jelyAdminID;
	}
	
	public function getJelyAdminPersonID() {
			return $this -> jelyAdminPersonID;
	}
	
	public function setJelyAdminPersonID($jelyAdminPersonID) { $this -> jelyAdminPersonID = $jelyAdminPersonID;
	}
	
	public function getJelyAdminAccountStatus() {
			return $this -> jelyAdminAccountStatus;
	}
	
	public function setJelyAdminAccountStatus($jelyAdminAccountStatus) { $this -> jelyAdminAccountStatus = $jelyAdminAccountStatus;
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