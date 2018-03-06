<?php 
   $user = $this->ion_auth->user()->row();
?>

<span><?php echo $user->first_name;?></span>
<p><?php echo $user->email;?></p>    
<p><?php echo anchor('auth/change_password/', lang('change_password_heading')); ?></p>
<p><?php echo anchor('auth/logout/', 'Logout', 'title="Sign Out"'); ?></p>

<hr>

<p>
   <?php echo anchor('/', 'Home'); ?> | 
   <?php echo anchor('auth', 'Users List', 'title="Users List"'); ?> | 
   <?php echo anchor('settings', 'Settings'); ?>
</p>


<h2><?php echo lang('create_group_heading');?></h2>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?>