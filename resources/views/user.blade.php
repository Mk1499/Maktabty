@extends('layouts.user.userHome')
@extends('layouts.app2')

@section('catSideBar')
        <ul class="list-group">
        @foreach($categories as $category)
            @if($filterMode=='allBooks')
                <li class="list-group-item"><a href="{{ url('booksByCat/'.$category->id.'/3')}}" style="background-color:{{ $category->id==$current_cat ? '#ffff99':'none'}}">{{$category->name}}</a></li>
            @elseif($filterMode=='leasedBooks')
                <li class="list-group-item"><a href="{{ url('leased/bycat/'.$category->id.'/3')}}" style="background-color:{{ $category->id==$current_cat ? '#ffff99':'none'}}">{{$category->name}}</a></li>
            @elseif($filterMode=='favBooks')
                <li class="list-group-item"><a href="{{ url('favourite/bycat/'.$category->id.'/3')}}" style="background-color:{{ $category->id==$current_cat ? '#ffff99':'none'}}">{{$category->name}}</a></li>
            @endif
        @endforeach
        </ul>
@endsection

@section('searchBar')
        <script>
            document.getElementById('{{$filterMode}}').style.backgroundColor='#ffff99';
        </script>

    <div class='col-2 offset-2'>
         <input class="form-control form-control" type="text" placeholder="Search" aria-label="Search">
    </div>
    <div class='col-3'>
        <div>
            <span>Order By </span>
            <div class="btn-group" role="group" aria-label="First group">
            @if($current_cat != 0)
                 @if($filterMode=='allBooks')
                    <a href="{{ url('booksByCat/'.$current_cat.'/1')}}"><button type="button" class="btn btn-outline-info" id='rateBtn'>Rate</button></a>
                    <a href="{{ url('booksByCat/'.$current_cat.'/2')}}"><button type="button" class="btn btn-outline-info" id='latestBtn'>Latest</button></a>
                @elseif($filterMode=='leasedBooks')
                    <a href="{{ url('leased/bycat/'.$current_cat.'/1')}}"><button type="button" class="btn btn-outline-info" id='rateBtn'>Rate</button></a>
                    <a href="{{ url('leased/bycat/'.$current_cat.'/2')}}"><button type="button" class="btn btn-outline-info" id='latestBtn'>Latest</button></a>
                @elseif($filterMode=='favBooks')
                    <a href="{{ url('favourite/bycat/'.$current_cat.'/1')}}"><button type="button" class="btn btn-outline-info" id='rateBtn'>Rate</button></a>
                    <a href="{{ url('favourite/bycat/'.$current_cat.'/2')}}"><button type="button" class="btn btn-outline-info" id='latestBtn'>Latest</button></a>
                @endif
                    
            @else
                @if($filterMode=='allBooks')
                    <a href="{{ url('user/1')}}"><button type="button" class="btn btn-outline-info" id='rateBtn'>Rate</button></a>
                    <a href="{{ url('user/2')}}"><button type="button" class="btn btn-outline-info" id='latestBtn'>Latest</button></a>
                @elseif($filterMode=='leasedBooks')
                    <a href="{{ url('leased/1')}}"><button type="button" class="btn btn-outline-info" id='rateBtn'>Rate</button></a>
                    <a href="{{ url('leased/2')}}"><button type="button" class="btn btn-outline-info" id='latestBtn'>Latest</button></a>
                @elseif($filterMode=='favBooks')
                    <a href="{{ url('favourite/1')}}"><button type="button" class="btn btn-outline-info" id='rateBtn'>Rate</button></a>
                    <a href="{{ url('favourite/2')}}"><button type="button" class="btn btn-outline-info" id='latestBtn'>Latest</button></a>
                @endif
            @endif


            @if($order_by==1)
                <script>
                    document.getElementById('rateBtn').classList.add("active");
                 </script>
            @elseif($order_by==2)
                <script>
                    document.getElementById('latestBtn').classList.add("active");
                </script>
            @endif

            </div>
        </div>
    </div>
@endsection

@section('booksDiv')
                <div class='row'>
                @foreach($books as $book)
                    <div class='col-3 book' value=[{{$book->id}},{{$book->category_id}}]>
                            <div class='row'>
                                <div class='thumbnail col-12'>
                                    <img src={{$book->book_image}} alt="" class="img-thumbnail">
                                </div>
                            </div>

                            <div class='row'>
                                    <div class='col-6 offset-6'>
                                        <div class="avg_rate">
                                            
                                            @for ($i = 1; $i <= $book->rate; $i++)
                                                    <img src="{{ asset('images/FilledStar.png') }}" />
                                            @endfor

                                            @for ($i = 1; $i <= 5-$book->rate; $i++)
                                                    <img src="{{ asset('images/EmptyStar.png') }}" />
                                            @endfor

                                        </div>
                                    </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    
                                    <h3><a href="{{url('/books/'.$book->id)}}">{{$book->book_name}}</a></h3>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <h5><span>By: </span>{{$book->author}}</h5>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <p style="word-wrap:break-word">{{$book->description}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class='col-8'>
                                    <span >{{$book->copies_num}} copies available</span>
                                </div>
                                <div class='col-1 offset-1'>
                                    <!-- <span style="font-size:200%;color:red;">&hearts;</span> -->
                                    <img id ="favIcon" src={{ $book->favourite == 0 ? asset('images/EmptyHeart.png') : asset('images/FilledHeart.png') }}  width="20" height="20" >
                                </div>
                            </div>

                            <br>

                            <div class='row'>
                                <div class='col-12 text-center'>
                                    <button class='btn btn-primary btn-block' {{($book->copies_num <= 0) || ($book->leased === 1) ?  'disabled':null}}>Lease</button>
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


