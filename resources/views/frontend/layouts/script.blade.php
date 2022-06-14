
    <!-- scroll -->
    
<script type="text/javascript">
  window.addEventListener("scroll", function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle("round", window.scrollY>0);
  })
</script>



  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @if (session('status'))
  <script>
    swal("{{ session('status') }}");
  </script>
@endif


