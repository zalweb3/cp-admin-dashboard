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
    'action' => 'resetPassword',
    isset($token) ? $token : ''
];
?>
<?= __d('Users', "Hi {0}", isset($first_name)? $first_name : '') ?>,

<?= __d('Users', "Please copy the following address in your web browser {0}", $this->Url->build($activationUrl)) ?>

<?= __d('Users', 'Thank you') ?>,

