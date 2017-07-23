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
    private $power;
    private $guns = array();

    /**
     * @return mixed
     */
    public function getGuns()
    {
        return $this->guns;
    }

    /**
     * @param mixed $guns
     */
    public function addGun(Gun $gun)
    {
        $this->guns[] = $gun;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

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
        if (empty($this->dtcadastro)) $this->setDtCadastro(new DateTime());
        return $this->dtcadastro;
    }

    /**
     * @param mixed $dtcadastro
     */
    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;
    }

    public function __construct($login = "", $senha = "", $power)
    {
        $this->setDeslogin($login);
        $this->setDessenha($senha);
        $this->setPower($power);
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

    public function update($login, $senha)
    {
        $DBClass = new Dbconnect();

        $this->setDessenha($senha);
        $this->setDeslogin($login);

        $result = $DBClass->select("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID", array(
            ":LOGIN" => $this->getDeslogin(),
            ":PASS" => $this->getDessenha(),
            ":ID" => $this->getIdUsuario()
        ));

        if (count($result) > 0)
        {
            $this->setData($result[0]);
        }

    }

    public function delete()
    {
        $DBClass = new Dbconnect();

        $result = $DBClass->select("DELETE FROM tb_usuarios  WHERE idusuario = :ID", array(
            ":ID" => $this->getIdUsuario()
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());
    }

    public function insert()
    {
        $DBClass = new Dbconnect();

        $result = $DBClass->select("CALL sp_usuario_insert(:USER, :PASS)", array(
            ":USER" => $this->getDeslogin(),
            ":PASS" => $this->getDessenha()
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
            "power"=>$this->getPower(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }


}