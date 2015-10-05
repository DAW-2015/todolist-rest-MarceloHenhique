<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author strudel
 */
class Usuarios {
    public static function getUsuarios(){
        $con = Connection::getConnection();
        $result = mysqli_query($con, "Select * from Usuarios where 1");
        return mysqli_fetch_array($result);    
        
    }
    public static function addUsuarios($cliente){
        $con = Connection::getConnection();
        $query = "insert into Usuarios (nome, email, usuario, senha) values ('$cliente->nome', '$cliente->email', '$cliente->usuario', '$cliente->senha')";
        $q = mysqli_query($con, $query);
        
    }
    public static function delUsuarios($id){
        $con = Connection::getConnection();
        $query = "DELETE FROM Usuarios WHERE id = '$id'";
        $q = mysqli_query($con, $query);
    }
    public static function upUsuarios($cliente){
        $con = Connection::getConnection();
        $query = "UPDATE Tarefas SET nome='$cliente->nome', email='$cliente->email', usuario='$cliente->usuario',senha='$cliente->senha' WHERE id='$tarefa->id'";
        $q = mysqli_query($con, $query);
        
    }
}
