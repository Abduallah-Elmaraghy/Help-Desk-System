<?php
class HomePageUser extends view
{

  public function output()
  {

$action = "";//= URLROOT . 'public/users/login';
require APPROOT.'/views/inc/navUser.php';
//		<div class="triangle-left"></div>
//<div class="triangle-right"></div>
$text = '
 
  <body>
		<?php   
		?>

<h2 style="margin-left: 100px;">Opening Cases</h2>

<div class="pending_cases">
    ';
    foreach( $this->model->GetUserCases() as $case){
        $case_number = $case->case_number;
        $severity = $case->severity;
        $priority = $case->priority;
        $due_date = $case->due_date;
        $status = $case->status;

        $text.= '
        <form method="post"action='.URLROOT.'public/pages/CaseView?id='. $case_number.'>
        <div class="card">
            <img src="../images/recent cases.png">
            <div class="card_body">
                <h4>Case number : '.$case_number.'</h4>
                <h4>Status : '.$status.'</h4>
                <input type="submit" value="Open">
            </div>
        </div></form>
    ';
    }
$text.='</div>

</body>
<form class="viewcases">
    <h2>Quick access</h2>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Cases..">

    <table class="quick_access" id="quick_access">
        <tr>
            <th>Case Number</th>
            <th>Sevirity</th>
            <th>Pirority</th>
            <th>Due date</th>
            <th></th>
        </tr>';

        foreach( $this->model->GetUserCases() as $case){
        $case_number = $case->case_number;
        $severity = $case->severity;
        $priority = $case->priority;
        $due_date = $case->due_date;
        $text.='

        <tr>
            <td>' .$case_number.'</td>
            <td>' .$severity.'</td>
            <td>' .$priority.'</td>
            <td>' .$due_date.'</td>

            <td><a href='.URLROOT.'public/pages/CaseView?id='. $case_number.'>Open</a></td>
        </tr>
        ';
        }
        $text.='
    </table>
</form> ';
echo $text;
}

}