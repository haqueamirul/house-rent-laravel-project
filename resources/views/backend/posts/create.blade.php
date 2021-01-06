@extends('layouts.admin')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Add Post') }}</h1>
  </div>

  <!-- Row -->
  <div class="row"> 
  	<div class="col-lg-12">
          
        <div class="card mb-4">
            <div class="card-body">
              <form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
              	@csrf
              	<div class="row">
	                <div class="form-group col-md-6">
	                  <label for="titleen">Title English</label>
	                  <input type="text" class="form-control" id="titleen" name="title_en">
	                </div>
	                <div class="form-group col-md-6">
	                  <label for="titlebn">Title Bangla</label>
	                  <input type="text" class="form-control" id="titlebn" name="title_bn">
	                </div>
                </div>
                <div class="row">
	                <div class="form-group col-md-12">
	                  <label for="desc_en">Description English</label>
	                  <textarea class="form-control" id="desc_en" name="desc_en" rows="5"></textarea>
	                </div>
                </div>
                <div class="row">
	                <div class="form-group col-md-12">
	                  <label for="desc_bn">Description Bangla</label>
	                  <textarea class="form-control" id="desc_bn" name="desc_bn" rows="5"></textarea>
	                </div>
                </div>

                <div class="row">
	                <div class="form-group col-md-3">
	                  <label for="titleen">Bedroom</label>
	                  <input type="number" class="form-control" id="titleen" name="bed_en">
	                </div>
	                <!-- <div class="form-group col-md-3">
	                  <label for="titlebn">Bed Room Bangla</label>
	                  <input type="number" class="form-control" id="titlebn" name="bed_bn">
	                </div> -->
	                <div class="form-group col-md-3">
	                  <label for="titleen">Bathroom</label>
	                  <input type="number" class="form-control" id="titleen" name="bath_en">
	                </div>
	                <div class="form-group col-md-3">
	                  <label for="titleen">Balcony</label>
	                  <input type="number" class="form-control" id="titleen" name="belconi_en">
	                </div>
	                <div class="form-group col-md-3">
	                  <label for="titleen">Garage</label>
	                  <input type="number" class="form-control" id="titleen" name="garage_en">
	                </div>

              </div>

              <div class="row">
	                <div class="form-group col-md-3">
	                  <label for="titleen">Price English</label>
	                  <input type="text" class="form-control" id="titleen" name="price_en">
	                </div>
	                <div class="form-group col-md-3">
	                  <label for="titlebn">Price Bangla</label>
	                  <input type="text" class="form-control" id="titlebn" name="price_bn">
	                </div>

	                <div class="col-md-6">
	                	<div class="row">
	                		<div class="custom-control custom-radio col-md-6" style="padding-top: 40px; padding-left: 50px;">
		                        <input type="radio" id="fixed" name="price_fixed" value="1" class="custom-control-input">
		                        <label class="custom-control-label" for="fixed">Fixed Price</label>
		                     </div>
		                     <div class="custom-control custom-radio col-md-6" style="padding-top: 40px; padding-left: 50px;">
		                        <input type="radio" id="negotiation" name="price_fixed" value="2" class="custom-control-input">
		                        <label class="custom-control-label" for="negotiation">Negotiation</label>
		                     </div>
	                	</div>
	                </div>
              </div>

              <div class="row">
	                <div class="col-md-6">
	                	<div class="row">
	                		<div class="custom-control custom-radio col-md-6" style="padding-top: 40px; padding-left: 50px;">
		                        <input type="radio" id="line_gas" name="gas" value="1" class="custom-control-input">
		                        <label class="custom-control-label" for="line_gas">Line Gas</label>
		                     </div>
		                     <div class="custom-control custom-radio col-md-6" style="padding-top: 40px; padding-left: 50px;">
		                        <input type="radio" id="silindergas" name="gas" value="2" class="custom-control-input">
		                        <label class="custom-control-label" for="silindergas">Cylinder Gas</label>
		                     </div>
	                	</div>
	                </div>
	                <div class="form-group col-md-6">
	                  <label>Category</label>
	                  <select class="form-control" name="cat_id">
	                  	<option selected="" disabled="">===Choose one===</option>
	                  	@foreach($category as $row)
	                  		<option value="{{$row->id}}">{{ $row->category_en }} | {{ $row->category_bn }}</option>
	                  	@endforeach
	                  </select>
	                </div>
                </div>

                <div class="row">
	                <div class="form-group col-md-6">
	                  <label>Country</label>
	                  <select class="form-control" name="country_id">
	                  	<option selected="" disabled="">===Choose one===</option>
	                  	@foreach($country as $row)
	                  		<option value="{{$row->id}}">{{ $row->country_en }} | {{ $row->country_bn }}</option>
	                  	@endforeach
	                  </select>
	                </div>
	                <div class="form-group col-md-6">
	                  <label>Division</label>
	                  <select class="form-control" name="division_id" id="division_id">
	                  	<option selected="" disabled="">===Choose one===</option>

	                  </select>
	                </div>
                </div>

                <div class="row">
	                <div class="form-group col-md-6">
	                  <label>District</label>
	                  <select class="form-control" name="dist_id">
	                  	<option selected="" disabled="">===Choose one===</option>
	                  	@foreach($district as $row)
	                  		<option value="{{$row->id}}">{{ $row->district_en }} | {{ $row->district_bn }}</option>
	                  	@endforeach
	                  </select>
	                </div>
	                <div class="form-group col-md-6">
	                  <label>Subdistrict</label>
	                  <select class="form-control" name="subdist_id" id="subdist_id">
	                  	<option selected="" disabled="">===Choose one===</option>

	                  </select>
	                </div>
                </div>

                <div class="row">
	                <div class="form-group col-md-6">
	                  <label for="titleen">Area English</label>
	                  <input type="text" class="form-control" id="titleen" name="area_en">
	                </div>
	                <div class="form-group col-md-6">
	                  <label for="titlebn">Area Bangla</label>
	                  <input type="text" class="form-control" id="titlebn" name="area_bn">
	                </div>
                </div>
                <div class="row">
	                <div class="form-group col-md-6">
	                  <label for="titleen">Full Address English</label>
	                  <input type="text" class="form-control" id="titleen" name="fulladdress_en">
	                </div>
	                <div class="form-group col-md-6">
	                  <label for="titlebn">Full Address Bangla</label>
	                  <input type="text" class="form-control" id="titlebn" name="fulladdress_bn">
	                </div>
                </div>
                <div class="row">
	                <div class="form-group col-md-6">
	                  <label for="titleen">Phone Number English</label>
	                  <input type="text" class="form-control" id="titleen" name="phone_en">
	                </div>
	                <div class="form-group col-md-6">
	                  <label for="titlebn">Phone Number Bangla</label>
	                  <input type="text" class="form-control" id="titlebn" name="phone_bn">
	                </div>
                </div>

                <div class="row">
	                <div class="form-group col-md-6">
	                  <label for="titleen">Email</label>
	                  <input type="text" class="form-control" id="titleen" name="email">
	                </div>
	                <div class="form-group col-md-6">
	                  <div class="custom-file" style="margin-top: 33px;">
	                    <input type="file" class="custom-file-input" id="customFile" name="image" >
	                    <label class="custom-file-label" for="customFile">Upload Images</label>
	                    <!-- <input type="file" name="images[]" multiple="multiple"> -->
	                  </div>
	                </div>
                </div>

                <input type="text" name="status" value="1" style="display: none;">

                <button type="submit" class="btn btn-success btn-block">Submit</button>
              </form>
            </div>
          </div>
          
  	</div>
  </div>
  <!--Row-->

</div>

<script type="text/javascript">
   $(document).ready(function() {
         $('select[name="country_id"]').on('change', function(){
             var country_id = $(this).val();
             if(country_id) {
                 $.ajax({
                     url: "{{  url('/get/division/') }}/"+country_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        $("#division_id").empty();
                              $.each(data,function(key,value){
                                  $("#division_id").append('<option value="'+value.id+'">'+value.division_bn+' | '+value.division_en+'</option>');
                              });


                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

</script>

<script type="text/javascript">
   $(document).ready(function() {
         $('select[name="dist_id"]').on('change', function(){
             var dist_id = $(this).val();
             if(dist_id) {
                 $.ajax({
                     url: "{{  url('/get/subdistrict/') }}/"+dist_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        $("#subdist_id").empty();
                              $.each(data,function(key,value){
                                  $("#subdist_id").append('<option value="'+value.id+'">'+value.subdistrict_bn+' | '+value.subdistrict_en+'</option>');
                              });


                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

</script>


@endsection

