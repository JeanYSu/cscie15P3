<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use P3\Http\Requests;
use P3\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;

class LoremIpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {

        return view('loremipsum.index')->with('results', '');
    }

    public function postIndex(Request $request)
    {
      //validate paragraph number input
      $this->validate($request, [
        'paragraph_num'=> 'required|integer|between:0,99',
        ]);

        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($request->input('paragraph_num'));
       
        $results = '';
        foreach($paragraphs as $paragraph) {
            $results .=  '<p>'.$paragraph.'</p>';
        }
        return view('loremipsum.index')->with('results', $results);
    }


}
