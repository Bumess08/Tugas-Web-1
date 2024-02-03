<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-info">
    <a class="navbar-brand text-white" href="#">Manajemen Data Pengguna</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link text-white" href="#">Kelola Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text=white" href="#" onclick="logout()">Logout</a>
         </li>
       </ul>
     </div>
   </nav>
<script src="https://cdn.jsdelivr.net/npm/axios.min.js"></script>
<script>
function logout() {
    // Mendapatkan session_token dari tempat penyimpanan yang sesuai
    const sessionToken = localStorage.getItem('session_token'); // Gantilah dengan
      // Hapus 'nama' dari localStorage saat logout
    // Membuat objek FormData
    const formData = new FormData();
    formData.append('session_token'), sessionToken);

    // Konfigurasi Axios untuk logout
    axios.post('https://mariadelvina.000webhostapp.com/logout.php', formData)
     .then(response => {
        // Handle respons dari server
        if (response.data.status == 'success') {
            // Jika lou
        }
     }
     )

    
}
</html>