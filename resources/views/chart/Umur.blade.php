<div class="card mt-3">
  <div class="card-body">
    <canvas id="umur"></canvas>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">

var ctx = document.getElementById('umur').getContext('2d');
  
  var Data = new Array();
  var Label = new Array();
  
  var dt = @json($data -> kelompok_umur);

  $.noConflict();
  $.each(dt, function(i, data) {
    Label.push(data.key)
    Data.push(data.doc_count);
  })

  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
      labels: Label,
      datasets: [{
        label: "Jumlah",
        backgroundColor: ['rgb(255, 255, 102)', 'rgb(153, 255, 51)', 'rgb(0, 204, 102)', 'rgb(0, 204, 204)', 'rgb(0, 102, 204)', 'rgb(102, 102, 255)'],
        borderColor: 'rgb(255, 255, 255)',
        data: Data
      }]
    },

    // Configuration options go here
    options: {}
  });

</script>