<?php
class NewCase extends view
{

  public function output()
  {
   
  require APPROOT.'/views/inc/navUser.php';
   
  $caseNumber ="IT".date("Ymdhms");
  $t=date("Y:m:d:h:m");

      
 $text = '
 <body>
		<?php include "../../includes/navUser.php";?>
<form method="post" class="view_card">
    <h1>New Case</h1>
    <div class="table_row">
        <div class="table_col">
            <label>Subject</label>
            <label>Case number</label>
            <label>Case Priority</label>
            <label>Severity</label>
        </div>
        <div class="table_col">
            <input type="text" name="subject" required>
            <label> '; $text.= $caseNumber; $text.= '</label>
            <select name="casePriority" required>
                <option value="">Choose one...</option>
                <option value="1">High</option>
                <option value="2">Extreme</option>
                <option value="3">Low</option>
            </select>
            <select name="severity" required>
                <option value="">Choose one...</option>
                <option value="1">High</option>
                <option value="2">Extreme</option>
                <option value="3">Low</option>
            </select>
        </div>
        <div class="table_col">
            <label>Category</label>
            <label>Parent case</label>
            <label>Due date</label>
        </div>
        <div class="table_col">
            <select name="type" required>
                <option value="">Choose one...</option>
                ';
                $counter = 1;
                foreach( $this->model->getTypeDropDown() as $type)
                {
                $typeName = $type->case_type;
                $text.= '<option value="'.$counter.'">'.$typeName.'</option>';
                $counter += 1;
                }
                $counter = 2;
                $text.= '
            </select>

            <select name="parent_case" required>
                <option value="">Choose one...</option>
                <option value="1">NON</option>
                ';

                foreach( $this->model->getParentDropDown() as $parent_case)
                {
                $parent_case = $parent_case->case_number;
                $text.= '<option value="'.$counter.'">'.$parent_case.'</option>';
                $counter += 1;
                }

                $text.= '
            </select>
            <input type="date" name="dueDate" required>
            <label type="hidden" name="creationDate">
        </div>
    </div>
    <div class="table_row">
        <div class="table_col">
            <label>
                Description
            </label>
        </div>
        <div class="table_col">
            <textarea type="text" name="description" required></textarea>
        </div>
    </div>
    <div class="table_row">
        <div class="addAttachment">

        </div>
    </div>
    <div class="submit">
        <input type="submit" name="submitNewCase">
    </div>
</form>
<div class="row" class="view_card">
    <div class="col"  >
				Upload:
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="myfile" />
            <button name"btn">Upload </button>
        </form>
    </div>
</div>
</body>

';
echo $text;


$dbh= new PDO("mysql:host=localhost;mydata","root","");
if(isset($_POST["btn"]))
{
	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$data=file_get_contents($_FILES['myfile']['tmp_name']);
	$stmt=$dbh->prepare("insert into case_attachments('',?,?,?,?)");
	$stmt->bindParem(1,$caseNumber);
	$stmt->bindParem(2,$data);
	$stmt->bindParem(3,$name);
	$stmt->bindParem(4,"");
	$stmt->bindParem(5,$type);
	$stmt->execute();



	
}


if(isset($_POST["submitNewCase"]))
{

$this->model->setCase_number($caseNumber);
$this->model->setCase_holder_id("1");//ToDo change 1 to current user id
$this->model->setType_id($_POST["type"]);
$this->model->setSubject($_POST["subject"]);
$this->model->setStatus("pending");
$this->model->setPriority($_POST["casePriority"]);
$this->model->setSeverity($_POST["severity"]);
$this->model->setDescription($_POST["description"]);
$this->model->setDue_date($_POST["dueDate"]);
$this->model->set_creationDate($t);
$this->model->set_parent_case("parent_case");

$this->model->addCase();

echo '<script type="text/javascript">
alert("Case Added Successfully!\nYour Case Number is: '.$caseNumber.'");
</script>';


}


}
}