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
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('CakeDC/Users.UsersAuth');
        $this->loadComponent('Global');

    }

    /*
    public function beforeFilter(Event $event)
    {
         $this->Security->config('unlockedActions', ['register']);
    }
    */

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

     public function beforeFilter(Event $event){
        if ($this->Global->_UserDomainDatasourceExists()) {
            Configure::write('_domain', $this->Global->_getDomain());
            Configure::write('_datasource', $this->Global->_getDatasource());
        } else {
            $this->Global->_deleteParams();
        }
    }
}
