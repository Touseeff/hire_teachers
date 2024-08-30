<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('public/assets/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('public/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/assets/backend/dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('public/assets/backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('public/assets/backend/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/assets/backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/assets/backend/dist/js/pages/dashboard2.js')}}"></script>
{{-- for message --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    setInterval(function(){ $(".alert").fadeOut(); }, 3000);
</script>

{{-- for message --}}
<!-- DataTables  & Plugins -->
<script src="{{ asset('public/assets/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('public/assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>

    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>
</html>
