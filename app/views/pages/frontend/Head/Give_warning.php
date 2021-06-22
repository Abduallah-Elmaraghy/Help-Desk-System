<?php
class GiveWarningHead extends view
{
	public function output()
	{
		$action = "";//= URLROOT . 'public/users/login';
		require APPROOT.'/views/inc/navHead.php';
		$admin=$this->model->GetAdmin();
//		action="HomePage" enctype="multipart/form-data"
		$text = <<<EOT
  <body>
		<form method="post" class="view_card" >
			<h1>Give Warning</h1>
			<div class="table_row">
				<div class="table_col">
					<label>intended person</label>
				</div>
				<div class="table_col">
					<label>$admin->username</label>
				</div>
			</div>
			<div class="table_row" style="padding-top:0px;">
				<div class="table_col">
					<label>
						Message
					</label>
				</div>
				<div class="table_col">
					<textarea name="description" type="text" required></textarea>
				</div>
			</div>
			<div class="submit">
				<input type="submit" name="submit" value="send" >
			</div>
		</form> 
	</body>

EOT;
		echo $text;

	}
//		<div class="addAttachment">
//				<input type="file" id="file" accept="image/*">
//				<label for="file" class="attachment_label">
//					Add File
//				</label>
//			</div>
}
