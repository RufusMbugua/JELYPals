<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_pal_match")
 */
 class E_Jely_Pal_Match {
  
   /**
	* @Id
	* @Column(name="palMatchID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $palMatchID;
	
   /**
	* @Column(name="createdAt", type="datetime", nullable=true)
	* */
	private $createdAt;
	
   /**
	* @ManyToOne(targetEntity="jely_admin",inversedBy="jelyAdmin")
    * @Column(name="createdBy", type="string",length=45, nullable=false)
	* */
	private $createdBy;
	
   /**
	* @Column(name="modifiedAt", type="datetime", nullable=true)
	* */
	private $modifiedAt;
	
	public function getPalMatchID() {
			return $this -> palMatchID;
	}
	
	public function setPalMatchID($palMatchID) { $this -> palMatchID = $palMatchID;
	}
	
	public function getCreatedAt() {
			return $this -> createdAt;
	}
	
	public function setCreatedAt($createdAt) { $this -> createdAt = $createdAt;
	}
	public function getCreatedBy() {
			return $this -> createdBy;
	}
	
	public function setCreatedBy($createdBy) { $this -> createdBy = $createdBy;
	}
	public function getModifiedAt() {
			return $this -> modifiedAt;
	}
	
	public function setModifiedAt($modifiedAt) { $this -> modifiedAt = $modifiedAt;
	}
	}