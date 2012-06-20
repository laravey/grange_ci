<!--
	css:
  javascript:
  controller:
  model:
-->

<div id="sidebar">
  <div id="login_form">
  <?php
		//echo 'waka: '.$this->session->userdata('session_id');
		
		if(array_key_exists('user_id', $this->session->all_userdata())){
			echo '<div class="sidebar_menu">';
				echo 'Welcome '.ucwords($this->session->userdata('user_id')).'!'.br();
				
				if(array_key_exists('user_admin_id', $this->session->all_userdata())){
					echo anchor('display/pending_requests', 'Pending Requests', array(
									'class' => '',
									'id' => '',
									'name' => ''
								));
					echo br();
				}
				
				echo anchor('#', 'Profile', array(
							'class' => '',
							'id' => '',
							'name' => ''
						)).br();
							
				echo anchor('#', 'Settings', array(
							'class' => '',
							'id' => '',
							'name' => ''
						)).br();
							
				echo anchor('login/logout', 'Logout', array(
							'class' => '',
							'id' => '',
								'name' => ''
						 ));
							
			echo '</div>';//end .side_menu
			
		}else{
			$attr = array(
					'id' => 'grange_login',
					'name' => 'grange_login'
				);
			echo form_open('login/validate', $attr);
				$attr = array(
						'id' => 'label_for_username',
						'name' => 'label_for_username'
					);
				echo form_label('username:', 'username', $attr);
				
				$attr = array(
						'id' => 'user_id',
						'name' => 'user_id',
						'maxlength' => '20',
						'class' => 'text_field'
					);
				echo form_input($attr);
				
				$attr = array(
						'id' => 'label_for_password',
						'name' => 'label_for_password'
					);
				echo form_label('password:', 'password', $attr);
				
				$attr = array(
						'id' => 'password',
						'name' => 'password',
						'maxlength' => '20',
						'class' => 'text_field'
					);
				echo form_password($attr);
				
				$attr = array(
						'id' => 'signup_button',
						'name' => 'signup_button',
						'class' => 'button_link',
						'content' => 'Sign Up'
					);
				echo form_button($attr);
				
				echo '<span id="login_separator">|</span>';
				
				$attr = array(
						'id' => 'login_button',
						'name' => 'login_button',
						'class' => 'button_link',
						'value' => 'Login'
					);
				echo form_submit($attr);
			echo form_close();
			
			echo '<div id="login_flash_message">';
				echo $this->session->flashdata('login_message');
			echo '</div>';//end #login_flash_message
			echo '<div class="blank_box"></div>';
		}
	?>
  </div><!-- end #login_form -->