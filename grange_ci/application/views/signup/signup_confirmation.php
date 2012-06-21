<div class='main_content'>
<?php
	echo '<div id="confirm_msg">'.$msg.'</div>';
	
	echo '<div id="confirm_details">';
		echo '<span class="confirm_label">username: </span>
					<span class="confirm_data">'.$user_id.'</span>'.br();
		echo '<span class="confirm_label">batch: </span>
					<span class="confirm_data">'.$batch_name.'</span>'.br();
		echo '<span class="confirm_label">email: </span>
					<span class="confirm_data">'.$email.'</span>'.br();
	echo '</div>'; //end #confirm_details
?>
</div>