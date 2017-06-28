<?php
include_once('../model/BarberModel.php');

function index(){
    render("barberers/index", array(
        //'schedual' => getSchedual($Id)
    ));
}

function schedual(){
    render("barberers/schedual");
}
