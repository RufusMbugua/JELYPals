<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_notes")
 */
 class E_Jely_notes {  
  
   /**
	* @Id
	* @Column(name="noteID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $noteID;
	/**
	* @Column(name="notePostedBy", type="string",length=45, nullable=false)
	* */
	private $notePostedBy;
	/**
	* @Column(name="noteContent", type="text", nullable=true)
	* */
	private $noteContent;
	/**
	* @Column(name="noteType", type="string",length=45, nullable=true)
	* */
	private $noteType;
	/**
	* @Column(name="noteIsRemoved", type="integer",length=4, nullable=true)
	* */
	private $noteIsRemoved;
	/**
	* @Column(name="noteIsRead", type="integer",length=4, nullable=true)
	* */
	private $noteIsRead;
	/**
	* @Column(name="postedAt", type="time", nullable=true)
	* */
	private $postedAt;
	
	public function getNoteID() {
			return $this -> noteID;
	}
	
	public function setNoteID($noteID) { $this -> noteID = $noteID;
	}
	public function getNotePostedBy() {
			return $this -> notePostedBy;
	}
	
	public function setNotePostedBy($notePostedBy) { $this -> notePostedBy = $notePostedBy;
	}
	public function getNoteContent() {
			return $this -> noteContent;
	}
	
	public function setNoteContent($noteContent) { $this -> noteContent = $noteContent;
	}
	public function getNoteType() {
			return $this -> noteType;
	}
	
	public function setNoteType($noteType) { $this -> noteType = $noteType;
	}
	public function getNoteIsRemoved() {
			return $this -> noteIsRemoved;
	}
	
	public function setNoteIsRemoved($noteIsRemoved) { $this -> noteIsRemoved = $noteIsRemoved;
	}
	public function getNoteIsRead() {
			return $this -> noteIsRead;
	}
	
	public function setNoteIsRead($noteIsRead) { $this -> noteIsRead = $noteIsRead;
	}
	public function getPostedAt() {
			return $this -> postedAt;
	}
	
	public function setPostedAt($postedAt) { $this -> postedAt = $postedAt;
	}
	}