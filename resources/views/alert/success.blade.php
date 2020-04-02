
@if(session()->has('message'))
   {{--  <div class="alert alert-success" id="success-alert">
        {{ session()->get('message') }}
    </div> --}}
    <div class="alert alert-primary fade show" role="alert" id="alert">
      <div class="alert-icon"><i class="flaticon-warning"></i></div>
        <div class="alert-text">
            {{ session()->get('message') }}
          
        </div>
          <div class="alert-close">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true"><i class="la la-close"></i></span>
              </button>
          </div>
    </div>

@endif

{{-- <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script> --}}
<style>
  .alert.alert-primary {
    background: #5867dd;
    border: 1px solid #5867dd;
    color: #ffffff;
    margin-left: 650px;
    margin-top: -70px;
}
</style>