@extends('admin.index')
@section('title','List Category')

@section('content')

    <div class="container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($listCategory as $category)
              <tr>
                <th scope="row">{{$category->category_id}}</th>
                <td>{{$category->category_name}}</td>
                <td>{{$category->description}}</td>
                <td>
                  <a href="{{route('category.edit',['category' => $category->category_id])}}" class="btn btn-primary">Edit</a>
    
                  <form action="{{route('category.destroy',['category' => $category->category_id])}}" method="post">
                      @csrf @method('delete')
                      <button onclick="return confirm('Are you sure want to delete this category?')" class="btn btn-danger">
                        Delete
                      </button>
                  </form>
                </td>
              </tr>
            @endforeach
    
          </tbody>
        </table>
      </div>

  
@endsection