<?php
/**
 * Description of carregaSmarty
 *
 * @author 1093967
 */

class carregaSmarty {
   
    private $total          = 0;
    private $fields         = [];
    private $template_name  = "";
    public  $smarty         = "";
    
    public function __construct($template_name, $fields) {
        
        $this->smarty = new Smarty();
        $this->configura_dir();
        $this->atribui_valores();
        $this->display();
        
    }
    
    public function configura_dir() {
        $this->smarty->template_dir   = __DIR__ . '/vendor/smarty/smarty/libs/templates/';
        $this->smarty->compile_dir    = __DIR__ . '/vendor/smarty/smarty/libs/templates_c/';
        $this->smarty->config_dir     = __DIR__ . '/vendor/smarty/smarty/libs/configs/';
        $this->smarty->cache_dir      = __DIR__ . '/vendor/smarty/smarty/libs/cache/';
    }    
    
    public function getFields() {
        return $this->fields;
    }

    public function getTemplate_name() {
        return $this->template_name;
    }

    public function setFields($fields) {
        $this->fields = $fields;
        return $this;
    }

    public function setTemplate_name($template_name) {
        $this->template_name = $template_name;
        return $this;
    }

    public function atribui_valores() {

        $fields = $this->getFields();
        
        foreach ($fields as $key => $value) {

            $this->smarty->assign($key, $value);

        }
    }    
    
    public function display() {

        $template_name = $this->getTemplate_name();
        $this->smarty->display($template_name);  
    }    
    
    
    
}
