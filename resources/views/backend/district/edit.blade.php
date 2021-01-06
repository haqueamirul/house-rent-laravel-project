@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Update District') }}</h1>
  </div>

  <!-- Row -->
  <div class="row">
    
	    <div class="modal-body">
	      <form action="{{ route('update.district',$district->id) }}" method="post">
	      	@csrf

             <div class="form-group">
              <label for="exampleFormControlInput2">District English</label>
              <input type="text" name="district_en" class="form-control" value="{{$district->district_en}}" id="exampleFormControlInput2" required="">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">District Bangla</label>
              <input type="text" name="district_bn" class="form-control" value="{{$district->district_bn}}" id="exampleFormControlInput1" required="">
            </div>

            <button type="submit" class="btn btn-success btn-block">Update District</button>
	      </form>
	    </div>

  </div>
  <!--Row-->





</div>
@endsection