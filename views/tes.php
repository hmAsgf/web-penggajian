<!DOCTYPE html>
<html>
<head>
  <title>Grafik Histori Dinamis</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="grafik"></canvas>

  <?php
  // Mendapatkan data histori dari sumber data (contoh: array PHP)
  $dataHistori = [
    ['tahun' => 'Januari', 'nilai' => 100],
    ['tahun' => 'Februari', 'nilai' => 150],
    ['tahun' => 'Maret', 'nilai' => 100],
    ['tahun' => 'April', 'nilai' => 180],
    ['tahun' => 'Mei', 'nilai' => 200],
    ['tahun' => 'Juni', 'nilai' => 185],
    ['tahun' => 'Juli', 'nilai' => 210],
    ['tahun' => 'Agustus', 'nilai' => 215],
    // ...
  ];
  ?>

  <script>
  // Mengambil data histori dari PHP dan mengonversinya menjadi format yang dapat digunakan oleh Chart.js
  var dataHistori = <?php echo json_encode($dataHistori); ?>;

  // Mengambil elemen canvas
  var canvas = document.getElementById('grafik');

  // Menggambar grafik menggunakan Chart.js
  var ctx = canvas.getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: dataHistori.map(data => data.tahun),
      datasets: [{
        label: 'Histori',
        data: dataHistori.map(data => data.nilai),
        backgroundColor: 'rgba(0, 123, 255, 0.5)',
        borderColor: 'rgba(0, 123, 255, 1)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  </script>
</body>
</html>