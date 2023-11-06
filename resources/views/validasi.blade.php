<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validateForm(){
            console.log("ini baris 18");
            // return false; // dimanapun ketemu return, akan exit fucntion
            // perintah bawahnya tidak dijalankan
            console.log("ini baris 20");
            return true; // dalam satu function bisa ada lebih dari 1 return
            console.log("ini baris 22");
        }
        function validate(){
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");
            var nrp = document.getElementById("nrp");

            if (bil1.value == "" && bil2.value == "" && nrp.value == ""){ // keadaan bila tidak ada isian atau value
                alert("Bilangan 1, 2, dan NRP harus diisi");
                return false;
                bil1.focus();
            } if (bil1.value == ""){
                bil1.placeholder = "Mohon diisi angka"
                bil1.focus();
                return false;
            } if (bil2.value == ""){
                bil2.placeholder = "Mohon diisi angka"
                bil2.focus();
                return false;
            } if(nrp.value == ""){
                nrp.placeholder = "Mohon diisi angka"
                nrp.focus();
                return false;
            } if(isNaN(nrp.value)){
                alert("NRP harus berupa angka");
                return false;
            } if(nrp.value.length != 10){
                alert("NRP harus berjumlah 10");
                return false;
            } else{ // keadaan saat sudah diisi
                return true;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <form action="http://www.detik.com" method="get" onsubmit="return validate()";> <!-- method "get" memberikan keluaran yang sama seperti link(hyperlink), method post jadi forbidden 403 (karena link yang dituju mendeteksi ada kejanggalan), method "onsubmit" jika false (ada isian yang tidak ) tidak akan ke link, ketika true (semua isian valid) maka akan menuju link yang dituju -->

            <div class="form-group">
                <label for="bil1">Bilangan 1:</label>
                <input type="number" id="bil1" class="form-control" placeholder="Harus diisi" name="bil1">
            </div>

            <div class="form-group">
                <label for="bil2">Bilangan 2:</label>
                <input type="number" id="bil2" class="form-control" placeholder="Harus diisi" name="bil2">
            </div>

            <div class="form-group">
                <label for="nrp">NRP:</label>
                <input type="text" id="nrp" class="form-control" placeholder="Harus diisi" name="nrp">
            </div>

            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>

</html>
