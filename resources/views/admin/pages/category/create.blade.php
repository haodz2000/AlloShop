@extends('admin.index')

@section('title','Add Category')

@section('content')
    <h2 class="text-center">Add Category</h2>
    <br>
    <div class="container">
  <form action="{{ route('category.store') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="category_name">Name</label>
      <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Name category..." value="{{old('name')}}">
    </div>
    @error('category_name')
      <div class='alert alert-danger' role='alert'>
        {{ $message }}
      </div>
    @enderror
      <br>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" placeholder="Description..." name="description" id="description" rows="5">{{old('description')}}</textarea>
    </div>
    @error('description')
      <div class='alert alert-danger' role='alert'>
        {{ $message }}
      </div>
    @enderror
      <br>
    <button type="submit" class="btn btn-primary">Add now</button>
  </form>
    </div>

@endsection