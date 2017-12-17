<?php

class routes
{
    public static function getRoutes()
    {
        //GET method index.php?page=homepage&action=show 
        $routes[] = self::create('GET','show','homepage','homepageController','show');
        
   
        //POST method index.php?page=homepage&action=create
        $routes[] = self::create('POST','create','homepage','homepageController','create');
  
        //GET METHOD index.php?page=accounts&action=all
        $routes[] = self::create('GET','all','accounts','accountsController','all');
        
        //GET METHOD index.php?page=accounts&action=show
        $routes[] = self::create('GET','show','accounts','accountsController','show');
        
        //GET METHOD index.php?page=accounts&action=login
        $routes[] = self::create('POST','login','accounts','accountsController','login');
        
        //POST method for index.php?page=accounts&action=delete
        $routes[] = self::create('POST','delete','accounts','accountsController','delete');
              
        //GET method for index.php?page=accounts&action=edit 
        $routes[] = self::create('GET','edit','accounts','accountsController','edit');
                
        //POST method for index.php?page=accounts&action=edit
        $routes[] = self::create('POST','edit','accounts','accountsController','save');
                        
        //GET method for index.php?page=accounts&action=store  
        $routes[] = self::create('GET','store','accounts','accountsController','store');        
                
        //POST method for index.php?page=accounts&action=store
        $routes[] = self::create('POST','store','accounts','accountsController','store');  
        
        //GET method for index.php?page=accounts&action=save  
        $routes[] = self::create('GET','save','accounts','accountsController','save');        
        
        //POST method for index.php?page=accounts&action=save
        $routes[] = self::create('POST','save','accounts','accountsController','save');
        
        //this is the route for the reg form
        $routes[] = self::create('GET','register','accounts','accountsController','register');
        
        //this handles the reg post to create the user
        $routes[] = self::create('POST','register','accounts','accountsController','store');

        //GET METHOD index.php?page=tasks&action=show
        $routes[] = self::create('GET','show','tasks','tasksController','show');
        
        //GET METHOD index.php?page=tasks&action=all
        $routes[] = self::create('GET','all','tasks','tasksController','all');
        
        //GET method for index.php?page=tasks&action=delete
        $routes[] = self::create('GET','delete','tasks','tasksController','delete');        
        
        //POST method for index.php?page=tasks&action=delete
        $routes[] = self::create('POST','delete','tasks','tasksController','delete');
        
        //GET method for index.php?page=tasks&action=edit 
        $routes[] = self::create('GET','edit','tasks','tasksController','edit');
        
        //POST method for index.php?page=tasks&action=edit
        $routes[] = self::create('POST','edit','tasks','tasksController','edit');
        
        //GET method for index.php?page=tasks&action=store  
        $routes[] = self::create('GET','store','tasks','tasksController','store');
        
        //POST method for index.php?page=tasks&action=store
        $routes[] = self::create('POST','store','tasks','tasksController','store');
        
        //GET METHOD index.php?page=tasks&action=create
        $routes[] = self::create('GET','create','tasks','tasksController','create');
        
        //POST METHOD index.php?page=tasks&action=create
        $routes[] = self::create('POST','create','tasks','tasksController','create');
        
        //GET METHOD index.php?page=tasks&action=save
        $routes[] = self::create('GET','save','tasks','tasksController','save');
        
        //POST METHOD index.php?page=tasks&action=save
        $routes[] = self::create('POST','save','tasks','tasksController','save');
        
        //GET method for index.php?page=tasks&action=logout
        $routes[] = self::create('GET','logout','accounts','accountsController','logout');

        //POST method for index.php?page=tasks&action=delete
        $routes[] = self::create('POST','logout','accounts','accountsController','logout');
       
        return $routes;
    }
    
    public static function create($http_method,$action,$page,$controller,$method) {
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
        return $route;
    }

}

class route
{
    public $http_method;
    public $page;
    public $action;
    public $method;
    public $controller;
}