@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile Information</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- check -->
                    <form method="post" action="{{route('users.updateProfile', $user)}}">
                        <!-- @method('PATCH') 
                        @csrf -->
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <div class="form-group">

                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
                        </div>

                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" name="username" value="{{ $user->username }}" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}" />
                        </div>

                        <div class="form-group">
                            <label for="nationalid">NationalId:</label>
                            <input type="text" class="form-control" name="nationalid" value="{{ $user->nationalid }}" />
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="text" class="form-control" name="password" value=" " />
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" />
                        </div>
                        <form enctype="multipart/form-data" method="POST">
                            <label>Update Profile Image</label>
                            <input type="file" name="user_image">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



