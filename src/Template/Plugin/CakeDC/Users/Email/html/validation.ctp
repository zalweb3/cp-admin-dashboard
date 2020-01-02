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
$activationUrl = [
    '_full' => true,
    'plugin' => 'CakeDC/Users',
    'controller' => 'Users',
    'action' => 'validateEmail',
    isset($token) ? $token : ''
];
?>
<p>
<?= __d('Users', "Hi {0}", isset($first_name)? $first_name : '') ?>,
</p>
<p>
    <strong><?= $this->Html->link(__d('Users', 'Activate your account here'), $activationUrl) ?></strong>
</p>
<p>
    <?= __d('Users', "If the link is not correctly displayed, please copy the following address in your web browser {0}", $this->Url->build($activationUrl)) ?>
</p>
<p>
    <?= __d('Users', 'Thank you') ?>,
</p>
