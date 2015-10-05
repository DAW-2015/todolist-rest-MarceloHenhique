<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tarefas
 *
 * @author strudel
 */

class Tarefas{
    public static function getTarefas(){
        $con = Connection::getConnection();
        $result = mysqli_query($con, "Select * from Tarefas where 1");
        return mysqli_fetch_array($result);    
    }
    public static function addTarefas($tarefa){
        $con = Connection::getConnection();
        $query = "insert into Tarefas (descricao, usuario_id, categoria) values ('$tarefa->descricao', '$tarefa->usuario_id', '$tarefa->categoria')";
        $q = mysqli_query($con, $query);
    }
    
    public static function delTarefas($id){
        $con = Connection::getConnection();
        $query = "DELETE FROM Tarefas WHERE id = '$id'";
        $q = mysqli_query($con, $query);
    }
    
    public static function upTarefas($tarefa){
        $con = Connection::getConnection();
        $query = "UPDATE Tarefas SET descricao='$tarefa->descricao', usuario_id='$tarefa->usuario_id', categoria='$tarefa->categoria' WHERE id='$tarefa->id'";
        $q = mysqli_query($con, $query);
    }
   
}
