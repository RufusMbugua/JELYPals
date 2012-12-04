<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_note_type")
 */
 class E_Jely_note_type {  
  
   /**
	* @Id
	* @Column(name="noteTypeID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $noteTypeID;
	/**
	* @Column(name="noteType", type="string",length=45, nullable=false)
	* */
	private $noteType;
	/**
	* @Column(name="noteTypeColor", type="string",length=45, nullable=true)
	* */
	private $noteTypeColor;
	
	public function getNoteTypeID() {
			return $this -> noteTypeID;
	}
	
	public function setNoteTypeID($noteTypeID) { $this -> noteTypeID = $noteTypeID;
	}
	public function getNoteType() {
			return $this -> noteType;
	}
	
	public function setNoteType($noteType) { $this -> noteType = $noteType;
	}
	public function getNoteTypeColor() {
			return $this -> noteTypeColor;
	}
	
	public function setNoteTypeColor($noteTypeColor) { $this -> noteTypeColor = $noteTypeColor;
	}
 }