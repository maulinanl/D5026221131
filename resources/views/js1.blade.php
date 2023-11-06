<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, ">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function changeText() {
            var span = document.getElementById("output"); // mendapatkan objek tulisan
            var textBox = document.getElementById("textbox"); // mendapatkan obejk text box

            textBox.style.color = "gray"; // mengganti DOM CSS, color text jadi merah ketika di klik( jika menulisa ""style." maka akan muncul keseluruhan syntax css)
            span.innerHTML = textBox.value;// membaca isi text box, dan mengubah tulisan non input, mengganti innerHTML dengan value yang dimasukkan
        }
    </script>
</head>

<body>
    <div class="container">
        <script>
            function showAlert(){
                alert("Selamat Anda mendapatkan apa?");
            }
        </script>
        <button class="btn btn-primary" onclick="showAlert();">Klik Disini</button>
        <br>
        <button onclick="changeText();" class="btn btn-warning">Click me!</button>
        <span id="output">replace me</span>
        <input id="textbox" type="text" class="form-control"/>
    </div>
</body>
</html>
