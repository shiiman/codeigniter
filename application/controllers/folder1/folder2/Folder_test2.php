<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Folder_test2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($param1 = null, $param2 = null)
    {
        echo 'FolderTest2';

        if (!is_null($param1)) {
            echo '<br/ >param1: ' . $param1;
        }

        if (!is_null($param2)) {
            echo '<br/ >param2: ' . $param2;
        }
    }
}
