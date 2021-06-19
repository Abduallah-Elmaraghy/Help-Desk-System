<?php
class KnowledgeBase extends view
{

  public function output()
  {
   
  require APPROOT.'/views/inc/navUser.php';
   
      $text ='
 
<body>
		<?php include "../../includes/navUser.php";?>
<h2 style="margin-left: 100px;">Filters</h2>
<form method="post" action='.URLROOT.'public/pages/ViewStatement>
    <div class="Filters">
        <select class="filter">
            <option>Type of problem</option>
            <option>Desktop Application</option>
            <option>Network</option>
            <option>Other</option>
        </select>
        <select class="filter">
            <option>Case Status</option>
            <option>Pending</option>
            <option>Opened</option>
            <option>Resolved</option>
            <option>Closed</option>
        </select>
        <input type="date" class="filter" value="date modified">
    </div>
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card_body">
                    <h4>Type of problem :</h4>
                    <h4>Subject :</h4>
                    <h4>Date & Time :</h4>
                    <input type="submit" value="View">
                </div>
            </div>
        </div>
    </div>
</form>
</body>
';
echo $text;

}
}