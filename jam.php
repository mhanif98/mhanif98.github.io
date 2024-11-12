<!DOCTYPE html>
<html>
<head>
<title>Jam PHP AJAX</title>
<script
src="https://code.jquery.com/jquery-2.2.4.min.js"
integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>
</head>
<body>

<h1 id="timestamp"></h1>

<script>
// Function ini dijalankan ketika Halaman ini dibuka pada browser
$(function(){
setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
});

//Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
function timestamp() {
$.ajax({
url: 'jam_logic.php',
success: function(data) {
$('#timestamp').html(data);
},
});
}
</script>
</body>
</html>

