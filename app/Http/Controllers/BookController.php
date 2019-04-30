<?php

namespace App\Http\Controllers;

use App\Book;
use App\UserBook ; 
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $comments = App\Post::find(1)->comments ;

               $book = Book::find($id);
               $user_id = auth()->user()->id  ;
               $relations = [ 
                'book_id'=> $book->id ,
                'user_id'=>$user_id , 
                'leased'=> 0 , 
                'favourite'=> 0 , 
                'rate' => 0
                   ] ;
                   $relations = json_encode($relations) ;
                   $relations = json_decode($relations) ; 

               $rel = UserBook::where('user_id','=',1)->where('book_id','=',$book->id)->get() ; 
                
               if (sizeof($rel)>0)
                $relations = $rel[0] ; 

        return view('books.show', compact('book' , 'relations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }

    public static function getallBooks()
    {
               $books = Book::all();
               return $books;
    }
}
