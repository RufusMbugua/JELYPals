<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_user_role")
 */
 class E_Jely_User_Role {  
  
   /**
	* @Id
	* @Column(name="userRole", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $userRole;
	
   /**
    * @Column(name="userRoleName", type="string",length=45, nullable=false)
	* */
	private $userRoleName;
	
	
   /**
	* @Column(name="createdAt", type="datetime", nullable=true)
	* */
	private $createdAt;
	
   /**
	* @Column(name="modifiedAt", type="datetime", nullable=true)
	* */
	private $updatedAt;
	
	public function getUserRole() {
			return $this -> userRole;
	}
	
	public function setUserRole($userRole) { $this -> userRole = $userRole;
	}
	
	public function getUserRoleName() {
			return $this -> userRoleName;
	}
	
	public function setUserRoleName($userRoleName) { $this -> userRoleName = $userRoleName;
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