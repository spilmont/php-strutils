<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:37
 */

require "classe/StrUtils.php";


$str = new StrUtils();

$str->setStr(" seb en pls");
echo 'la chaine de charactere est :'.$str->getStr();
echo "<br><br>";
echo "bold :".$str->bold();

echo "<br><br>";
echo "italic :".$str->italic();
echo "<br><br>";
echo "underline :".$str->underline();
echo "<br><br>";
echo "capitalize :".$str->capitalize();
echo "<br><br>";
echo "uglify :".$str->uglify();