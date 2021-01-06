@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12"> 
			<h4>
				@if(session()->get('lang')=='english')
		            {{ __('Add your Property') }}
		        @else
					{{ __('বিজ্ঞাপন পোষ্ট করুন') }}
				@endif
			</h4>
			<div class="guestpost" style="margin-top: 40px;" >
				<form method="post" action="{{ route('store.userpost') }}" enctype="multipart/form-data">
				@csrf
				  <div class="form-row">
				    <div class="col">
				    	<label>
				    		@if(session()->get('lang')=='english')
					            {{ __('Title English') }}
					        @else
				    			{{ __('টাইটেল  ইংলিশ') }}
				    		@endif
				    	</label>
				      	<input type="text" class="form-control" name="title_en">
				    </div>
				    <div class="col">
				    	<label>
				    		@if(session()->get('lang')=='english')
					            {{ __('Title Bangla') }}
					        @else
				    			{{ __('টাইটেল বাংলা') }}
				    		@endif
				    	</label>
				      	<input type="text" class="form-control" name="title_bn">
				    </div>
				  </div>
				  <div class="form-row">
		            <div class="form-group col-md-12">
		                <label for="desc_en" style="margin-top: 18px;">
		                	@if(session()->get('lang')=='english')
					            {{ __('Description English') }}
					        @else
		                		{{ __('বিবরণ ইংলিশ') }}
		                	@endif
		            	</label>
		                  <textarea class="form-control" id="desc_en" name="desc_en" rows="5"></textarea>
		                </div>
	                </div>
	                <div class="form-row">
		                <div class="form-group col-md-12">
		                  <label for="desc_bn">
		                  	@if(session()->get('lang')=='english')
					            {{ __('Description Bangla') }}
					        @else
		                		{{ __('বিবরণ বাংলা') }}
		                	@endif
		                  		
		              	  </label>
		                  <textarea class="form-control" id="desc_bn" name="desc_bn" rows="5"></textarea>
		                </div>
	                </div>	
	                <div class="row">
		                <div class="form-group col-md-3">
		                  <label for="titleen">
		                  	@if(session()->get('lang')=='english')
					            {{ __('Bedroom') }}
					        @else
		                		{{ __('বেডরুম') }}
		                	@endif
		              	  </label>
		                  <input type="number" class="form-control" id="titleen" name="bed_en">
		                </div>
		                <div class="form-group col-md-3">
		                  <label for="titleen">
		                  	@if(session()->get('lang')=='english')
					            {{ __('Bathroom') }}
					        @else
		                		{{ __('বাথরুম') }}
		                	@endif
		              	  </label>
		                  <input type="number" class="form-control" id="titleen" name="bath_en">
		                </div>
		                <div class="form-group col-md-3">
		                  <label for="titleen">
		                  	@if(session()->get('lang')=='english')
					            {{ __('Balcony') }}
					        @else
		                		{{ __('ব্যালকনি') }}
		                	@endif
		              	  </label>
		                  <input type="number" class="form-control" id="titleen" name="belconi_en">
		                </div>
		                <div class="form-group col-md-3">
		                  <label for="titleen">
		                  	@if(session()->get('lang')=='english')
					            {{ __('Garage') }}
					        @else
		                		{{ __('গ্যারেজ') }}
		                	@endif
		              	  </label>
		                  <input type="number" class="form-control" id="titleen" name="garage_en">
		                </div>		                
	              	</div>
	              	<div class="row">
		                <div class="form-group col-md-3">
		                  <label for="titleen">
		                  	@if(session()->get('lang')=='english')
					            {{ __('Price English') }}
					        @else
		                		{{ __('ভাড়া ইংলিশ (৳)') }}
		                	@endif
		                  	
		              	  </label>
		                  <input type="text" class="form-control" id="titleen" name="price_en">
		                </div>
		                <div class="form-group col-md-3">
		                  <label for="titlebn">
		                  	@if(session()->get('lang')=='english')
					            {{ __('Price Bangla') }}
					        @else
		                		{{ __('ভাড়া বাংলা (৳)') }}
		                	@endif
		              	  </label>
		                  <input type="text" class="form-control" id="titlebn" name="price_bn">
		                </div>

		                <div class="col-md-6">
		                	<div class="row">
		                		<div class="custom-control custom-radio col-md-6" style="padding-top: 40px; padding-left: 50px;">
			                        <input type="radio" id="fixed" name="price_fixed" value="1" class="custom-control-input">
			                        <label class="custom-control-label" for="fixed">
			                        	@if(session()->get('lang')=='english')
								            {{ __('Fixed Price') }}
								        @else
					                		{{ __('ফিক্সড ভাড়া (৳)') }}
					                	@endif
			                    	</label>
			                     </div>
			                     <div class="custom-control custom-radio col-md-6" style="padding-top: 40px; padding-left: 50px;">
			                        <input type="radio" id="negotiation" name="price_fixed" value="2" class="custom-control-input">
			                        <label class="custom-control-label" for="negotiation">
			                        	@if(session()->get('lang')=='english')
								            {{ __('Negotiation') }}
								        @else
					                		{{ __('আলোচনা সাপেক্ষে') }}
					                	@endif
			                    	</label>
			                     </div>
		                	</div>
		                </div>
	              	</div>
	              	<div class="row">
		                <div class="col-md-6">
		                	<div class="row">
		                		<div class="custom-control custom-radio col-md-6" style="padding-top: 40px; padding-left: 50px;">
			                        <input type="radio" id="line_gas" name="gas" value="1" class="custom-control-input">
			                        <label class="custom-control-label" for="line_gas">
			                        	@if(session()->get('lang')=='english')
							            {{ __('Line Gas') }}
								        @else
					                		{{ __('লাইন গ্যাস') }}
					                	@endif
			                    	</label>
			                     </div>
			                     <div class="custom-control custom-radio col-md-6" style="padding-top: 40px; padding-left: 50px;">
			                        <input type="radio" id="silindergas" name="gas" value="2" class="custom-control-input">
			                        <label class="custom-control-label" for="silindergas">
			                        	@if(session()->get('lang')=='english')
							            {{ __('Cylinder Gas') }}
								        @else
					                		{{ __('সিলিন্ডার গ্যাস') }}
					                	@endif
			                    	</label>
			                     </div>
		                	</div>
		                </div>
		                <div class="form-group col-md-6">
		                  <label>
		                  	@if(session()->get('lang')=='english')
				            {{ __('Category') }}
					        @else
		                		{{ __('ক্যাটাগরি') }}
		                	@endif
		              	  </label>
		                  <select class="form-control" name="cat_id">
		                  	<option selected="" disabled="">
		                  		@if(session()->get('lang')=='english')
					            {{ __('===Choose one===') }}
						        @else
			                		{{ __('একটি নির্বাচন করুন') }}
			                	@endif
		                  		
		                  	</option>
		                  	@foreach($category as $row)
		                  		<option value="{{$row->id}}">{{ $row->category_en }} | {{ $row->category_bn }}</option>
		                  	@endforeach
		                  </select>
		                </div>
	                </div>
	                <div class="row">
		                <div class="form-group col-md-6">
		                  <label>
		                  	@if(session()->get('lang')=='english')
				            {{ __('Country') }}
					        @else
		                		{{ __('দেশ') }}
		                	@endif
		              	  </label>
		                  <select class="form-control" name="country_id">
		                  	<option selected="" disabled="">
		                  	@if(session()->get('lang')=='english')
				            {{ __('===Choose one===') }}
					        @else
		                		{{ __('একটি নির্বাচন করুন') }}
		                	@endif
		                  	</option>
		                  	@foreach($country as $row)
		                  		<option value="{{$row->id}}">{{ $row->country_en }} | {{ $row->country_bn }}</option>
		                  	@endforeach
		                  </select>
		                </div>
		                <div class="form-group col-md-6">
		                  <label>
		                  	@if(session()->get('lang')=='english')
				            {{ __('Division') }}
					        @else
		                		{{ __('বিভাগ') }}
		                	@endif
		              	  </label>
		                  <select class="form-control" name="division_id" id="division_id">
		                  	<option selected="" disabled="">
		                  		@if(session()->get('lang')=='english')
					            {{ __('===Choose one===') }}
						        @else
			                		{{ __('একটি নির্বাচন করুন') }}
			                	@endif
		                  	</option>
		                  	@foreach($division as $row)
		                  		<option value="{{$row->id}}">{{ $row->division_en }} | {{ $row->division_bn }}</option>
		                  	@endforeach
		                  </select>
		                </div>
	                </div>
	                <div class="row">
		                <div class="form-group col-md-6">
		                  <label>
		                  	@if(session()->get('lang')=='english')
				            {{ __('District') }}
					        @else
		                		{{ __('জেলা') }}
		                	@endif
		              	  </label>
		                  <select class="form-control" name="dist_id">
		                  	<option selected="" disabled="">
		                  		@if(session()->get('lang')=='english')
					            {{ __('===Choose one===') }}
						        @else
			                		{{ __('একটি নির্বাচন করুন') }}
			                	@endif
		                  	</option>
		                  	@foreach($district as $row)
		                  		<option value="{{$row->id}}">{{ $row->district_en }} | {{ $row->district_bn }}</option>
		                  	@endforeach
		                  </select>
		                </div>
		                <div class="form-group col-md-6">
		                  <label>
		                  	@if(session()->get('lang')=='english')
				            {{ __('Subdistrict') }}
					        @else
		                		{{ __('উপজেলা') }}
		                	@endif
		              	  </label>
		                  <select class="form-control" name="subdist_id" id="subdist_id">
		                  	<option selected="" disabled="">
		                  		@if(session()->get('lang')=='english')
					            {{ __('===Choose one===') }}
						        @else
			                		{{ __('একটি নির্বাচন করুন') }}
			                	@endif
		                  	</option>
		                  	@foreach($subdistrict as $row)
		                  		<option value="{{$row->id}}">{{ $row->subdistrict_en }} | {{ $row->subdistrict_bn }}</option>
		                  	@endforeach
		                  </select>
		                </div>
	                </div>
	                <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="titleen">
		                  	@if(session()->get('lang')=='english')
				            {{ __('Area English') }}
					        @else
		                		{{ __('এলাকা ইংলিশ') }}
		                	@endif
		              	  </label>
		                  <input type="text" class="form-control" id="titleen" name="area_en">
		                </div>
		                <div class="form-group col-md-6">
		                  <label for="titlebn">
		                  	@if(session()->get('lang')=='english')
				            {{ __('Area Bangla') }}
					        @else
		                		{{ __('এলাকা বাংলা') }}
		                	@endif
		              	  </label>
		                  <input type="text" class="form-control" id="titlebn" name="area_bn">
		                </div>
	                </div>
	                <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="titleen">
		                  	@if(session()->get('lang')=='english')
				            {{ __('Full Address English') }}
					        @else
		                		{{ __('সম্পূর্ণ ঠিকানা ইংলিশ') }}
		                	@endif
		              	  </label>
		                  <input type="text" class="form-control" id="titleen" name="fulladdress_en">
		                </div>
		                <div class="form-group col-md-6">
		                  <label for="titlebn">
		                  		@if(session()->get('lang')=='english')
					            {{ __('Full Address Bangla') }}
						        @else
			                		{{ __('সম্পূর্ণ ঠিকানা বাংলা') }}
			                	@endif
		              	  </label>
		                  <input type="text" class="form-control" id="titlebn" name="fulladdress_bn">
		                </div>
	                </div>
	                <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="titleen">
		                  	@if(session()->get('lang')=='english')
				            {{ __('Phone Number English') }}
					        @else
		                		{{ __('ফোন নম্বর ইংলিশ') }}
		                	@endif
		              	  </label>
		                  <input type="text" class="form-control" id="titleen" name="phone_en">
		                </div>
		                <div class="form-group col-md-6">
		                  <label for="titlebn">
		                  	@if(session()->get('lang')=='english')
				            {{ __('Phone Number Bangla') }}
					        @else
		                		{{ __('ফোন নম্বর বাংলা') }}
		                	@endif
		              	  </label>
		                  <input type="text" class="form-control" id="titlebn" name="phone_bn">
		                </div>
	                </div>
	                <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="titleen">
		                  	@if(session()->get('lang')=='english')
				            {{ __('E-mail') }}
					        @else
		                		{{ __('ই-মেইল') }}
		                	@endif
		              	  </label>
		                  <input type="text" class="form-control" id="titleen" name="email">
		                </div>
		                <div class="form-group col-md-6">
		                  <div class="custom-file" style="margin-top: 33px;">
		                    <!-- <input type="file" class="custom-file-input" id="customFile" name="image" >
		                    <label class="custom-file-label" for="customFile">Upload Images</label> -->
		                    <input type="file" name="images[]" multiple="multiple"><span style="color: red;">Note: </span>Upload Your Images
		                  </div>
		                </div>
	                </div>
	                <input type="text" name="status" value="0" style="display: none;">

	                <button type="submit" class="btn btn-success btn-block">
	                	@if(session()->get('lang')=='english')
			            {{ __('Submit Property') }}
				        @else
	                		{{ __('বিজ্ঞাপন যোগ করুন') }}
	                	@endif
	            	</button>
				</form>
			</div>

		</div>
	</div>
</div>
<div class="footerr" style="padding: 70px 0px 0px 0px; margin-top: 40px; background: #fff;"></div>


@endsection