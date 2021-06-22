<?php
class WarningModel extends model
{
	protected $admin_id ;
	protected $warning_message;
	

	public function __construct()
	{
		parent::__construct();
		$this->admin_id = '';
		$this->warning_message = '';		
	}

	//$caseNumber
	public function getAdmin_id()
	{
		return $this->admin_id;
	}

	public function setAdmin_id($admin_id)
	{
		$this->admin_id = $admin_id;
	}
	public function getWarning_message()
	{
		return $this->warning_message;
	}

	public function setWarning_message($warning_message)
	{
		$this->warning_message = $warning_message;
	}

}