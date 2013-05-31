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
            $table = 'user';
            $this->db->truncate($table);
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
            $this->db->insert_batch($table, $users);
        }

        function _chocolate() {
            $table = 'chocolate';
            $this->db->truncate($table);
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
            $this->db->insert_batch($table, $chocolates);
        }

    }
?>
