@extends('layouts.user.userHome')
@extends('layouts.app3')

@section('catSideBar')
        <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item">{{$category->name}}</li>
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

                    <div class='col-3'>
                            <div class='row'>
                                <div class='thumbnail col-12'>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" alt="" class="img-thumbnail">
                                </div>
                            </div>

                            <div class='row'>
                                    <div class='col-6 offset-6'>
                                        <div class="avg_rate">
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                        </div>
                                    </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <h3>Inferno</h3>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe a perferendis libero similique delectus dolores,</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class='col-8'>
                                    <span >2 copies available</span>
                                </div>
                                <div class='col-1 offset-1'>
                                    <span style="font-size:200%;color:red;">&hearts;</span>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12 text-center'>
                                    <button class='btn btn-primary btn-block'>Lease</button>
                                </div>
                            </div>
                    </div>

                    <div class='col-3'>
                            <div class='row'>
                                <div class='thumbnail col-12'>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" alt="" class="img-thumbnail">
                                </div>
                            </div>

                            <div class='row'>
                                    <div class='col-6 offset-6'>
                                        <div class="avg_rate">
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                        </div>
                                    </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <h3>Inferno</h3>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe a perferendis libero similique delectus dolores,</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class='col-8'>
                                    <span >2 copies available</span>
                                </div>
                                <div class='col-1 offset-1'>
                                    <span style="font-size:200%;color:red;">&hearts;</span>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12 text-center'>
                                    <button class='btn btn-primary btn-block'>Lease</button>
                                </div>
                            </div>
                    </div>

                    <div class='col-3'>
                            <div class='row'>
                                <div class='thumbnail col-12'>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" alt="" class="img-thumbnail">
                                </div>
                            </div>

                            <div class='row'>
                                    <div class='col-6 offset-6'>
                                        <div class="avg_rate">
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                        </div>
                                    </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <h3>Inferno</h3>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe a perferendis libero similique delectus dolores,</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class='col-8'>
                                    <span >2 copies available</span>
                                </div>
                                <div class='col-1 offset-1'>
                                    <span style="font-size:200%;color:red;">&hearts;</span>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12 text-center'>
                                    <button class='btn btn-primary btn-block'>Lease</button>
                                </div>
                            </div>
                    </div>

                    <div class='col-3'>
                            <div class='row'>
                                <div class='thumbnail col-12'>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" alt="" class="img-thumbnail">
                                </div>
                            </div>

                            <div class='row'>
                                    <div class='col-6 offset-6'>
                                        <div class="avg_rate">
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                        </div>
                                    </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <h3>Inferno</h3>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe a perferendis libero similique delectus dolores,</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class='col-8'>
                                    <span >2 copies available</span>
                                </div>
                                <div class='col-1 offset-1'>
                                    <span style="font-size:200%;color:red;">&hearts;</span>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12 text-center'>
                                    <button class='btn btn-primary btn-block'>Lease</button>
                                </div>
                            </div>
                    </div>
                    <div class='col-3'>
                            <div class='row'>
                                <div class='thumbnail col-12'>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41AGmIw-4aL.jpg" alt="" class="img-thumbnail">
                                </div>
                            </div>

                            <div class='row'>
                                    <div class='col-6 offset-6'>
                                        <div class="avg_rate">
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/FilledStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                                    <img src={{ asset('images/EmptyStar.png') }} />
                                        </div>
                                    </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <h3>Inferno</h3>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12'>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe a perferendis libero similique delectus dolores,</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class='col-8'>
                                    <span >2 copies available</span>
                                </div>
                                <div class='col-1 offset-1'>
                                    <span style="font-size:200%;color:red;">&hearts;</span>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-12 text-center'>
                                    <button class='btn btn-primary btn-block'>Lease</button>
                                </div>
                            </div>
                    </div>
                </div>
@endsection
