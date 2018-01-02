<?php
class Main extends CI_controller {
    var $lib = 10010000000;

    function __construct() {
        parent::__construct();

        $this -> lang -> load("app", "portuguese");
        $this -> lang -> load("find", "portuguese");
        //$this -> load -> library('tcpdf');
        //$this -> load -> database();
        $this -> load -> helper('form');
        $this -> load -> helper('form_sisdoc');
        $this -> load -> helper('email');
        $this -> load -> helper('url');
        $this -> load -> library('session');
        date_default_timezone_set('America/Sao_Paulo');
        $this -> load -> model('socials');
        
        /* Security */
        //		$this -> security();

    }

    private function cab($navbar = 1) {
        $data['title'] = 'phpStart ::::';
        $this -> load -> view('header/header', $data);
        if ($navbar == 1) {
            //$this -> load -> view('header/navbar', null);
        }        
    }

    /******************************************************************** LOGIN DO SISTEMA */
    function social($path = '', $d1 = '', $d2 = '') {
        $this -> cab(0); 
        
        $this -> socials -> action($path, $d1, $d2);
    }

    private function foot() {
        $this -> load -> view('header/footer');
    }

    public function index() {
        $this -> cab(); 
        echo "OK";
        exit;

        $this -> foot();
    }
}
?>
