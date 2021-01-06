@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Update Category') }}</h1>
  </div>

  <!-- Row -->
  <div class="row">

  	<div class="modal-body">
	      <form action="{{ route('update.category',$category->id) }}" method="post">
	      	@csrf
	      	<div class="form-group">
              <label for="exampleFormControlInput2">Category English</label>
              <input type="text" name="category_en" class="form-control" value="{{ $category->category_en }}" id="exampleFormControlInput2" required="">

            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Category Bangla</label>
              <input type="text" name="category_bn" value="{{ $category->category_bn }}" class="form-control" id="exampleFormControlInput1" required="">

            </div>
            <button type="submit" class="btn btn-success btn-block">Update Category</button>
	      </form>
	    </div>

  </div>
  <!--Row-->

</div>
@endsection