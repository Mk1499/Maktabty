@extends('layouts.admin.nav')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">

    <h1 class="display-5">Add a Category</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('categories.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Category Name:</label>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}"/>
          </div>

          <div class="form-group">
              <label for="description">Description:</label>
              <textarea class="form-control" name="description" rows="5" value="{{ old('description','') }}" ></textarea>
          </div>

          <button type="submit" class="btn btn-primary-outline" style="float:right">Add Category</button>
      </form>
  </div>
</div>
</div>
@endsection