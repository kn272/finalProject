<?php

class routes
{
    public static function getRoutes()
    {
        //GET method index.php?page=homepage&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->page = 'homepage';
        $route->action = 'show';
        $route->controller = 'homepageController';
        $route->method = 'show';
        $routes[] = $route;
        
        //$routes[] = self::create('GET','homepage','show','homepageController','show');
   
        //POST method index.php?page=homepage&action=create
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'homepage';
        $route->controller = 'homepageController';
        $route->method = 'create';
        $routes[] = $route;
  
        //GET METHOD index.php?page=accounts&action=all
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'all';
        $routes[] = $route;
        
        //GET METHOD index.php?page=accounts&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show';
        $routes[] = $route;
        
        //GET METHOD index.php?page=accounts&action=login
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';
        $routes[] = $route;
        
        //POST method for index.php?page=accounts&action=delete
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'delete';
        $routes[] = $route;
              
        //GET method for index.php?page=accounts&action=edit 
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'edit';
        $routes[] = $route;
                
        //POST method for index.php?page=accounts&action=edit
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'save';
        $routes[] = $route;
                
        //GET method for index.php?page=accounts&action=store  
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'store';
        $route->page = 'accounts';
        $route->controller = 'accountssController';
        $route->method = 'store';
        $routes[] = $route;
                
        //POST method for index.php?page=accounts&action=store
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'store';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'store';
        $routes[] = $route;
        
        //GET method for index.php?page=accounts&action=save  
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'save';
        $route->page = 'accounts';
        $route->controller = 'accountssController';
        $route->method = 'save';
        $routes[] = $route;        
        
        //POST method for index.php?page=accounts&action=save
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'save';
        $routes[] = $route;        
        
        //this is the route for the reg form
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'register';
        $routes[] = $route;
        
        //this handles the reg post to create the user
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'store';
        $routes[] = $route;

        //GET METHOD index.php?page=tasks&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';
        $routes[] = $route;
        
        //GET METHOD index.php?page=tasks&action=all
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;
        
        //GET method for index.php?page=tasks&action=delete
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;
        
        //POST method for index.php?page=tasks&action=delete
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;        
        
        //GET method for index.php?page=tasks&action=edit 
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'edit';
        $routes[] = $route;        
        
        //POST method for index.php?page=tasks&action=edit
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'edit';
        $routes[] = $route;        
        
        //GET method for index.php?page=tasks&action=store  
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'store';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'store';
        $routes[] = $route;        
        
        //POST method for index.php?page=tasks&action=store
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'store';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'store';
        $routes[] = $route;
        
        //GET METHOD index.php?page=tasks&action=create
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'create';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'create';
        $routes[] = $route;
        
        //POST METHOD index.php?page=tasks&action=create
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'create';
        $routes[] = $route;
        
        //GET METHOD index.php?page=tasks&action=save
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'save';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'save';
        $routes[] = $route;
        
        //POST METHOD index.php?page=tasks&action=save
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'save';
        $routes[] = $route;
        
        //GET method for index.php?page=tasks&action=logout
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'logout';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'logout';
        $routes[] = $route;

        //POST method for index.php?page=tasks&action=delete
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'logout';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'logout';
        $routes[] = $route;
       
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