<?php 
class User_Case 
{

	private $casenumber;
	private $recipient_id;
	private $owner_id;
	private $type_id;
	private $subject;
	private $status; 
	private $priority; 
	private $severity;	
	private $description;	
	private $due_date;	
	private $creation_date;	
	private $opening_date;	
	private $closing_date;	
	private $parent_case_id;

	public function __construct($casenumber, $recipient_id, $owner_id, $type_id, $subject, $status, $priority, $severity, $description, $due_date, $creation_date, $opening_date, $closing_date, $parent_case_id)
	{
															
		$this->casenumber = $casenumber;
		$this->recipient_id = $recipient_id;
		$this->owner_id = $owner_id;
		$this->type_id = $type_id;
		$this->subject = $subject;
		$this->status = $status; 
		$this->priority = $priority;
		$this->severity = $severity;	
		$this->description = $description;	
		$this->due_date = $due_date;	
		$this->creation_date = $creation_date;	
		$this->opening_date = $opening_date;	
		$this->closing_date = $closing_date;	
		$this->parent_case_id = $parent_case_id;
	}
}
?>