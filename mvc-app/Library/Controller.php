<?php

namespace Library;

abstract class Controller
{
    protected $container;
    
    public function setContainer(Container $container)
    {
        $this->container = $container;
        
        return $this;
    }
    
    public function get($key)
    {
        return $this->container->get($key);
    }
    
    // todo: make as public static function
    public function render($view, array $args = [])
    {
        extract($args);
        $dir = str_replace(['\\', 'Controller'], '', get_class($this));
        $file = VIEW_DIR . $dir . DS . $view;
        
        if (!file_exists($file)) {
            throw new \Exception("{$file} not found!!");
        }
        
        ob_start();
        require $file;
        return ob_get_clean();
    }
}