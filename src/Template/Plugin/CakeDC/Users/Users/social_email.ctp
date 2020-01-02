<?php
/**
 *
  
 *
 *
 * @author AVERWAY LTD  <devtcl@hotmail.com>
 * @license GNU/GPLv3 or later; https://www.gnu.org/licenses/gpl.html
 * @copyright 2017 AVERWAY LTD
 * 
 * SophiMail is a registered trademark of AVERWAY LTD
 *
 */
?>
<div class="users form">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create('User') ?>
    <fieldset>
        <legend><?= __d('Users', 'Please enter your email') ?></legend>
        <?= $this->Form->input('email') ?>
    </fieldset>
    <?= $this->User->addReCaptcha(); ?>
    <?= $this->Form->button(__d('Users', 'Submit')); ?>
    <?= $this->Form->end() ?>
</div>
