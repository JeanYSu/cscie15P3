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
    public function getLoremIpsum()
    {
       $paragraphs = array();
        return view('loremipsum.index')->with('paragraphs', $paragraphs)
                                       ->with('paragraphsCount', '');
    }

    public function postLoremIpsum(Request $request)
    {
      //validate paragraph number input
      $this->validate($request, [
        'paragraph_number'=> 'required|integer|between:1,99',
        ]);

        $generator = new Generator();
        $paragraphsCount  = $request->input('paragraph_number');
        $paragraphs = $generator->getParagraphs($paragraphsCount);

        //$results = '';
        //foreach($paragraphs as $paragraph) {
        //    $results .=  '<p>'.$paragraph.'</p>';
        //}
        return view('loremipsum.index')->with('paragraphs', $paragraphs)
                                        ->with('paragraphsCount', $paragraphsCount);
    }


}
