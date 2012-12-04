<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_media_upload")
 */
 class E_Jely_media_upload {  
  
   /**
	* @Id
	* @Column(name="mediaUploadID", type="integer", length=20, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $mediaUploadID;
		/**
	* @Column(name="mediaName", type="string",length=45, nullable=false)
	* */
	private $mediaName;
		/**
	* @Column(name="mediaResourceURL", type="string",length=128, nullable=true)
	* */
	private $mediaResourceURL;
		/**
	* @Column(name="mediaType", type="string",length=45, nullable=true)
	* */
	private $mediaType;
		/**
	* @Column(name="mediaSize", type="integer",length=11, nullable=true)
	* */
	private $mediaSize;
		/**
	* @Column(name="mediaUploadedBy", type="string",length=45, nullable=true)
	* */
	private $mediaUploadedBy;
	/**
	* @Column(name="createdAt", type="datetime", nullable=true)
	* */
	private $createdAt;
	/**
	* @Column(name="modifiedAt", type="datetime", nullable=true)
	* */
	private $modifiedAt;
	
	public function getMediaUploadID() {
			return $this -> mediaUploadID;
	}
	
	public function setMediaUploadID($mediaUploadID) { $this -> mediaUploadID = $mediaUploadID;
	}
	public function getMediaName() {
			return $this -> mediaName;
	}
	
	public function setMediaName($mediaName) { $this -> mediaName = $mediaName;
	}
	public function getMediaResourceURL() {
			return $this -> mediaResourceURL;
	}
	
	public function setMediaResourceURL($mediaResourceURL) { $this -> mdiaResourceURL = $mediaResourceURL;
	}
	public function getMediaType() {
			return $this -> mediaType;
	}
	
	public function setMediaType($mediaType) { $this -> mediaType = $mediaType;
	}
	public function getMediaSize() {
			return $this -> mediaSize;
	}
	
	public function setMediaSize($mediaSize) { $this -> mediaSize = $mediaSize;
	}
	public function getMediaUploadedBy() {
			return $this -> mediaUploadedBy;
	}
	
	public function setMediaUploadedBy($mediaUploadedBy) { $this -> mediaUploadedBy = $mediaUploadedBy;
	}
	public function getCreatedAt() {
			return $this -> createdAt;
	}
	
	public function setCreatedAt($createdAt) { $this -> createdAt = $createdAt;
	}
	public function getModifiedAt() {
			return $this -> modifiedAt;
	}
	
	public function setModifiedAt($modifiedAt) { $this -> modifiedAt = $modifiedAt;
	}
	}