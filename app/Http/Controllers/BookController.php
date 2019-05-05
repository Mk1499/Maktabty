<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\UserBook ; 
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('admin.books', compact('books'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.books.create',compact('categories' , $categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'book_name'=>'required',
            'author'=>'required',
            'book_image'=>'required'
        ]);
        
        if ($request->hasFile('book_image')) {
            if($request->file('book_image')->isValid()) {
                try {
                    
                    $image = 'data:image/' . $request->file('book_image')->getClientOriginalExtension()  . ';base64,' . base64_encode(file_get_contents($request->file('book_image')));
                    $book = new Book([
                        'book_name' => $request->get('book_name'),
                        'author' => $request->get('author'),
                        "book_image" => $image,
                        "category_id" => $request->get('category'),
                        "description" => $request->get('description'),
                        "rate" => 0,
                        "copies_num" => $request->get('copies_num')
                        ]);
            
                    $book->save();
            
                    return redirect('books')->with('success', 'Book saved successfully!');
                } 
                catch (FileNotFoundException $e) {
                    return redirect('/books/create')->withErrors('Book Image not saved')->withInput();
                }
            }
            else{
                return redirect('/books/create')->withErrors('Image not valid')->withInput();
            }
        }else{
            return redirect('/books/create')->withErrors('Image not found')->withInput();

        }

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
        // $this->authorize('view',$book) ; 

               $book = Book::find($id);
               $relatedBooks = Book::where('category_id','=',$book->category_id)->where('id','!=',$book->id)->get() ; 
               $this->authorize('view',$book) ; 
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

               $rel = UserBook::where('user_id','=',$user_id)->where('book_id','=',$book->id)->get() ; 
                
               if (sizeof($rel)>0)
                $relations = $rel[0] ; 

        return view('books.show', compact('book' , 'relations','relatedBooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('admin.books.edit',['categories' => $categories,'book'=>$book]);
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
        $validator = Validator::make($request->all(), [
            'book_name' => [
                'required',
                Rule::unique('books','book_name')->ignore($book->id),
            ],
            'category'=>['required'],
            'copies_num'=>['required'],
            'author'=>['required'],
        ]);

        if ($validator->fails()) {
            return redirect('books/'. $book->id .'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->hasFile('book_image')) {
            if($request->file('book_image')->isValid()) {
                try {
                    
                    $image = 'data:image/' . $request->file('book_image')->getClientOriginalExtension()  . ';base64,' . base64_encode(file_get_contents($request->file('book_image')));
                    $book->book_image = $image;
                } catch (FileNotFoundException $e) {
                    return redirect('books/'. $book->id .'/edit')->withErrors('Book Image not saved')->withInput();
    
                }
            }else{
                
                return redirect('books/'. $book->id .'/edit')->withErrors('Image not valid')->withInput();

            }
        }        

        $book->book_name =  $request->get('book_name');
        $book->category_id = $request->get('category');
        $book->description = $request->get('description');
        $book->author = $request->get('author');
        $book->copies_num = $request->get('copies_num');

        $book->save();

        return redirect('books')->with('success', 'Book Edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {

        $book->delete();
        return redirect('books')->with('success', 'Book deleted!');
    }

    public static function getallBooks()
    {
               $books = Book::paginate(3);
               return $books;
    }
}
