<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 17.07.2017
 * Time: 22:58
 */
class Usuario
{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    /**
     * @return mixed
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * @param mixed $idusuario
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    /**
     * @return mixed
     */
    public function getDeslogin()
    {
        return $this->deslogin;
    }

    /**
     * @param mixed $deslogin
     */
    public function setDeslogin($deslogin)
    {
        $this->deslogin = $deslogin;
    }

    /**
     * @return mixed
     */
    public function getDessenha()
    {
        return $this->dessenha;
    }

    /**
     * @param mixed $dessenha
     */
    public function setDessenha($dessenha)
    {
        $this->dessenha = $dessenha;
    }

    /**
     * @return mixed
     */
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    /**
     * @param mixed $dtcadastro
     */
    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;
    }

    public function getById($id = null)
    {
        $DBClass = new Dbconnect();

        $result = $DBClass->select("select * from tb_usuarios where idusuario = :ID", array(
            ":ID" => $id
        ));

        if (count($result) > 0)
        {
            $this->setData($result[0]);
        }

    }

    public static function getAll()
    {
        $DBClass = new Dbconnect();

        return $DBClass->select("select * from tb_usuarios order by deslogin");

    }

    public static function search($search)
    {
        $DBClass = new Dbconnect();

        return $DBClass->select("select * from tb_usuarios  where deslogin like :SEARCH order by deslogin", array(
            ":SEARCH" => "%".$search."%"
        ));

    }

    public function login($login, $senha)
    {
        $DBClass = new Dbconnect();

        $result = $DBClass->select("select * from tb_usuarios where deslogin = :LOGIN and dessenha = :SENHA", array(
            ":LOGIN" => $login,
            ":SENHA" => $senha
        ));

        if (count($result) > 0)
        {
            $this->setData($result[0]);
        }
        else
        {
            throw new Exception("LOGIN FAIL!!!!",1);
        }

    }

    public function setData($row = array())
    {


        $this->setIdusuario($row['idusuario']);
        $this->setDeslogin($row['deslogin']);
        $this->setDessenha($row['dessenha']);
        $this->setDtcadastro(new DateTime($row['dtcadastro']));
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }


}