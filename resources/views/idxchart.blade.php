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
  
  // jQuery bermasalah
  // error: $.getJSON is not a function
  $(document).ready(function() {
    $.ajax({
      url: 'https://data.covid19.go.id/public/api/update.json',
      type: 'get',
      dataType: 'json',
      success: function(result) {
        console.log(result);
      }
    });
  });

  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45]
      }]
    },

    // Configuration options go here
    options: {}
  });
</script>
