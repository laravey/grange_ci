<div class='main_content'>
	<div id='notes'>
  	<span class='red'>*</span> indicates required fields.
  </div><!-- end #notes -->
<?php
	$attr = array(
			'id' => 'signup_form',
			'name' => 'signup_form'
		);
	echo form_open('display/pending_requests', $attr);
		$attr = array(
				'id' => 'label_for_username',
				'name' => 'label_for_username',
				'class' => 'signup_label'
			);
		echo form_label('<span class="red">*</span> username: ', 'username', $attr);
		
		$attr = array(
				'id' => 'user_id',
				'name' => 'user_id',
				'maxlength' => '20',
				'size' => '20'
			);
		echo form_input($attr);
		
		echo br();
		
		$attr = array(
				'id' => 'label_for_password',
				'name' => 'label_for_password',
				'class' => 'signup_label'
			);
		echo form_label('<span class="red">*</span> password: ', 'password', $attr);
		
		$attr = array(
				'id' => 'password',
				'name' => 'password',
				'maxlength' => '20',
				'size' => '20'
			);
		echo form_input($attr);
		
		echo br();
		
		$attr = array(
				'id' => 'label_for_first_name',
				'name' => 'label_for_first_name',
				'class' => 'signup_label'
			);
		echo form_label('<span class="red">*</span> first name: ', 'first_name', $attr);
		
		$attr = array(
				'id' => 'first_name',
				'name' => 'first_name',
				'maxlength' => '50',
				'size' => '20'
			);
		echo form_input($attr);
		
		echo br();
		
		$attr = array(
				'id' => 'label_for_middle_name',
				'name' => 'label_for_middle_name',
				'class' => 'signup_label'
			);
		echo form_label('middle name: ', 'middle_name', $attr);
		
		$attr = array(
				'id' => 'middle_name',
				'name' => 'middle_name',
				'maxlength' => '20',
				'size' => '20'
			);
		echo form_input($attr);
		
		echo br();
		
		$attr = array(
				'id' => 'label_for_last_name',
				'name' => 'label_for_last_name',
				'class' => 'signup_label'
			);
		echo form_label('<span class="red">*</span> last name: ', 'last_name', $attr);
		
		$attr = array(
				'id' => 'last_name',
				'name' => 'last_name',
				'maxlength' => '20',
				'size' => '20'
			);
		echo form_input($attr);
		
		echo br();
		
		$attr = array(
				'id' => 'label_for_suffix',
				'name' => 'label_for_suffix',
				'class' => 'signup_label'
			);
		echo form_label('suffix: ', 'suffix', $attr);
		
		$attr = array(
				'id' => 'suffix',
				'name' => 'suffix',
				'maxlength' => '10',
				'size' => '20'
			);
		echo form_input($attr);
		
		echo br();
		
		echo '<span class="signup_notes" id="suffix_notes" name="suffix_notes">';
		echo '(e.g. jr, jra, III, etc...)</span>';
		
		echo br();
		
		$attr = array(
				'id' => 'label_for_title',
				'name' => 'label_for_title',
				'class' => 'signup_label'
			);
		echo form_label('title: ', 'title', $attr);
		
		$attr = array(
				'id' => 'title',
				'name' => 'title',
				'maxlength' => '10',
				'size' => '20'
			);
		echo form_input($attr);
		
		echo br();
		
		echo '<span class="signup_notes" id="title_notes" name="title_notes">';
		echo '(e.g. Dr., Atty., Eng., etc...)</span>';
		
		echo br();
		
		$attr = array(
				'id' => 'label_for_batch_name',
				'name' => 'label_for_batch_name',
				'class' => 'signup_label'
			);
		echo form_label('<span class="red">*</span> batch name: ', 'batch_name', $attr);
		
		$attr = array(
				'id' => 'batch_name',
				'name' => 'batch_name',
				'maxlength' => '20',
				'size' => '20'
			);
		echo form_input($attr);
		
		echo br();
		
		$attr = array(
				'id' => 'label_for_email',
				'name' => 'label_for_email',
				'class' => 'signup_label'
			);
		echo form_label('<span class="red">*</span> email address: ', 'email', $attr);
		
		$attr = array(
				'id' => 'email',
				'name' => 'email',
				'maxlength' => '100',
				'size' => '20'
			);
		echo form_input($attr);
		
		echo br();
				
		$attr = array(
				'id' => 'register_button',
				'name' => 'register_button',
				'value' => 'Register'
			);
		echo form_submit($attr);
		
	echo form_close();
?>
</div><!-- end .main_content -->