@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Update Division') }}</h1>
  </div>

  <!-- Row -->
  <div class="row">

  	<div class="modal-body">
	      <form action="{{ route('update.division',$divi->id) }}" method="post">
	      	@csrf
	      	<div class="form-group">
              <label for="exampleFormControlInput2">Division English</label>
              <input type="text" name="division_en" class="form-control" value="{{ $divi->division_en }}" id="exampleFormControlInput2"  required="">

            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Division Bangla</label>
              <input type="text" name="division_bn" value="{{ $divi->division_bn }}" class="form-control" id="exampleFormControlInput1" required="">

            </div>

            <div class="form-group">
              <label for="exampleFormControlInputd">Choose Country</label>
              <select class="form-control" name="country_id">
              	<option disabled="" selected="">==Choose one==</option>
              	@foreach($country as $row)
              	<option value="{{$row->id}}" <?php if($row->id==$divi->country_id) echo "selected"; ?>>{{ $row->country_en }} | {{ $row->country_bn }} </option>
              	@endforeach
              </select>

            </div>
            <button type="submit" class="btn btn-success btn-block">Update Division</button>
	      </form>
	    </div>

  </div>
  <!--Row-->

</div>
@endsection