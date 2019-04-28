@extends('layouts.user.userHome')

@section('catSideBar')
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">Art</li>
            <li class="list-group-item">Comedy</li>
            <li class="list-group-item">Drama</li>
            <li class="list-group-item">tragedy</li>
            <li class="list-group-item">fiction</li>
        </ul>
    </div>
@endsection

@section('searchBar')
    <div class="container">
        <!-- <form class="form-inline md-form form-sm mt-0">
            <i class="fas fa-search" aria-hidden="true"></i>
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
        </form>

        <div>
            <span>Order By: </span>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
            </div>
        </div>
 -->
    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
        <div class="input-group">
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary">Rate</button>
            <button type="button" class="btn btn-secondary">Latest</button>
        </div>
    </div>
</div>
@endsection
@section('booksDiv')
    <div class='container'>        
        <div class='row'>
                <div class='col-lg-4' style='text-align:center ; display: inline-block'>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" height=200 width=200 alt="">
                    <div class='row'>
                        <div class='col-lg-4'>
                            <h1>Inferno</h1>
                        </div>
                        <div class='col-lg-2'></div>
                        <div class='col-lg-6'>
                            <div class="avg_rate">
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/EmptyStar.png') }} >
                                    <img src={{ asset('images/EmptyStar.png') }} >
                            </div>
                        </div>
                        <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe a perferendis libero similique delectus dolores, </p>
                            <div class="row">
                                <div class='col-lg-8'>
                                    <p>2 copies available</p>
                                </div>
                                <div class='col-lg-4'>
                                <span style="font-size:300%;color:red;">&hearts;</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class='btn btn-primary' style = "width: 240px">Lease</button>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4' style='border: solid black 1px;text-align:center ; display: inline-block'>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" height=200 width=200 alt="">
                    <div class='row'>
                        <div class='col-lg-4'>
                            <h1>Inferno</h1>
                        </div>
                        <div class='col-lg-2'></div>
                        <div class='col-lg-6'>
                            <div class="avg_rate">
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/EmptyStar.png') }} >
                                    <img src={{ asset('images/EmptyStar.png') }} >
                            </div>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe a perferendis libero similique delectus dolores, </p>
                            <div class="row">
                                <div class='col-lg-8'>
                                    <p>2 copies available</p>
                                </div>
                                <div class='col-lg-4'>
                                <span style="font-size:300%;color:red;">&hearts;</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class='btn btn-primary' style = "width: 240px">Lease</button>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4' style='border: solid black 1px;text-align:center ; display: inline-block'>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" height=200 width=200 alt="">
                    <div class='row'>
                        <div class='col-lg-4'>
                            <h1>Inferno</h1>
                            
                        </div>
                        <div class='col-lg-2'></div>
                        <div class='col-lg-6'>
                            <div class="avg_rate">
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/FilledStar.png') }} >
                                    <img src={{ asset('images/EmptyStar.png') }} >
                                    <img src={{ asset('images/EmptyStar.png') }} >
                            </div>
                        </div>
                        <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe a perferendis libero similique delectus dolores, </p>
                            <div class="row">
                                <div class='col-lg-8'>
                                    <p>2 copies available</p>
                                </div>
                                <div class='col-lg-4'>
                                <span style="font-size:300%;color:red;">&hearts;</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class='btn btn-primary' style = "width: 240px">Lease</button>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
@endsection
