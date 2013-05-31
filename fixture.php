<?
    if(!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Fixture extends CI_Controller {

        function index() {
            if(ENVIRONMENT != 'development')
                return;
            $this->_user();
            $this->_chocolate();
        }

        function _user() {
            $users = array(
                array(
                    'id' => 1,
                    'name' => 'rowend',
                    'email' => 'rowend@rowend.com'
                ),
                array(
                    'id' => 2,
                    'name' => 'kiki',
                    'email' => 'kiki@kiki.com'
                ),
                array(
                    'id' => 3,
                    'name' => 'wendy',
                    'email' => 'wendy@wendy.com'
                )
            );
        }

        function _chocolate() {
            $chocolates = array(
                array(
                    'id' => 1,
                    'name' => 'milky way'
                ),
                array(
                    'id' => 2,
                    'name' => 'Carlos V'
                ),
                array(
                    'id' => 3,
                    'name' => 'm&m'
                ),
            );
        }

    }
?>
