<!DOCTYPE html>
<html>
<head>
    <title>Jam Realtime</title>
    <script>
        // Fungsi untuk mengupdate jam secara realtime
        function updateTime() {
            var date = new Date();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();

            // Mengubah format 24 jam menjadi 12 jam jika diinginkan
            // if (hours > 12) {
            //     hours = hours - 12;
            // }

            // Menambahkan nol di depan angka jam, menit, dan detik jika perlu
            hours = (hours < 10) ? "0" + hours : hours;
            minutes = (minutes < 10) ? "0" + minutes : minutes;
            seconds = (seconds < 10) ? "0" + seconds : seconds;

            // Menampilkan jam secara realtime di elemen dengan id "jam"
            document.getElementById("jam").innerHTML = hours + ":" + minutes + ":" + seconds;
        }

        // Memanggil fungsi updateTime setiap detik
        setInterval(updateTime, 1000);
    </script>
</head>
<body>
    <h1>Jam Realtime</h1>

    <p id="jam"></p>

    <?php
    $checkInTime = '08:16';
    $checkOutTime = '15:30';
    
    // Mengubah waktu check-in dan check-out menjadi format waktu yang dapat dioperasikan
    $checkIn = strtotime($checkInTime);
    $checkOut = strtotime($checkOutTime);
    
    // Menghitung selisih waktu antara check-in dan check-out
    $diff = $checkOut - $checkIn;
    
    // Menghitung jumlah jam kerja
    $workingHours = floor($diff / 3600);
    
    // Menghitung jumlah jam lembur jika lebih dari 6 jam
    if ($workingHours > 6) {
        $overtimeHours = $workingHours - 6;
    } else {
        $overtimeHours = 0;
    }
    
    // Mengubah jumlah jam lembur menjadi format waktu
    $overtimeFormatted = gmdate('H:i:s', $overtimeHours * 3600);
    
    // Menampilkan hasil
    echo "Jam kerja: " . $workingHours . " jam<br>";
    echo "Jam lembur: " . $overtimeFormatted;
    
    
    ?>
</body>
</html>
