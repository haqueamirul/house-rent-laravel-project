@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Update Subdistrict') }}</h1>
  </div>

  <!-- Row -->
  <div class="row">
    
	    <div class="modal-body">
	      <form action="{{ route('update.subdistrict',$subdistrict->id) }}" method="post">
	      	@csrf

             <div class="form-group">
              <label for="exampleFormControlInput2">Subdistrict English</label>
              <input type="text" name="subdistrict_en" class="form-control" value="{{$subdistrict->subdistrict_en}}" id="exampleFormControlInput2" required="">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Subdistrict Bangla</label>
              <input type="text" name="subdistrict_bn" class="form-control" value="{{$subdistrict->subdistrict_bn}}" id="exampleFormControlInput1" required="">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInputd">Choose District</label>
              <select class="form-control" name="district_id">
              	<option disabled="" selected="">==Choose one==</option>
              	@foreach($district as $row)
              	<option value="{{$row->id}}" <?php if($row->id==$subdistrict->district_id) echo "selected"; ?>>{{ $row->district_en }} | {{ $row->district_bn }} </option>
              	@endforeach
              </select>
            </div>

            <button type="submit" class="btn btn-success btn-block">Update Subdistrict</button>
	      </form>
	    </div>

  </div>
  <!--Row-->





</div>
@endsection