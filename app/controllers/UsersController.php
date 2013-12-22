<?php

class UsersController extends BaseController {

public $restful = true;
protected $layout = "layouts.main";

  public function __construct() {

        }


public function  getIndex() {


$users = User::orderBy('id','desc')->paginate(3);
  $this->layout->title = 'User List';
$this->layout->content = View::make('users.index')->with('users', $users);
//return View::make('users.index')->with('title', 'Users')->with('users', $users);


}




public function getNew() {

   $this->layout->title = ' New User';
   $this->layout->content = View::make('users.new');
}



public function postCreate() {

                $validator = Validator::make(Input::all(), User::$rules);
               
               if(!$validator->passes())
                      {
                      return Redirect::to('users.new'); 
                      }

                if ($validator->passes()) {

                         $user = new User;
                         $user->username = Input::get('username');
                         $user->firstname = Input::get('firstname');
                         $user->lastname = Input::get('lastname');
                         $user->email = Input::get('email');
                         $password=Input::get('password');
                         $user->password = Hash::make($password);
                         $user->save(); 
           

                        return Redirect::to('users/index')->with('message', 'Thank you !');
                     }

                else {
                       
                       return Redirect::to('users/new')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
                }
        

}



    public function getShow($id){

     $this->layout->title = 'User Details';

     $this->layout->content =View::make ('users.show')->with('user', User::find($id));

    }





   public function getEdit($id){

   	$this->layout->title = 'Edit User';

    $user =User::find($id);

    $this->layout->content = View::make ('users.edit')->with('user',$user);

   }





 public function postUpdate($id) {
 
    $rules = array(
			'username'       => 'required',
			'firstname'       => 'required',
			'lastname'       => 'required',
			'email'      => 'required|email'
		);
		$validator = Validator::make(Input::all(), $rules);

		
		if ($validator->fails()) {
			return Redirect::to('users/edit' . $id )
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
		   $user = User::find($id);
           $user->firstname = Input::get('firstname');
           $user->lastname = Input::get('lastname');
          $user->username = Input::get('username');
          $user->email = Input::get('email');
          $user->save();
          Session::flash('message', 'User successfully updated');
	      return Redirect::to('users.index');
		}

   }




     
        public function destroy($id)
        {
               
                $user = User::find($id);
                $user->delete();
                Session::flash('message', 'User successfully deleted');
                return Redirect::to('users.index');
        }








 }