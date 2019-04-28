@extends('layouts.Book.bookDetails')

@section('bookInfo')
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" class="book_img">
                </div>
                <div class="col-md-8 ">
                    <h3> Inferno </h3>
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
@endsection

@section('addComment')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    
                            <h2 >Add your Review </h2>
                 <div>
                    <form>
                     <div class="row">
                       <div class = "col-sm-9">
                       <div class="form-group">
                  <textarea class="form-control" placeholder="Add Your Review Here" name="review_body" rows="5" id="comment"></textarea>
                       </div> 
                       </div>
                       <div class = "col-sm-3">
                        <img src={{ asset('images/EmptyStar.png') }} >
                        <img src={{ asset('images/EmptyStar.png') }} >
                        <img src={{ asset('images/EmptyStar.png') }} >
                        <img src={{ asset('images/EmptyStar.png') }} >
                        <img src={{ asset('images/EmptyStar.png') }} >
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
        </div>
    </div>

@endsection


@section('bookReviews')
    
<div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                   
                </div>
                <div class="col-md-10">
                    <p>
                        <span class="float-left" ><strong>userName</strong>
                        
                            <div class="user_rate">
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/EmptyStar.png') }} >
                                    <img src={{ asset('images/EmptyStar.png') }} >
                                </div>
                        
                        </span>
                       
                   </p>
                   <div class="clearfix"></div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae consequuntur voluptatum quasi accusantium ad asperiores maxime dolor beatae mollitia expedita iusto temporibus praesentium, consequatur recusandae, aspernatur veritatis saepe repellendus omnis!</p>
                 
                </div>
            </div>
            </div>
            </div>

<br /> <br /> <br /> <br />


@endsection