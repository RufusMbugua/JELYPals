<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="jely_messages")
 */
 class E_Jely_messages {  
  
   /**
	* @Id
	* @Column(name="messagesID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $messagesID;
	/**
	* @Column(name="messageSentFrom", type="string",length=45, nullable=false)
	* */
	private $messageSentFrom;
	/**
	* @Column(name="messageSubject", type="string",length=255, nullable=true)
	* */
	private $messageSubject;
	/**
	* @Column(name="messageBody", type="stext", nullable=true)
	* */
	private $messageBody;
	/**
	* @Column(name="messageIsRead", type="integer",length=4, nullable=true)
	* */
	private $messageIsRead;
	/**
	* @Column(name="messageISDeleted", type="integer",length=4, nullable=true)
	* */
	private $messageIsDeleted;
	/**
	* @Column(name="sentAt", type="time", nullable=true)
	* */
	private $sentAt;
	
	public function getMessageID() {
			return $this -> messageID;
	}
	
	public function setMessageID($messageID) { $this -> messageID = $messageID;
	}
	public function getMessageSentFrom() {
			return $this -> messageSentFrom;
	}
	
	public function setMessageSentFrom($messageSentFrom) { $this -> messageSentFrom = $messageSentFrom;
	}
	public function getMessageSubject() {
			return $this -> messageSubject;
	}
	
	public function setMessageSubject($messageSubject) { $this -> messageSubject = $messageSubject;
	}
	public function getMessageBody() {
			return $this -> messageBody;
	}
	
	public function setMessageBody($messageBody) { $this -> messsageBody = $messageBody;
	}
	public function getMessageIsRead() {
			return $this -> messageIsRead;
	}
	
	public function setMessageIsRead($messageIsRead) { $this -> messageIsRead = $messageIsRead;
	}
	public function getMessageIsDeleted() {
			return $this -> messageIsDeleted;
	}
	
	public function setMessageIsDeleted($messageIsDeleted) { $this -> messageIsDeleted = $messageIsDeleted;
	}
	public function getSentAt() {
			return $this -> sentAt;
	}
	
	public function setSentAt($sentAt) { $this -> sentAt = $sentAt;
	}
	}