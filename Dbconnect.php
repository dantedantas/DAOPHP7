<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 09.07.2017
 * Time: 16:12
 */
class Dbconnect extends PDO
{

   // private $stmt;
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
        }
        catch (PDOException $err) {
            echo  "CODE: ".$err->getCode()."<br>";
            echo  "Message: ".$err->getMessage()."<br>";
        }
    }

    private function setParams($statment, $params = array())
    {
        foreach ($params as $key => $value)
        {
            $this->setParam($statment, $key, $value);

        }
    }

    private function setParam($statment, $key, $value)
    {
        $statment->bindParam($key, $value);
    }

    public function query($rawSql, $params = array())
    {
        $stmt = $this->conn->prepare($rawSql);
        if (!empty($params))
            $this->setParams($stmt, $params);
        $stmt->execute();

        return $stmt;
    }

    public function select($rawSql, $params = array()) : array
    {
        $stmt = $this->query($rawSql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertUsuario($login, $senha)
    {
        $this->conn->beginTransaction();
        $this->stmt = $this->conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (:LOGIN, :SENHA)");
        $this->stmt->bindParam(":LOGIN", $login);
        $this->stmt->bindParam(":SENHA", $senha);
        $this->rodaSQL();
    }

    private function rodaSQL()
    {
        try {
            if ($this->stmt->execute())
            {
                $this->conn->commit();
                $ts = strtotime('now');
                echo "Executado com sucesso! (commit) - ".Util::dataLonga($ts);
            } else
            {
                $this->conn->rollBack();
                echo "<br><br><br>FALHA AO INSERIR DADOS! (rollBack)";
            }

        }
        catch (PDOException $err) {
            echo  "CODE: ".$err->getCode()."<br>";
            echo  "Message: ".$err->getMessage()."<br>";
            $this->conn->rollBack();
            echo "<br><br><br>FALHA AO INSERIR DADOS! (rollBack2)";
        }
    }
}