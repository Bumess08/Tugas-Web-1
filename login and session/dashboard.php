<?php
include('header.php')
?>

  <div class="container">
  <div class="container mt-5">
   <!-- Konten dashboard -->
   <h2 id="welcomeMessage">Selamat datang di Dashboard</h2>
   <!-- Isi dengan konten dashboard lainnya -->
</div>

<div class="row">
  <div class="col-md-12">
    </button onclick="dowloadExcel()" class="btn btn-success mr -2">
    <i class="fas fa-download"></i> Unduh Excel
  </button>
  <button onclick="downloadPDF()" class="btn btn-danger">
   <i class="fas fa-download"></i> Unduh PDF
</button>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  //console.log(localStorage/getItem('nama'));
  document.getElementById('welcomeMessage').innerText = 'Selamat datang' + localStronge.getItem('nama');
 </script>

<script> function fetcData(tahun) {
  var formData = new FormData();
  formData.append('tahun', tahun);

  return axios({
    method: 'post',
    url: 'https://mariadelvina.000webhostapp.com/sum_beritahun.php',
    data: formData,
    headers: { 'Content-Type': 'multipart/form-data' }
  });
}

</script>
<script> function fetchData(tahun) {
      var formData = new FotmData();
      formData.append('tahun', tahun);

      return axios({
         method: 'post',
         url: 'https://mariadelvina.000webhostapp.com/sum_beritatahun.php',
         data: formData,
         headers: { 'Content-Type': 'multipart/form-data' }

function downloadExcel() {
  // Fetch data based on the selected year
  var selectedYear = document.getElemenById('tahunSelect').value;
  fetchData(selecttedYear)
   .then(response => {
    var data = response.data;

    // Buat worksheet
    var wb = XLSX.utils.json_to_sheet(data);

    // Buat file Excelvar wb = XLSX.utils.book_new();
    XLSX.book_append_sheet(wb, ws, "Laporan");

    // Simpan file Excel dan Unduh
    var wb = XLSX.utils.book_new();
    XLSX.writeFile(wb, "laporan_excel_" + selectedYear + ".xlsx");
   })
   .catch(error => {
    console.error('Error fetching data for Excel:', error);
   });
}
  