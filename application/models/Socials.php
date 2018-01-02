<?php
class socials extends CI_model
    {
    var $thema = 'thema01';
    
    function action($path='',$arg1='',$arg2='')
        {
            $this->socials->login();
        }
    function login()
        {
            $data = array();
            $thema = $this->thema;
            
            $this->load->view('social/login/'.$thema.'/login',$data);
        }        
    }
?>
