@extends('layouts.admin_master')
@section('css')
	
	<style>
		
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  
	</style>
@endsection

@section('content')
 
 @include('alert.success')

 <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
 	
<div class="row">
    <div class="col-xl-12">
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
						<div id="app">
							<br /><br />
							  <div class="container">
							   <h2 align="center">JSON Live Data Search using Ajax JQuery</h2>
							   <h3 align="center">Employee Data</h3>   
							   <br /><br />
							   <div align="center">
							    <input type="text" name="search" id="search" placeholder="Search Employee Details" class="form-control" />
							   </div>
							   <ul class="list-group" id="result"></ul>
							   <br />
							  </div>
							
							
						</div>
					</div>
													
					</div>
				</div>
				<!--end::Section-->

						  	</table>
						</div>
					</div>
				</div>
				<!--end::Section-->
			</div>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
    </div>
</div>	</div>
@endsection
@section('script')

	<script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('data.json', function(data) {
   $.each(data, function(key, value){
    if (value.PlaceName.search(expression) != -1 || value.PlaceId.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class"><img src="'+value.PlaceId+'" height="40" width="40" class="img-thumbnail" /> '+value.PlaceName+' | <span class="text-muted">'+value.CountryId+'</span></li>');
    }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
 });
});
</script>

@endsection