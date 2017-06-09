<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/5/2017
 * Time: 10:41 AM
 */
class Faculties extends CI_Controller
{
    public function index()
    {
    }

    public function faculties_view()
    {
        $this->load->view('dashboard/examples/faculties_view');
    }
}