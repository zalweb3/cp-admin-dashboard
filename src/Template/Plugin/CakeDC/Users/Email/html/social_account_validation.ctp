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

<p>
<?= __d('Users', "Hi {0}", $user['first_name']) ?>,
</p>
<p>
    <strong><?php
    $text = __d('Users', 'Activate your social login here');
    $activationUrl = [
        '_full' => true,
        'plugin' => 'CakeDC/Users',
        'controller' => 'SocialAccounts',
        'action' => 'validateAccount',
        $socialAccount['provider'],
        $socialAccount['reference'],
        $socialAccount['token'],
    ];
    echo $this->Html->link($text, $activationUrl);
    ?></strong>
</p>
<p>
    <?= __d('Users', "If the link is not correcly displayed, please copy the following address in your web browser {0}", $this->Url->build($activationUrl)) ?>
</p>
<p>
    <?= __d('Users', 'Thank you') ?>,
</p>
