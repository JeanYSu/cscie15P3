<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use P3\Http\Requests;
use P3\Http\Controllers\Controller;

class RandomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUsers()
    {
        $users = array();
        return view('randomuser.index')->with('users', $users)
                                        ->with('userCount', '')
                                        ->with('birthdate_chkstatus', '')
                                        ->with('profile_chkstatus','')
                                        ->with('food_chkstatus','');
    }

    public function postUsers(Request $request)
    {
      //validate user number input
      $this->validate($request, [
        'user_number'=> 'required|integer|between:1,20',
        ]);

        $faker = \Faker\Factory::create();
        $users = array();
        //set birthdate status to checked for view html to take
        $birthdate_chkstatus = ($request->input('birthdate') == "on")? 'checked' : '';
        //set profile status to checked for view html to take
        $profile_chkstatus = ($request->input('profile') == "on")? 'checked' : '';
        //set favorite food status to checked for view html to take
        $food_chkstatus = ($request->input('food') == "on")? 'checked' : '';

        //set user count to create user array
        $userCount = $request->input('user_number');

        //create user array
        for ($i=0; $i < $userCount; $i++) {
          //use RandomUser self defined class in library folder to create a random user with filled info
          $user = new \P3\Http\Library\RandomUser();
          $user->createUser($birthdate_chkstatus,$profile_chkstatus,$food_chkstatus);
          //assign user into users collection array
          $users[$i] = $user;
        }

        return view('randomuser.index')->with('users', $users)
                                        ->with ('userCount',$userCount)
                                        ->with('birthdate_chkstatus', $birthdate_chkstatus)
                                        ->with('profile_chkstatus', $profile_chkstatus)
                                        ->with('food_chkstatus',$food_chkstatus);

    }
}
?>
