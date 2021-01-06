@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Update Country') }}</h1>
  </div>

  <!-- Row -->
  <div class="row">

  	<div class="modal-body">
	      <form action="{{ route('update.country',$country->id) }}" method="post">
	      	@csrf
	      	<div class="form-group">
              <label for="exampleFormControlInput2">Country English</label>
              <input type="text" name="country_en" class="form-control" value="{{ $country->country_en }}" id="exampleFormControlInput2" placeholder="Write Country English" required="">

            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Country Bangla</label>
              <input type="text" name="country_bn" value="{{ $country->country_bn }}" class="form-control" id="exampleFormControlInput1" placeholder="Write Country Bangla" required="">

            </div>
            <button type="submit" class="btn btn-success btn-block">Update Country</button>
	      </form>
	    </div>

  </div>
  <!--Row-->

</div>
@endsection