<?php

namespace Router;

/**
 * Router class
 * @author 
 
 */
class Router {

    public $url;
    // enregister notre route dans notre tableau $routes = []
    public $routes = [];

    public function __construct($url) {
      
        $this->url = trim($url, '/');
    }
    public function show() {
        echo $this->url;
    }
    public function get(string $path, string $action) {

        $this->routes['GET'][] = new Route($path, $action);
    }

    public function run(){
    
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
         if($route->matches($this->url)){
             return $route->execute();
         } 
        }
        return header('HTTP/1.0 404 Not Found');

    }


}