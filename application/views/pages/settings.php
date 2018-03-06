<h1>Settings Page</h1>

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