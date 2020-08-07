<div class="card mt-3">
  <div class="card-body">
    <canvas id="myChart"></canvas>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
  var ctx = document.getElementById('myChart').getContext('2d');

  var Label = new Array();
  var Data = new Array();

  var dt = @json($data -> jenis_kelamin);

  $.noConflict();
  $.each(dt, function(i, data) {
    Label.push(data.key)
    Data.push(data.doc_count);
  })

  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
      labels: Label,
      datasets: [{
        data: Data,
        backgroundColor: ['rgb(64, 83, 255)', 'rgb(255, 203, 203)']
      }]
    },

    // Configuration options go here
    options: {}
  });
</script>