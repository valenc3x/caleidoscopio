<footer>
    <small>
      Congreso Caleidoscopio <?= date('Y') ?>
    </small>
  </footer>
  <!-- CDN JS -->
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.3/less.min.js"></script>
  <!-- JS -->
  <script src="/webroot/js/main.js"></script>

  <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.min.js"></script><link rel="stylesheet" href="//cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css">

<script>
$(document).ready(function() {
    $('.datatable').dataTable( {
        "order": [[ 0, "desc"  ]]
    });
} );
</script>
</body>
</html>
