<?php
  
  class Db{
    //$conexion = new mysqli("localhost","root","","phierros");
    private static $conexion=NULL;
    private function _construct()
    {}
    public static function conectar()
    {
      $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
      self::$conexion = new PDO('mysql:host=localhost;dbname=phierros','root','',$pdo_options);
      return self::$conexion;
    }
  }