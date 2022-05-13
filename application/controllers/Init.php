<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Init extends RestController
{
    function __construct()
    {
        parent::__construct();
    }
    public function index_get()
    {
        $this->response(['message'=>'Using GET method'], 200);
    }
    public function index_post()
    {
        $this->response(['message'=>'Using POST method'], 200);
    }
}