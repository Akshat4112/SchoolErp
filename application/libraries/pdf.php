<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/30/2017
 * Time: 1:31 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}