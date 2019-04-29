@extends('../layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="row">
                    <div class="col-md-4">
                        <img src={{$book->book_image}} class="book_img">
                    </div>
                    <div class="col-md-8 ">
                        <h3> {{$book->book_name}} </h3>
                        <div class="avg_rate">
                            <img src={{ asset('images/FilledStar.png') }} >
                            <img src={{ asset('images/FilledStar.png') }} >
                            <img src={{ asset('images/FilledStar.png') }} >
                            <img src={{ asset('images/EmptyStar.png') }} >
                            <img src={{ asset('images/EmptyStar.png') }} >
                        </div>
                        <div class="book_description">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, fuga corporis consectetur aspernatur aperiam soluta eveniet deleniti facere harum possimus est veritatis officiis modi, quisquam dolores veniam quis id dolore?
                            </p>
                        </div>
                        <p>2 Copies available</p>
                        <button class="btn btn-success text-center">Lease</button>
                    </div>
                </div>    
            </div>
    
            <div class="col-sm-6">
                <img src={{ asset('images/EmptyHeart.png') }} style="float: right" width="50" height="50" >
            </div>
        </div>
    </div>

<br /> <br /> <br />

    <div class="container">
            <div class="row">
                <div class="col-sm-8">
                        
                                <h2 >Add your Review </h2>
                     <div>
                        <form method="POST" action="{{route('comments.store')}}" >
                            @csrf
                         <div class="row">
                           <div class = "col-sm-9">
                           <div class="form-group">
                      <textarea class="form-control" placeholder="Add Your Review Here" name="body" rows="5" id="comment"></textarea>
                      <input type="hidden" name="book_id" value="{{ $book->id }}" />
                           </div> 
                           </div>
                           
                         </div>
                         <div class="row">
                           <div class = "col-sm-12">
                           <button type="submit" class="btn btn-danger">Add Review</button>
                           </div>
                         </div>  
                        </form>
                     
                    </div>
                </div>

                <div class="col-sm-4">
                            <img src={{ asset('images/EmptyStar.png') }} >
                            <img src={{ asset('images/EmptyStar.png') }} >
                            <img src={{ asset('images/EmptyStar.png') }} >
                            <img src={{ asset('images/EmptyStar.png') }} >
                            <img src={{ asset('images/EmptyStar.png') }} >
                </div>
            </div>
            <hr />
            <br /> <br /> <br />
            <h4>Display Comments</h4>
            @include('books.commentsDisplay', ['comments' => $book->comments, 'book_id' => $book->id])
    
        </div>

       
@endsection
