<?php
require_once 'CaseModel.php';
class NewCaseModel extends CaseModel
{
    public  $title = 'New Case';

    public function NewCase()
    {
        $this->dbh->query("INSERT INTO `company_cases`(`case_number`, `case_holder_id`
        , `type_id`, `subject`, `status`, `priority`, `severity`, 
         `description`, `due_date`) VALUES
         (:number, :holder, :type,:subject,:status,:priority,:severity,:description,:due_date)");

        $this->dbh->bind(':number', $this->caseNumber);
        $this->dbh->bind(':holder', $this->caseHolder_id);
        $this->dbh->bind(':type', $this->caseType_id);
        $this->dbh->bind(':subject', $this->subject);
         $this->dbh->bind(':status', $this->status);
        $this->dbh->bind(':priority', $this->priority);
        $this->dbh->bind(':severity', $this->severity);
        $this->dbh->bind(':description', $this->description);
        $this->dbh->bind(':due_date', $this->due_date);

        return $this->dbh->execute();
    }
 
}