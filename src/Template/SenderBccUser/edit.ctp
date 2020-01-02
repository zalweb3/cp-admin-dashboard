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
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $senderBccUser->username],
        ['confirm' => __('Are you sure you want to delete # {0}?', $senderBccUser->username)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Sender Bcc User'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $senderBccUser->username],
        ['confirm' => __('Are you sure you want to delete # {0}?', $senderBccUser->username)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Sender Bcc User'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($senderBccUser); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Sender Bcc User']) ?></legend>
    <?php
    echo $this->Form->input('bcc_address');
    echo $this->Form->input('domain');
    echo $this->Form->input('expired');
    echo $this->Form->input('active');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
