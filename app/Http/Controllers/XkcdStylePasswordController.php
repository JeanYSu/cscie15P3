<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use P3\Http\Requests;
use P3\Http\Controllers\Controller;

class XkcdStylePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getPassword()
     {
         $words = array();
         return view('xkcdstylepassword.index')->with('words', $words)
                                         ->with('wordCount', '')
                                         ->with('addnumber_chkstatus', '')
                                         ->with('addsymbol_chkstatus','')
                                         ->with('changeuppercase_chkstatus','');
     }

     public function postPassword(Request $request)
     {
       //validate user number input
       $this->validate($request, [
         'word_number'=> 'required|integer|between:1,9',
         ]);

         $faker = \Faker\Factory::create();
         $words = array();
         //set birthdate status to checked for view html to take
         $addnumber_chkstatus = ($request->input('addnumber') == "on")? 'checked' : '';
         //set profile status to checked for view html to take
         $addsymbol_chkstatus = ($request->input('addsymbol') == "on")? 'checked' : '';
         //set favorite food status to checked for view html to take
         $changeuppercase_chkstatus = ($request->input('changeuppercase') == "on")? 'checked' : '';


         $wordCount = $request->input('word_number');
         $words = $faker->words($wordCount);

         //add a number to end of password if requested
         if($addnumber_chkstatus == "checked"){
           $words[$wordCount-1].= rand(0, 9);
         }

         //add a special symbol to end of password if requested
         if($addsymbol_chkstatus == "checked"){
           $symbols = array('!', '@', '#', '$', '%','^', '&', '*','+');
				        $words[$wordCount-1].= $symbols[array_rand($symbols,1)];
         }
         //change all words to upper cases if requested
         if($changeuppercase_chkstatus == "checked"){
           for ($i=0; $i < $wordCount; $i++) {
             $words[$i] = strtoupper($words[$i]);
           }
         }

         return view('xkcdstylepassword.index')->with('words', $words)
                                         ->with ('wordCount',$wordCount)
                                         ->with('addnumber_chkstatus', $addnumber_chkstatus)
                                         ->with('addsymbol_chkstatus', $addsymbol_chkstatus)
                                         ->with('changeuppercase_chkstatus',$changeuppercase_chkstatus);

     }
}
