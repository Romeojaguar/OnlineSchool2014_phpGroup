<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_System_Base extends Controller_Template {


    protected $content='';
    protected $css=array();
    protected $js =array();
    protected $title='';
    protected $txt='';

    public function before(){

        $this->template = 'layouts/main';

        parent::before();
    }

    public function after()
    {
        $this->template->content = $this->content;

        $css = array(
            'css/style.css',
            'css/bootstrap.css',
            'css/bootstrap-responsive.css'
        );
        $js =array(
            '/js/bootstrap.min.js',
            '/js/jquery.min.js'
        );

        $this->template->css = Arr::merge($css, $this->css);
        $this->template->js= Arr::merge($js,$this->js);
        $this->template->title=$this->title;
        $this->template->header=View::factory('layouts/header')->bind('txt', $this->txt);
        $this->template->footer=View::factory('layouts/footer');

        parent::after();
    }

} // End Base