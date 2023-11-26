<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use \App\Models\News;

class Newscontroller extends Controller
{
    private $columns = ['newsTitle', 'description','author'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news= News::get();
        return view('newstable',compact('news'));
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
        $news->author=$request->author;
       if(isset($request->published)){
           $news->published=true;
          } else {
            $news->published=false;
           }
        
       
        $news->save( );
        return "News data added successfully";

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //  return view('newsDetail');
         $new=News::findOrFail($id);
         return view('newsDetail',compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new=News::findOrFail($id);
        return view('updatenews',compact('new'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        News::where('id', $id)->update($request->only($this->columns));
        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        News::where('id', $id)->delete( );
        return  redirect('news');
    }
}
