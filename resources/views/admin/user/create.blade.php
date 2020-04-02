@extends('layouts.admin_master')

@section('css')
  <link rel="stylesheet" href="{{asset('daterangepicker.css')}}">
	
@endsection

@section('content')
 

 <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	
{{-- <div class="row"> --}}
    <div class="row justify-content-center">

	    <div class="col-xl-8">
	    	<!--begin::Portlet-->
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">Basic Tables</h3>
					</div>
				</div>
				<div class="kt-portlet__body">
					<!--begin::Section-->
					<div class="kt-section">
						<div class="kt-section__info">
							Using the most basic table markup, here’s how tables look in Keen:
						</div>
						<div class="kt-section__content">
							{{-- <div class="app">
								<user-create></user-create>
							</div> --}}
							
									<form action="{{route('users.store')}}" method="POST">
										@csrf

										<div class="col-md-12">
											<div class="form-group">
												<label for="">Name</label>
												<input type="text" class="form-control" name="name">
											</div>

											<div class="form-group">
												<label for="">Email</label>
												<input type="text" class="form-control" name="email">
											</div>

											<div class="form-group">
												<label for="">Password</label>
												<input type="text" class="form-control" name="password">
											</div>

											<div class="form-group">
												<label for="">Testing</label>
												<input type="text" class="form-control" data-toggle="modal" data-target="#sez-country-category" >
												
											
											</div>
											<div class="col-md-4">
												
											<div class="form-group">
							                  <label>Depart</label>

							                  <div class="input-group">
							                 {{--    <div class="input-group-prepend">
							                      <span class="input-group-text">
							                        <i class="far fa-calendar-alt"></i>
							                      </span>
							                    </div> --}}
							                    <input type="text" class="form-control float-right" id="reservation">
							                  </div>
							                  <!-- /.input group -->
							                </div>

											</div>

											<button type="submit" class="btn btn-success">Create</button>
										</div>


									</form>
									<div id="app">
										<user-create></user-create>
									</div>
							
						</div>
					</div>
					<!--end::Section-->

				</div>
			</div>
		</div>
				<!--end::Section-->
	</div>
</div>
@endsection
@section('script')
<script src="{{asset('js/daterangepicker.js')}}"></script>
<script src="{{asset('js/jquery.inputmask.bundle.min.js')}}"></script>

{{-- 
<script>
   $(document).ready( function(){
    $('select[name="test"]').on('change', function(){

        var subcategory=$(this).val();
        if(subcategory){
          $.ajax({
          url: '/api/flights/si/prices' + subcategory,
          type: "GET",
          dataType: "json",

          success: function(data) {
                        $('select[name="sub_category_id"]').empty();
                        $('select[name="sub_category_id"]').append('<option value="">--Choose Sub Categories--</option>');


                        $.each(data, function(key, value) {
                            $('select[name="sub_category_id"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                    }, 
                });
        }
    });
});

</script> --}}
<script>
  $(function () {
    //Initialize Select2 Elements
    
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
   })
   
</script>
@endsection
