<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_class")
 */
 class E_Jely_Class {  
  
   /**
	* @Id
	* @Column(name="classID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $classID;
	
   /**
    * @Column(name="className", type="string",length=45, nullable=false)
	* */
	private $className;
	
   /**
    * @ManyToOne(targetEntity="jely_teacher",inversedBy="teacherID")
    * @Column(name="classTeacher", type="string",length=45, nullable=true)
	* */
	private $classTeacher;
	
   /**
    * @ManyToOne(targetEntity="jely_admin",inversedBy="jelyAdminPersonID")
    * @Column(name="createdBy", type="integer",length=11, nullable=false)
	* */
	private $createdBy;
	
	
   /**
	* @Column(name="createdAt", type="datetime", nullable=true)
	* */
	private $createdAt;
	
   /**
	* @Column(name="modifiedAt", type="datetime", nullable=true)
	* */
	private $updatedAt;
	
	public function getClassID() {
			return $this -> classID;
	}
	
	public function setClassID($classID) { $this -> classID= $classID;
	}
	
	public function getClassName() {
			return $this -> className;
	}
	
	public function setClassName($className) { $this -> className= $className;
	}
	
	public function getClassTeacher() {
			return $this -> classTeacher;
	}
	
	public function setClassTeacher($classTeacher) { $this -> classTeacher= $classTeacher;
	}
	
	public function getCreatedBy() {
			return $this -> createdBy;
	}
	
	public function setCreatedBy($createdBy) { $this -> createdBy = $createdBy;
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