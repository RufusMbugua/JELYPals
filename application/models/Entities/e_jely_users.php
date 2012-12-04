<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_users")
 */
 class E_Jely_Users {  
  
   /**
	* @Id
	* @Column(name="jelyUserID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $jelyUserID;
	
   /**
	* @Column(name="jelyUserSurname", type="string",length=45, nullable=true)
	* */
	private $jelyUsername;
	
   /**
	* @Column(name="jelyUserSecret", type="string",length=255, nullable=false)
	* */
	private $jelyUserSecret;
	
	
   /**
	* @Column(name="jelyUserSecretSalt", type="string",length=45, nullable=true)
	* */
	private $jelyUserSecretSalt;
	
   /**
	* @Column(name="jelyUserAccountStatus", type="integer",length=4, nullable=true)
	* */
	private $jelyUserAccountStatus;
	
   /**
	* @Column(name="jelyUserIsOnline", type="integer",length=4, nullable=true)
	* */
	private $jelyUserIsOnline;
	
   /**
	* @Column(name="jelyUserVerificationCode", type="string",length=128, nullable=true)
	* */
	private $jelyUserVerificationCode;
	
   /**
	* @ManyToOne(targetEntity="jely_user_role",inversedBy="userRoleName")
    * @Column(name="jelyUserRole", type="string",length=45, nullable=false)
	* */
	private $jelyUserRole;
	
   /**
	* @ManyToOne(targetEntity="jely_person",inversedBy="personID")
    * @Column(name="jelyUserPersonID", type="integer",length=11, nullable=false)
	* */
	private $jelyUserPersonID;
	
   /**
	* @Column(name="createdAt", type="time", nullable=true)
	* */
	private $createdAt;
	
   /**
	* @Column(name="updatedAt", type="string",length=45, nullable=true)
	* */
	private $updatedAt;
	
	public function getJelyUserID() {
			return $this -> jelyUserID;
	}
	
	public function setJelyUserID($jelyUserID) { $this -> jelyUserID = $jelyUserID;
	}
	
	
	public function getJelyUsername() {
			return $this -> jelyUsername;
	}
	
	public function setJelyUsername($jelyUsername) { $this -> jelyUsername = $jelyUsername;
	}
	public function getJelyUserSecret() {
			return $this -> jelyUserSecret;
	}
	
	public function setJelyUserSecret($jelyUserSecret) { $this -> jelyUserSecret = $jelyUserSecret;
	}
	
	public function getJelyUserSecretSalt() {
			return $this -> jelyUserSecretSalt;
	}
	
	public function setJelyUserSecretSalt($jelyUserSecretSalt) { $this -> jelyUserSecretSalt = $jelyUserSecretSalt;
	}
	public function getJelyUserAccountStatus() {
			return $this -> jelyUserAccountStatus;
	}
	
	public function setJelyUserAccountStatus($jelyUserAccountStatus) { $this -> jelyUserAccountStatus = $jelyUserAccountStatus;
	}
	public function getJelyUserIsOnline() {
			return $this -> jelyUserIsOnline;
	}
	
	public function setJelyUserIsOnline($jelyUserIsOnline) { $this -> jelyUserIsOnline = $jelyUserIsOnline;
	}
	public function getJelyUserVerificationCode() {
			return $this -> jelyUserVerificationCode;
	}
	
	public function setJelyUserVerificationCode($jelyUserVerificationCode) { $this -> jelyUserVerificationCode = $jelyUserVerificationCode;
	}
	public function getJelyUserRole() {
			return $this -> jelyUserRole;
	}
	
	public function setJelyUserRole($jelyUserRole) { $this -> jelyUserRole = $jelyUserRole;
	}
	
	public function getJelyUserPersonID() {
			return $this -> jelyUserPersonID;
	}
	
	public function setJelyUserPersonID($jelyUserPersonID) { $this -> jelyUserPersonID = $jelyUserPersonID;
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
	
	
	
	
	
	
	
	
	