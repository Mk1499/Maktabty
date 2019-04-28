@extends('layouts.user.userHome')

@section('catSideBar')
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">Art</li>
            <li class="list-group-item">Comedy</li>
            <li class="list-group-item">Drama</li>
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
