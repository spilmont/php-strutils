<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:38
 */

class StrUtils
{
    private $str;

    public function __construct()
    {
        $this->str;

    }

    public function bold (){

       return "<b>".$this->str."</b>";
    }

    public function italic (){
        return "<i>".$this->str."</i>";
    }

    public function underline (){
        return "<u>".$this->str."</u>";
    }

    public function capitalize(){
        return "<span style='text-transform: capitalize'>".$this->str."</span>";
    }

    public function uglify(){

       return "<u><i><b>".$this->str."</b></i></u>"; /* a changer en appelant les methode */



    }

    public function setStr($str){

        $this->str = $str;

}
    public function getStr(){
        return $this->str;
    }


}