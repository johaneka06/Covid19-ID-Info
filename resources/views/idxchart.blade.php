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
  
  var dt = @json($indonesia->update->harian);
  
  $.noConflict();
  $.each(dt, function(i, data){
    get = new Date(data.key_as_string);
    date = (("0" + get.getDate()).slice(-2) + "-" + ("0" + (get.getMonth() + 1)).slice(-2) + "-" + (get.getFullYear()))
    Label.push(date);
    Data.push(data.jumlah_positif_kum.value);
  })

  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: Label,
      datasets: [{
        label: 'Kasus positif Indonesia',
        backgroundColor: 'rgb(255, 0, 0)',
        borderColor: 'rgb(255, 99, 132)',
        data: Data
      }]
    },

    // Configuration options go here
    options: {}
  });
</script>
