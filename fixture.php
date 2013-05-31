<?
    if(!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Fixture extends CI_Controller {

        function index() {
            $this->_user();
            $this->_book();
        }

        function _user() {
            $users = array(
                array(),
                array(),
                array(),
            );
        }

        function _books() {
            $books = array(
                array(),
                array(),
                array(),
            );
        }

    }
?>
