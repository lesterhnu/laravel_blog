<?php
class Container
{
    protected $binds;

    protected $instances;

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        array_unshift($parameters, $this);

        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}
$container = new Container;

$container->bind('Board', function($container){
    return new CommonBoard;
});

$container->bind('Computer',function($container,$module){
    return new Computer($container->make($module));
});

$computer = $container->make('Computer',['Board']);
var_dump($computer);