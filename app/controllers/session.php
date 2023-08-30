<?php

class Session extends Controller{

    public function index(){
        echo "ok".$_SESSION['username'];
        
    }
}