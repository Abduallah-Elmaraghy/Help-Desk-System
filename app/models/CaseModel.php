<?php
class CaseModel extends model
{
	protected $caseNumber;
	protected $caseHolder;
	protected $caseHolder_id;
	protected $caseType;
	protected $caseType_id;
	protected $status;
	protected $priority;
	protected $severity;
	protected $description;
	protected $due_date;
	protected $creation_date;

	public function __construct()
	{
		parent::__construct();
		$this->CaseNumber = '';
		$this->caseHolder = '';
		$this->caseType = '';
		$this->status = '';
		$this->pirority = '';
		$this->severity = '';
		$this->description = '';
		$this->due_date = '';
		$this->creation_date = '';
	}

	//$caseNumber
	public function getCaseNumber()
	{
		return $this->caseNumber;
	}

	public function setCaseNumber($caseNumber)
	{
		$this->caseNumber = $caseNumber;
	}

	//$caseHolder
//	public function getCaseHolder()
//	{
//		return $this->caseHolder;
//	}
//
//	public function setCaseHolder($caseHolder)
//	{
//		$this->caseHolder = $caseHolder;
//	}

	//$caseHolder_id
	public function getCaseHolderId()
	{
		return $this->caseHolder_id;
	}

	public function setCaseHolderId($caseHolder_id)
	{
		$this->caseHolder_id = $caseHolder_id;
	}

	//$CaseType
//	public function getCaseType()
//	{
//		return $this->caseType;
//	}
//
//	public function setCaseType($caseType)
//	{
//		$this->caseType = $caseType;
//	}

	//$CaseType_id
	public function getCaseType()
	{
		return $this->CaseType_id;
	}

	public function setCaseType($CaseType_id)
	{
		$this->CaseType_id = $CaseType_id;
	}

	//$status
	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}

	//$priority
	public function getPriority()
	{
		return $this->$priority;
	}

	public function setPriority($priority)
	{
		$this->priority = $priority;
	}

	//$severity
	public function getSeverity()
	{
		return $this->severity;
	}
	public function setSeverity($severity)
	{
		$this->severity = $severity;
	}

	//$description
	public function getDescription()
	{
		return $this->description;
	}
	public function setDescription($description)
	{
		$this->description = $description;
	}

	//$due_date
	public function getDue_date()
	{
		return $this->due_date;
	}
	public function setDue_date($due_date)
	{
		$this->due_date = $due_date;
	}
	
	//$creation_date
	public function getCreation_date()
	{
		return $this->creation_date;
	}
	public function setCreation_date($creation_date)
	{
		$this->creation_date = $creation_date;
	}

}