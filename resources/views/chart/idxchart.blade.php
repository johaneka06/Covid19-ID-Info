<div class="card mt-3">
  <div class="card-body">
    <canvas id="positifChart"></canvas>
    <canvas id="grow"></canvas>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
  var Label = new Array();
  var Data = new Array();
  var Sembuh = new Array();

  var dt = @json($indonesia -> update -> harian);

  var ctx = document.getElementById('grow').getContext('2d');
  $.noConflict();
  $.each(dt, function(i, data) {
    get = new Date(data.key_as_string);
    date = (("0" + get.getDate()).slice(-2) + "-" + ("0" + (get.getMonth() + 1)).slice(-2) + "-" + (get.getFullYear()))
    Label.push(date);
    Data.push(data.jumlah_positif.value);
    Sembuh.push(data.jumlah_sembuh.value);
  })

  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: Label,
      datasets: [{
        label: 'Pertambahan positif',
        borderColor: 'rgb(255, 0, 0)',
        data: Data
      },
      {
        label: 'Pertambahan sembuh',
        borderColor: 'rgb(0, 255, 0)',
        data: Sembuh
      }]
    },

    // Configuration options go here
    options: {}
  });

  Label = new Array();
  Data = new Array();
  Sembuh = new Array();

  var chp = document.getElementById('positifChart').getContext('2d');
  // $.noConflict();
  $.each(dt, function(i, data) {
    get = new Date(data.key_as_string);
    date = (("0" + get.getDate()).slice(-2) + "-" + ("0" + (get.getMonth() + 1)).slice(-2) + "-" + (get.getFullYear()))
    Label.push(date);
    Data.push(data.jumlah_positif_kum.value);
    Sembuh.push(data.jumlah_sembuh_kum.value);
  })

  var ch = new Chart(chp, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: Label,
      datasets: [{
        label: 'Kasus positif Indonesia',
        borderColor: 'rgb(255, 0, 0)',
        data: Data
      },
      {
        label: 'Kasus sembuh Indonesia',
        borderColor: 'rgb(0, 255, 0)',
        data: Sembuh
      }]
    },

    // Configuration options go here
    options: {}
  });

  $(document).ready(function(){
    $('#grow').hide();
  })

  $('#positif').click(function(){
    $('#positifChart').show();
    $('#grow').hide();
  });

  $('#growth').click(function(){
    $('#positifChart').hide();
    $('#grow').show();
  })
</script>