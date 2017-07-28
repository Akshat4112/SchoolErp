<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/28/2017
 * Time: 1:42 PM
 */
require_once ('C:\xampp\htdocs\SchoolErp\application\third_party\PHPExcel-1.8\Classes\PHPExcel\IOFactory.php');

class IOFactory extends PHPExcel_IOFactory{
    public function __construct()
    {
        parent::__contruct();
    }
}