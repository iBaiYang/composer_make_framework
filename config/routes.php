<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
    echo "成功！";
});

/*Macaw::get('(:all)', function($fu) {
    echo '未匹配到路由<br>'.$fu;
});*/

Macaw::$error_callback = function() {
    throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::get('', 'HomeController@home');

/*Macaw::get('/', function() {
    echo 'Hello world!';
});

Macaw::get('/(:any)', function($slug) {
    echo 'The slug is: ' . $slug;
});

Macaw::error(function() {
    echo '404 :: Not Found';
});*/

Macaw::dispatch();