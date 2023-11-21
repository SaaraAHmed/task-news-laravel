<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\News;

class Newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
            return  view('news');    
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news= new news;
        $news->newsTitle=$request->title;
        $news->content=$request->content;
       if(isset($request->published)){
           $news->published=true;
          } else {
            $news->published=false;
           }
        $news->author=$request->author;
       
        $news->save( );
        return "News data added successfully";

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
