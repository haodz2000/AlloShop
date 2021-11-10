@extends('admin.index')
@section('title', "Code discount")
@section('content')
<div class="row">
    <div class="col-lg-12 mx-auto">
    <div class="card">
       <div class="card-header py-3 bg-transparent"> 
         <div class="d-sm-flex align-items-center">
           <h5 class="mb-2 mb-sm-0">Create Code-Discount</h5>
           <div class="ms-auto">
             <form action="{{route('code-discount.index')}}" method="get">
               <button type="submit" class="btn btn-primary">List Code-Discount</button>
             </form>
           </div>
         </div>
       </div>
       <div class="card-body">
          <div class="row g-3">
            <div class="col-12 col-lg-12">
               <div class="card shadow-none bg-light border">
                 <div class="card-body">
                   <form class="row g-3" enctype="multipart/form-data" id="add-new-product" method="POST" action="{{route('code-discount.store')}}">
                     @csrf
                     <div class="col-12 col-lg-4">
                       <label class="form-label">Code</label>
                       <input type="text" class="form-control" required placeholder="Code" name="code" >
                     </div>
                     @error('code')
                        <div class='alert alert-danger' role='alert'>
                            {{ $message }}
                        </div>
                     @enderror

                     <div class="col-12 col-lg-4">
                        <label class="form-label">Discount</label>
                        <input step="0.01" type="number" class="form-control" required placeholder="Discount" name="discount" >
                      </div>
                      @error('discount')
                         <div class='alert alert-danger' role='alert'>
                             {{ $message }}
                         </div>
                      @enderror

                     <div class="col-12 col-lg-4">
                       <label class="form-label">Status</label>
                       <select class="form-select" aria-label="Default select example" name="status">
                        <option selected value="1">Kích hoạt</option>
                        <option value="0">Không kích hoạt</option>
                       </select>
                     </div>    
                     
                     <button type="submit" class="btn btn-primary add-new-product">Create</button>
                   </form>
                 </div>
               </div>
            </div>
          </div><!--end row-->
        </div>
       </div>
    </div>
</div><!--end row-->

@endsection 