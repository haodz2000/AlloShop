@extends('admin.index')

@section('title','Edit Category')

@section('content')
    <h2 class="text-center">Edit Category</h2>
    <br>
    <div class="container">
  <form action="{{ route('category.update',[$category->category_id]) }}" method="post">
    @csrf @method('put')
    <div class="form-group">
      <label for="category_name">Name</label>
      <input type="text" name="category_name" id="category_name" class="form-control"  value="{{$category->category_name}}">
    </div>
    @error('category_name')
      <div class='alert alert-danger' role='alert'>
        {{ $message }}
      </div>
    @enderror
      <br>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control"  name="description" id="description" rows="5">{{$category->description}}</textarea>
    </div>
    @error('description')
      <div class='alert alert-danger' role='alert'>
        {{ $message }}
      </div>
    @enderror
      <br>
    <button type="submit" class="btn btn-primary">Update now</button>
  </form>
    </div>

@endsection