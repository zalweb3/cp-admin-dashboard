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
$this->extend('Layout/TwitterBootstrap/dashboard');
?>

<div class="container">
    <h2><?= __d('Users', 'Administrator Profile') ?></h2>
  	<hr>
    <h3><?= $this->Html->image(empty($user->avatar) ? $avatarPlaceholder : $user->avatar, ['width' => '180', 'height' => '180']); ?></h3>
    <hr>
    
    <div class="row">
        
        <div class="col-md-2"><span class="label label-default">Details</span></div>
        <div class="col-md-4 panel"><p class="text-muted"><?= $this->Html->tag('span', __d('Users', '{0} {1}', $user->first_name, $user->last_name),['class' => 'full_name']) ?>&nbsp;</p></div>
    
        <div class="col-md-2"><span class="label label-default">Change Password</span></div>
        <div class="col-md-4 panel"><p class="text-muted"><?= $this->Html->link(__d('Users', 'Change Password'), ['plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'changePassword']) ?>&nbsp;</p></div>    

        <div class="col-md-2"><span class="label label-default">Username</span></div>
        <div class="col-md-4 panel"><p class="text-muted"><?= h($user->username) ?>&nbsp;</p></div>         
        
        <div class="col-md-2"><span class="label label-default">Email</span></div>
        <div class="col-md-4 panel"><p class="text-muted"><?= h($user->email) ?>&nbsp;</p></div>        

        <hr>

            <?php if (!empty($user->social_accounts)):
                ?>
                <h6 class="subheader"><?= __d('Users', 'Social Accounts') ?></h6>
                <table cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= __d('Users', 'Avatar'); ?></th>
                            <th><?= __d('Users', 'Provider'); ?></th>
                            <th><?= __d('Users', 'Link'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($user->social_accounts as $socialAccount):
                        $escapedUsername = h($socialAccount->username);
                        $linkText = empty($escapedUsername) ? __d('Users', 'Link to {0}', h($socialAccount->provider)) : h($socialAccount->username)
                        ?>
                        <tr>
                            <td><?=
                                $this->Html->image(
                                    $socialAccount->avatar,
                                    ['width' => '90', 'height' => '90']
                                ) ?>
                            </td>
                            <td><?= h($socialAccount->provider) ?></td>
                            <td><?=
                                $this->Html->link(
                                    $linkText,
                                    $socialAccount->link,
                                    ['target' => '_blank']
                                ) ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>
