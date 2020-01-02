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
namespace App\View;

use BootstrapUI\View\UIView;

class AppView extends UIView
{

    /**
     * Initialization hook method.
     */
    public function initialize()
    {
        $this->layout = 'custom';
        //Don't forget to call the parent::initialize()
        parent::initialize();
    }
}
