@extends('../layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="row">
                    <div class="col-md-4">
                        <img src={{$book->book_image}} class="book_img">
                    </div>
                    <div class="col-md-8 ">
                        <h3> {{$book->book_name}} </h3>
                        
                        <div class="avg_rate">
                            <span id="avg_rate_1" class="ratingStar emptyRatingStar" > &nbsp;</span>
                            <span id="avg_rate_2" class="ratingStar emptyRatingStar" >&nbsp;</span>
                            <span id="avg_rate_3" class="ratingStar emptyRatingStar" >&nbsp;</span>
                            <span id="avg_rate_4" class="ratingStar emptyRatingStar" >&nbsp;</span>
                            <span id="avg_rate_5" class="ratingStar emptyRatingStar" >&nbsp;</span>

                        </div>
                        <div class="book_description">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, fuga corporis consectetur aspernatur aperiam soluta eveniet deleniti facere harum possimus est veritatis officiis modi, quisquam dolores veniam quis id dolore?
                            </p>
                        </div>
                        <p><span id="copies" value={{$book->copies_num}} >{{$book->copies_num}} </span> Copies available</p>
                        <button class="btn btn-success text-center" id = "lease_btn"
                        {{($book->copies_num <= 0) || ($relations->leased === 1) ?  'disabled':null}}
                        >Lease</button>
                        
                    </div>
                </div>    
            </div>
    
            <div id="test" class="col-sm-4">
                <img id ="favIcon" src={{ $relations->favourite == 0 ? asset('images/EmptyHeart.png') : asset('images/FilledHeart.png') }} style="float: right" width="50" height="50" >
                
                
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
                            <span value="1" id ="book_rate_1" class="book_rate ratingStar emptyRatingStar" > &nbsp;</span>
                            <span value="2" id ="book_rate_2" class="book_rate ratingStar emptyRatingStar" >&nbsp;</span>
                            <span value="3" id ="book_rate_3" class="book_rate ratingStar emptyRatingStar" >&nbsp;</span>
                            <span value="4" id ="book_rate_4" class="book_rate ratingStar emptyRatingStar" >&nbsp;</span>
                            <span value="5" id ="book_rate_5" class="book_rate ratingStar emptyRatingStar" >&nbsp;</span>
                </div>
            </div>
            <hr />
            <br /> <br /> <br />
            <hr>
            <h4>Display Comments</h4>
            @if (sizeof($book->comments) > 0)
            @include('books.commentsDisplay', ['comments' => $book->comments, 'book_id' => $book->id])
            @else
                <h3 class="text-center"> Sorry but there is no comments for this book </h3>
            @endif
    
        </div>

       
@endsection

@section('javascript')
<meta name="csrf-token" content="{{ csrf_token() }}" />
        <script>

            $(document).ready(function(){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                console.log('works') ;
                
    // ================================ Click Add Book to Fav Btn ===========================//

                $("#favIcon").click(function(){
                    //alert("Clikced") ; 

                    if (this.getAttribute("src") == "{{asset('images/EmptyHeart.png')}}" )
                    this.setAttribute("src","{{asset('images/FilledHeart.png')}}") ; 
                    else 
                    this.setAttribute("src","{{asset('images/EmptyHeart.png')}}") ;
                    
                    $.ajax({
                        url: "{{url('addToFav')}}",
                        type:"POST" ,
                         
                        data: {'_token':'{{csrf_token()}}' ,
                        'book_id' : '{{$book->id}}' ,
                        'favourite': '{{ $relations->favourite == 1 ? 0 : 1 }}' } , 
                        success:function(data){
                            //alert(data);
                        },error:function(){ 
                            alert("error!!!!");
                        }
                    });
                     //end of ajax
                    {{$relations->favourite == 0 ? $relations->favourite = 1 : $relations->favourite = 0}}

            })

            // ================================ Click Lease Book Btn ===========================//

            $("#lease_btn").click(function(){
                $.ajax({
                    url: "{{url('leaseBook')}}",
                    type:"POST" ,
                     
                    data: {'_token':'{{csrf_token()}}' , 
                            'book_id' : '{{$book->id}}' , } , 
                    success:function(data){
                        
                    },error:function(){ 
                        alert("error!!!!");
                    }
                });

                $("#copies").html(parseInt($("#copies").html() ) -1 )
                 //end of ajax
                 $(this).attr('disabled','true') ; 
            })

    // ================================ Rate Book ===========================//

        $(".book_rate").click(function(){

            $.ajax({
                url: "{{url('rateBook')}}",
                type:"POST" ,
                 
                data: {'_token':'{{csrf_token()}}' , 
                        'book_id' : '{{$book->id}}' ,
                        'rate': $(this).attr("value") } , 
                success:function(data){
                    
                },error:function(){ 
                    alert("error!!!!");
                }
            });

            for (let i=1 ; i<=5 ; i++){
               
                if (i <= $(this).attr("value") ){
                    
                    $(`#book_rate_${i}`).removeClass('emptyRatingStar').addClass('filledRatingStar')
                }
            }

            })
    // ================================ Diplay Avg Rating ===========================//

            let avgRate = {{$book->rate}}; 
            console.log("Rate : ",avgRate) ; 

            for (let i=1 ; i<=5 ; i++){
               
                if (i <= avgRate){
                    
                    $(`#avg_rate_${i}`).removeClass('emptyRatingStar').addClass('filledRatingStar')
                }
            }
        })
        </script>

@endsection
