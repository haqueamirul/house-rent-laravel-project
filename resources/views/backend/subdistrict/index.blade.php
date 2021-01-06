@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Subdistricts') }}</h1>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->

    <!-- DataTable with Hover -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">{{ __('All Subdistrict') }}</h6> 
        </div>

        <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            id="#myBtn" style="float: right; margin-right: 20px;">
            Add New Subdistrict
          </button>
        </div>
        <!-- <a href="#"><button type="button" class="btn btn-success mb-1" style="float: right; margin-right: 20px;">Add New Country</button></a> -->
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
              <tr>
                <th>Subdistrict Name Bangla</th>
                <th>Subdistrict Name English</th>
                <th>District</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

            @foreach($subdistrict as $row)

              <tr>
                <td>{{ $row->subdistrict_bn }} </td>
                <td>{{ $row->subdistrict_en }} </td>
                <td>{{ $row->district_en }} </td>
                <td>
                	<a href="{{ URL::to('edit/subdistrict/'.$row->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                	<a href="{{ route('delete.subdistrict',$row->id) }}" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
             
             @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Row-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <h5 class="modal-title" id="exampleModalLabel">Insert New subdistrict</h5>
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	      </button>
	    </div>
	    <div class="modal-body">
	      <form action="{{ route('store.subdistrict') }}" method="post">
	      	@csrf
	      	<div class="form-group">
              <label for="exampleFormControlInput2">subdistrict English</label>
              <input type="text" name="subdistrict_en" class="form-control @error('subdistrict_en') is-invalid @enderror" id="exampleFormControlInput2" placeholder="Write subdistrict English" required="">
                @error('subdistrict_en')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">subdistrict Bangla</label>
              <input type="text" name="subdistrict_bn" class="form-control @error('subdistrict_bn') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Write subdistrict Bangla" required="">
                @error('subdistrict_bn')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInputd">Choose District</label>
              <select class="form-control" name="district_id">
              	<option disabled="" selected="">==Choose one==</option>
              	@foreach($district as $row)
              	<option value="{{$row->id}}">{{ $row->district_en }} | {{ $row->district_bn }} </option>
              	@endforeach
              </select>

            </div>
            <button type="submit" class="btn btn-success btn-block">Submit</button>
	      </form>
	    </div>
	  </div>
	</div>
</div>

</div>
@endsection