<?php

class Users_Controller extends BaseController {

public $restful = true;
//protected $layout = "layouts.default";

  public function __construct() {
       
  
        }


public function  getIndex() {


$users = User::all();
return View::make('users.index')->with('users', $users);


}





}