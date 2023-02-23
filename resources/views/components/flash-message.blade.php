@if (Session::has('message'))
<div class="toast-container p-3 top-0 start-50 translate-middle-x"  id="toastPlacement">
  <div id="toast" class="toast align-items-center text-white border-0 {{ Session::get('background', 'bg-light') }}" role="alert" aria-atomic="true" data-bs-delay="2000" data-bs-autohide="true" aria-live="assertive">
   <div class="d-flex">
    <div class="toast-body">
      {{ Session::get('message') }}
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
   </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    $('#toast').toast();
    $('#toast').toast("show");
  });
</script>
<style>
  #toastPlacement{
      position: fixed !important;
      z-index: 1;
      margin-top: 6rem;
  }
</style>   
@endif