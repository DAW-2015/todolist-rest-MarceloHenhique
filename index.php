<?php

require 'Slim/Slim.php';
        \Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
        
$app->get('/tarefas', function(){
            echo json_encode(Tarefas::getTarefas());
});

$app->get('/usuarios', function(){
            echo json_encode(Usuarios::getUsuarios());
});

$app->post('/addUsuarios', function(){
            $request = \Slim\Slim::getInstance()->request(); 
            
            $body = $request->getBody();
            
            $put;
            parse_str($body, $put);
            
            $cliente = json_decode(json_encode($put));
            
            echo $cliente->nome;
            
            Usuarios::addUsuarios($cliente);
            
});

$app->post('/addTarefas', function(){
            $request = \Slim\Slim::getInstance()->request(); 
            
            $body = $request->getBody();
            
            $put;
            parse_str($body, $put);
            
            $cliente = json_decode(json_encode($put));
            
            echo $cliente->nome;
            
            Tarefas::addTarefas($cliente);
            
});

$app->delete('/delTarefas/:id', function($id){
            Tarefas::delTarefas($id);
            
});

$app->delete('/delUsuarios/:id', function($id){
            Usuarios::delUsuarios($id);
            
});

$app->put('/upTarefas', function(){
            $request = \Slim\Slim::getInstance()->request(); 
            
            $body = $request->getBody();
            
            $put;
            parse_str($body, $put);
            
            $cliente = json_decode(json_encode($put));
            
            echo $cliente->nome;
            
            Tarefas::upTarefas($cliente);
            
});

$app->put('/upUsuarios', function(){
            $request = \Slim\Slim::getInstance()->request(); 
            
            $body = $request->getBody();
            
            $put;
            parse_str($body, $put);
            
            $cliente = json_decode(json_encode($put));
            
            echo $cliente->nome;
            
            Usuarios::upUsuarios($cliente);
            
});


$app->run();

