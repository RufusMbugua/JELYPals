<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_student")
 */
 class E_Jely_Student {
  
   /**
	* @Id
	* @Column(name="studentID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $studentID;
	
   /**
	* @ManyToOne(targetEntity="jely_person",inversedBy="personID")
    * @Column(name="studentPersonID", type="integer", nullable=false)
	* */
	private $studentPersonID;
	
   /**
	* @Column(name="studentClass", type="string",length=45, nullable=true)
	* */
	private $studentClass;
	
	
	public function getStudentID() {
			return $this -> studentID;
	}
	
	public function setStudentID($studentID) { $this -> studentID = $studentID;
	}
	
	public function getStudentPersonID() {
			return $this -> studentPersonID;
	}
	
	public function setStudentPersonID($studentPersonID) { $this -> studentPersonID = $studentPersonID;
	}
	public function getStudentClass() {
			return $this -> studentClass;
	}
	
	public function setStudentClass($studentClass) { $this -> studentClass = $studentClass;
	}
	
	}