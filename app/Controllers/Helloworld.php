<?php namespace App\Controllers;

class Helloworld extends BaseController {
    public function index($nama, $npm) 
    {
        // echo $this->nama;
        echo $nama ."<br>";
        echo $npm ."<br>";
        // echo "Hello Kokom";
    }

    public function show()
    {
        echo "Atika Istiqomah";
        echo "1817051004";
    }
}