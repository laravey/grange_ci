<div id="main_dropdown">
 	<ul id="topnav">
   	<!-- (1) -->
     <li><a href="#" class="top_left_curve bottom_left_curve">Our Story</a>
     	<ul>
       	<li><a href="<?php echo base_url().'index.php/display/history'; ?>">History</a></li>
        <li><a href="<?php echo base_url().'index.php/display/stories'; ?>"
         			class="bottom_right_curve bottom_left_curve">
              Grange Stories</a>
        </li>
      </ul>
     </li>
     <!-- (2) -->
     <li>
    	<a href="#">Our Works</a>
       <ul>
       	<li><a href="<?php echo base_url().'index.php/display/scholarship'; ?>">Scholarship</a></li>
         <li><a href="#" class="bottom_right_curve bottom_left_curve">Activities</a>
          <ul>
           	<li><a href="<?php echo base_url().'index.php/display/labulabo'; ?>"
         				class="top_right_curve">
            	  LabuLabo</a>
            </li>
            <li><a href="<?php echo base_url().'index.php/display/civic_activities'; ?>">Civic Activities</a></li>
            <li><a href="<?php echo base_url().'index.php/display/academy'; ?>">Grange Academy</a></li>
            <li><a href="<?php echo base_url().'index.php/display/formation_cause'; ?>"
         				class="bottom_right_curve bottom_left_curve">
              	Grange Formation Cause</a>
            </li>
          </ul>
            
         </li>
       </ul>
          
     </li>
     <!-- (3) -->
     <li><a href="#">Gallery</a>
     	<ul>
      	<li><a href="<?php echo base_url().'index.php/display/gallery_pictures'; ?>">Pictures</a></li>
      	<li><a href="<?php echo base_url().'index.php/display/gallery_videos'; ?>"
         			class="bottom_right_curve bottom_left_curve">
              Videos</a>
        </li>
      </ul>
     </li>
     <!-- (4) -->
     <li><a href="#">Archives</a>
    	<ul>
       	<li><a href="<?php echo base_url().'index.php/display/news'; ?>">News</a></li>
       	<li><a href="<?php echo base_url().'index.php/display/public_activities'; ?>"
         			<?php if(!array_key_exists('user_id', $this->session->all_userdata())){
											echo 'class="bottom_right_curve bottom_left_curve"'; } ?>>
              Activities</a>
        </li>
        <?php if(array_key_exists('user_id', $this->session->all_userdata())){?>
        <li><a href="<?php echo base_url().'index.php/display/announcements'; ?>">Announcements</a></li>
        <li><a href="<?php echo base_url().'index.php/display/our_activities'; ?>"
         			class="bottom_right_curve bottom_left_curve">
              Grange Activities</a>
        </li>
        <?php }?>
       </ul>
       
     </li>
     <!-- (5) -->
     <li><a href="#">Our Family</a>
     	 <ul>
       	 <li><a href="<?php echo base_url().'index.php/display/residents'; ?>">Resident Members</a></li>
         <li><a href="<?php echo base_url().'index.php/display/jr_alumni'; ?>">Junior Alumni</a></li>
         <li><a href="<?php echo base_url().'index.php/display/sr_alumni'; ?>"
         			class="bottom_right_curve bottom_left_curve">
              Senior Alumni</a>
         </li>
       </ul>
          
     </li>
     
     <!-- (6) -->
     <li><a href="<?php echo base_url().'index.php/display/contact_us'; ?>"
     				class="top_right_curve bottom_right_curve">
     				Contact Us</a>
     </li>
  </ul><!-- end #topnav -->
</div><!-- end #main_dropdown -->