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


<h2><?php echo lang('deactivate_heading');?></h2>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

<?php echo form_open("auth/deactivate/".$user->id);?>

  <p>
  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
    <input type="radio" name="confirm" value="yes" checked="checked" />
    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
    <input type="radio" name="confirm" value="no" />
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

<?php echo form_close();?>