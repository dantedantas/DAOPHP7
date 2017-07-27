<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 27.07.2017
 * Time: 18:13
 */

function checkName($name)
{
    if (!$name)
    {
        throw new Exception("The name is empty!", 202);
    }

    echo "Nm:".trim(ucfirst($name))."<br>";
}

try
{
    checkName(" Dante ");
    checkName("");
    checkName(" Basia MyLove");

}
catch (Exception $E)
{
    echo "<br><br>Code: ".$E->getCode()."<br>";
    echo "Message: ".$E->getMessage()."<br>";
    echo "Line: ".$E->getLine()."<br>";
} finally {

    echo "<br><br>FINALLY IS HERE<br><br>";
}