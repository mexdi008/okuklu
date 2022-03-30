<?php
try
{
    $db = new PDO("mysql:host = localhost;dbname=okukluadminpanel;charset=utf8","mehdi","12345");
    echo 'successfully';
}
catch (PDOException $e)
{
    echo $e->GetMessage();
}

?>