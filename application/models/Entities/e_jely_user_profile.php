<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_user_profile")
 */
 class E_Jely_user_profile {  
  
   /**
	* @Id
	* @Column(name="userProfileID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $userProfileID;
	
   /**
	* @ManyToOne(targetEntity="jely_student",inversedBy="studentID")
    * @Column(name="userProfileStudentID", type="integer",length=11, nullable=false)
	* */
	private $userProfileStudentID;
	
	/**
	* @ManyToOne(targetEntity="jely_pal_match",inversedBy="palMatchID")
    * @Column(name="userProfileStudentID", type="integer",length=11, nullable=false)
	* */
	private $userProfileMatchID;
	
	 
   /**
	* @Column(name="userProfileDOB", type="date", nullable=false)
	* */
	private $userProfileDOB;
	/**
	* @Column(name="userProfileCountry", type="string",length=45, nullable=true)
	* */
	private $userProfileCountry;
	/**
	* @Column(name="userProfileCity", type="integer",length=11, nullable=true)
	* */
	private $userProfileCity;
	/**
	* @Column(name="userProfileHobbies", type="integer",length=1, nullable=true)
	* */
	private $userProfileHobbies;
	/**
	* @Column(name="userProfileSchool", type="string",length=45, nullable=true)
	* */
	private $userProfileSchool;
	/**
	* @Column(name="userProfilePricture", type="string",length=128, nullable=true)
	* */
	private $userProfilePicture;
	/**
	* @Column(name="userProfileFavorites", type="integer",length=1, nullable=true)
	* */
	private $userProfileFavorites;
	/**
	* @Column(name="createdAt", type="time", nullable=true)
	* */
	private $createdAt;
	/**
	* @Column(name="updatedAt", type="string",length=45, nullable=true)
	* */
	private $updatedAt;
	
	public function getUserProfileID() {
			return $this -> userProfileID;
	}
	
	public function setUserProfileID($userProfileID) { $this -> userProfileID = $userProfileID;
	}
	public function getUserProfileStudentID() {
			return $this -> userProfileStudentID;
	}
	
	public function setUserProfileStudentID($userProfileStudentID) { $this -> userProfileStudentID = $userProfileStudentID;
	}
	
	public function getUserProfileMatchID() {
			return $this -> userProfileMatchID;
	}
	
	public function setUserProfileMatchID($userProfileMatchID) { $this -> userProfileMatchID = $userProfileMatchID;
	}
	
	public function getUserProfileDOB() {
			return $this -> userProfileDOB;
	}
	
	public function setUserProfileDOB($userProfileDOB) { $this -> userProfileDOB = $userProfileDOB;
	}
	public function getUserProfileCountry() {
			return $this -> userProfileCountry;
	}
	
	public function setUserProfileCountry($userProfileCountry) { $this -> userProfileCountry = $userProfileCountry;
	}
	public function getUserProfileCity() {
			return $this -> userProfileCity;
	}
	
	public function setUserProfileCity($userProfileCity) { $this -> userProfileCity = $userProfileCity;
	}
	public function getUserProfileHobbies() {
			return $this -> userProfileHobbies;
	}
	
	public function setUserProfileHobbies($userProfileHobbies) { $this -> userProfileHobbies = $userProfileHobbies;
	}
	public function getUserProfileSchool() {
			return $this -> userProfileSchool;
	}
	
	public function setUserProfileSchool($userProfileSchool) { $this -> userProfileSchool = $userProfileSchool;
	}
	public function getUserProfilePicture() {
			return $this -> userProfilePicture;
	}
	
	public function setUserProfilePicture($userProfilePicture) { $this -> userProfilePicture = $userProfilePicture;
	}
	public function getUserProfileFavorites() {
			return $this -> userProfileFavorites;
	}
	
	public function setUserProfileFavorites($userProfileFavorites) { $this -> userProfileFavorites = $userProfileFavorites;
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
	