@foreach ($comments as $comment)   
<div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                   
                </div>
                <div class="col-md-10">
                    <p>
                        <span class="float-left" ><strong>{{ $comment->user->name }}</strong>
                        
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
                    <p>{{$comment->body}}</p>
                 
                </div>
            </div>
            </div>
            </div>
            <br />
            <br />
@endforeach
<br /> <br /> <br /> 