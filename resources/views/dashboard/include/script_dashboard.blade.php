  <!--   Core JS Files   -->
  <script src="{{ asset('paper-dashboard/assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('paper-dashboard/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('paper-dashboard/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('paper-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('paper-dashboard/assets/js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('paper-dashboard/assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('paper-dashboard/assets/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('paper-dashboard/assets/demo/demo.js') }}"></script>
  <script>
      $(document).ready(function() {
          // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
          demo.initChartsPages();
      });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
  </script>
  <script>
      const img = document.getElementById('image');
      img.onchange = function(e) {
          const preview = document.getElementById('previewImg');
          const files = e.target.files;

          if (files) {
              preview.setAttribute('class', 'mb-3 d-block');
              var reader = new FileReader();
              reader.readAsDataURL(img.files[0]);
              reader.onload = function() {
                  preview.src = reader.result;
              }
          }
      }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
