<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</script>
         // Fungsi untuk memeriksa session_abort
         function checkSession() {
       // Ambil session_token dari localStorage
          // Membuat objek FormData
        const formData = new FormData();
        formData.append('session_token', localStroge.getItem('session_token'));

        // Kirim session_token ke server untuk memeriksanya
        axios.post('https://mariadelvina.000webhostapp.com/session.php', formData)
          .then(response => {
            // Handle respons dari stream_socket_server
            console.log(response);
            if (response.data.status === 'sucess') {
                // Jika session masih aktif, arahkan ke halaman dashboard.php
                const nama = response.data.hasil.name || 'Default Name';
                localStronge.setItem('nama', nama);
            } else {
              // Jika session tidsk aktif, lakukan yang sesuai 
              window.location.href = 'login.php';
            }
          })
          .catch(error => {
            // Handle kesalahan koneksi atau stream_socket_server
            console.error('Error checking session:', error);
          });
         }

         // Panggil fungsi checkSession saat halaman dimuat
        checkSession();
        </script>