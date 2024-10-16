<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php" > <!-- Menambahkan ID untuk form -->
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color:red;"></span> <!-- Tempat untuk menampilkan error nama -->
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"> 
        <span id="email-error" style="color:red;"></span> <!-- Tempat untuk menampilkan error email -->
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"> 
        <span id="password-error" style="color:red;"></span> <!-- Tempat untuk menampilkan error password -->
        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div> <!-- Tempat untuk menampilkan hasil dari proses_validasi.php -->

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default
            
            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            // Validasi Nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi Email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            // Validasi Password (minimal 8 karakter)
            if (password.length < 8) {
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }

            // Jika validasi berhasil, kirim data dengan AJAX
            if (valid) {
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: $(this).serialize(), // Mengumpulkan data form
                    success: function(response) {
                        $("#hasil").html(response); // Menampilkan hasil dari server
                    }
                });
            }
        });
    });
    </script>
</body>
</html>