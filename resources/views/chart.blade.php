<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 ChartJS Chart Example - ItSolutionStuff.com</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <h3 class="card-header p-3">Laravel 11 ChartJS Chart Example - ItSolutionStuff.com</h3>
            <div class="card-body">
                <canvas id="myChart" height="120px"></canvas>
            </div>
        </div>
    </div>
</body>

<script type="module">

      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};

      const data = {
        labels: labels,
        datasets: [{
          label: 'My First dataset',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: users,
        }]
      };

      const config = {
        type: 'bar',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );

</script>
</html>
