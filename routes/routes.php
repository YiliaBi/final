<?php


class routes
{

    public static function getRoutes()
    {

        $route = new route();

        $route->http_method = 'GET';

        $route->page = 'homepage';

        $route->action = 'show';

        $route->controller = 'homepageController';

        $route->method = 'show';

        $routes[] = $route;


        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'homepage';
        $route->controller = 'homepageController';
        $route->method = 'create';
        $routes[] = $route;


        //GET METHOD index.php?page=tasks&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';
        $routes[] = $route;



        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;

        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'all';
        $routes[] = $route;


        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show';
        $routes[] = $route;




        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';
        $routes[] = $route;

        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'logout';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'logout';
        $routes[] = $route;


        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'Profile';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'edit';
        $routes[] = $route;


        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;

        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'insert';
        $routes[] = $route;

        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'edit';
        $routes[] = $route;


        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'delete';
        $routes[] = $route;

        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'edit';
        $routes[] = $route;

        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'editprofile';
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

        //This is the route for the insert  task page
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'insert';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'insert';
        $routes[] = $route;



        //This is the route for the insert  task page
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'insert';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'store';
        $routes[] = $route;

        //This is the route for the insert  accounts page
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'insert';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'insert';
        $routes[] = $route;



        //This is the route for the insert  accounts page
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'insert';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'store';
        $routes[] = $route;

        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'deletetask';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
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
    }
}



class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}