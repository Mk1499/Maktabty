@extends('layouts.user.userHome')
@extends('layouts.app2')

@section('catSideBar')
        <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item"><a href="">{{$category->name}}</a></li>
        @endforeach
        </ul>
@endsection

@section('searchBar')

    <div class='col-2 offset-2'>
         <input class="form-control form-control" type="text" placeholder="Search" aria-label="Search">
    </div>
    <div class='col-3'>
        <div>
            <span>Order By </span>
            <div class="btn-group" role="group" aria-label="First group">
                <button type="button" class="btn btn-secondary">Rate</button>
                <button type="button" class="btn btn-secondary">Latest</button>
            </div>
        </div>
    </div>
@endsection

@section('booksDiv')
                <div class='row'>

                @foreach($books as $book)

                    <div class='col-3'>
                            <div class='row'>
                                <div class='thumbnail col-12'>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" alt="" class="img-thumbnail">
                                </div>
                            </div>

                            <div class='row'>
                                    <div class='col-6 offset-6'>
                                        <div class="avg_rate">
                                            
                                            @for ($i = 1; $i <= $book->rate; $i++)
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                            @endfor

                                            @for ($i = 1; $i <= 5-$book->rate; $i++)
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                            @endfor

                                        </div>
                                    </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <h3>{{$book->book_name}}</h3>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <h5><span>By: </span>{{$book->author}}</h5>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <p>{{$book->description}}</p>
                                </div>
                            </div>

                            <!--<div class="row">
                                <div class='col-8'>
                                    <span >{{$book->copies_num}} copies available</span>
                                </div>
                                <div class='col-1 offset-1'>
                                    <span style="font-size:200%;color:red;">&hearts;</span>
                                </div>
                            </div>-->

                            <div class='row'>
                                <div class='col-12 text-center'>
                                    <button class='btn btn-primary btn-block'>Lease</button>
                                </div>
                            </div>
                    </div>
                @endforeach
                </div>
                <br><br>
                <div class='container'>
                    <div style='margin-left: 280px;'>
                        {{ $books->links() }}                    
                    </div>
                </div>
@endsection
