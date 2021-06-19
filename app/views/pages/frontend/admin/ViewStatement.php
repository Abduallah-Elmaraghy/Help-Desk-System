
<?php
class ViewStatement extends view
{

	public function output()
	{
		require APPROOT.'/views/inc/navAdmin.php';

		$statement=$this->model->StatementView();
		$type=$this->model->GetType($statement->Type_id);
		$text = '

<body>
		<?php
		include "../../includes/navUser.php";
?>
		<form method="post" class="view_card">
			<h1>Statement Details</h1>
			<div class="table_row">
				<div class="table_col">
					<label>Subject</label>
					<label>Type of problem</label>
					<label>Problem definition</label>
					<label>Description</label>	
				</div>
				<div class="table_col">
					<label>'.$statement->subject.'</label>
					<label>'.$type->case_type.'</label>
					<label>'.$statement->problem_definition.'</label>
					<label>'.$statement->description.'</label>
				</div>
				<div class="files_info_view">
					<div class="table_row">
						<label>File</label>
						<label>Size</label>
						<label>Type</label>
					</div>
					<div class="table_row">
						<label>img</label>
						<label>30KB</label>
						<label>PMG</label>
					</div>
					<div class="table_row">
						<label>Steps</label>
						<label>20MB</label>
						<label>docx</label>
					</div>
				</div>
			</div>
		</form> 
	</body>
';
		echo $text;

	}
}
