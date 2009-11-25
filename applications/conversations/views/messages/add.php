<?php if (!defined('APPLICATION')) exit(); ?>

<div id="ConversationForm">
   <h2><?php echo Translate('Start a New Conversation'); ?></h2>
   <?php
   echo $this->Form->Open();
   echo $this->Form->Errors();
   echo $this->Form->Label('Recipients', 'To');
   echo $this->Form->TextBox('To', array('MultiLine' => TRUE, 'class' => 'MultiComplete'));
   echo $this->Form->TextBox('Body', array('MultiLine' => TRUE));
   echo $this->Form->Close('Start Conversation');
   ?>
</div>