<!-- Sidebar
  ================================================== -->
<div class="span3">
  
  <h3 id="list">Actions</h3>
    
  <div class="well" style="padding: 8px 0;">
    <ul class="nav nav-list">
      <!-- Account Management -->
      <li class="nav-header">Account Management</li>
      <li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
      <li><?php echo $this->Html->link(__('Create Account'), array('action' => 'add')); ?></li>
      <!-- User Management -->
      <li class="nav-header">User Management</li>
      <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
      <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
      <!-- Sites -->
      <li class="nav-header">Site Management</li>
      <li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
      <li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
      <li class="divider"></li>
      <!-- User Content -->
      <li><?php echo $this->Html->link(__('Your Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
      <li><?php echo $this->Html->link(__('Your Content'), array('controller' => 'contents', 'action' => 'index')); ?></li>
    </ul>
  </div><!-- .actions -->
</div><!-- /.span3 -->