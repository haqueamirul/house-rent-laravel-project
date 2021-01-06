@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Districts') }}</h1>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->

    <!-- DataTable with Hover -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">{{ __('All Posts') }}</h6> 
        </div>


        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
              <tr>
                <th>Category</th>
                <th>Title</th>
                <th>Pictures</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

            @foreach($post as $row)

              <tr>
                <td>{{ $row->category_bn }} </td>
                <td>{{ $row->title_bn }} </td>
                
                <td><img src="{{ URL::to($row->image) }}" style="width: 80px; height: 80px;"></td>
                <td>{{ $row->post_date }} </td>
                <td>
                	<a href="" class="btn btn-info"><i class="fa fa-edit"></i></a>
                	<a href="" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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

</div>
@endsection