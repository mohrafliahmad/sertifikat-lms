<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sertifikat Pelatihan</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body {
          font-family: Arial, sans-serif;
          /*background-color: #f8f9fa;*/
          background-repeat: no-repeat; /* Do not repeat the image */
          background-size: cover;
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          background-image: url("https://sertifikatlms.kemkes.go.id/assets/images/bg-sertifonline.png");

      }

.certificate-container1 {
  background-color: white;
/*          border: 2px solid #00b0b9;*/
border-radius: 10px;
padding: 20px;
/*          max-width: 800px;*/
width: 95%;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.certificate-container{
    border:2px solid #12B7BE;
    border-radius:5px;
    background:#fff;
}

.certificate-header{
    text-align: center;
  color: #00b0b9;
  margin-bottom: 20px;
}

.certificate-header h1{
    font-size: 32px;
  font-weight: bold;
  margin-top: 20px;
}

.certificate-header h2{
    font-size: 24px;
  font-weight: normal;
  margin-top: 5px;
}

.certificate-header .certificate-code {
  font-size: 14px;
  color: gray;
  margin-top: 10px;
}

.certificate-body{
  color: #333;
  line-height: 1.6;
  padding: 0 10%;
  margin-top: 5%;
}

.section-title{
    margin-bottom:18px;
}

.highlight{
    font-weight:700;
    color:#222;
}

/* ===== IDENTITAS PESERTA ===== */
.section-title{
     color: #333;
  line-height: 1.6;
  padding: 0 10%;
  margin-top: 5%;
}

.recipient-info{
    padding: 0 10%;
    margin-bottom: 5%;
      margin-top: -10px;
}

.certificate-body p {
  margin-bottom: 10px;
}

.recipient-info p {
  margin-bottom: 10px;
}
.nama-section{
    margin-bottom:15px;
}

.row-dua{
    display:flex;
}

.nik-section{
    width:260px;
}

.profesi-section{
    margin-left:150px;
    width:200px;
}

.label{
    display:block;
    font-size:16px;
    font-weight:700;
    color:#222;
    margin-bottom:3px;
}

.value{
    display:block;
    font-size:16px;
    color:#333;
}

/* ===== PARAGRAF ===== */

.certificate-text{
    margin-top:30px;
    margin-bottom:20px;
    text-align:left;
    line-height:1.9;
}

/* ===== MATA PELAJARAN ===== */

.course-list{
    margin-top:15px;
}

.header-list{
    padding: 10px;
    background-color: #e8fafa;
}

.course-list ul{
  font-weight: bold;
  margin-bottom: 5px;
  padding: 5px;
}

.course-list li{
    margin-bottom:12px;
    color:#222;
}

/* Responsiveness for Mobile */
@media (max-width: 600px) {
  .recipient-info {
    flex-direction: column;
}
.recipient-info div {
    width: 100%;
}

}

</style>

</head>
<body>

<div class="certificate-container1">

<div class="certificate-container">

<div class="certificate-header">

<h1>SERTIFIKAT</h1>

<h2>Pelatihan</h2>

<p class="certificate-code">
{{ $certificate->certificate_number }}
</p>

</div>

<div class="certificate-body">
<div class="section-title">
<span class="highlight">Diberikan kepada:</span>
</div>

<div class="recipient-info">

<div class="nama-section">

<span class="label">Nama</span>

<span class="value">
{{ $certificate->name }}
</span>

</div>

<div class="row-dua">

<div class="nik-section">

<span class="label">NIK</span>

<span class="value">
{{ $certificate->nik }}
</span>

</div>

<div class="profesi-section">

<span class="label">Profesi</span>

<span class="value">
Perawat Vokasi Level 5
</span>

</div>

</div>

</div>

<p class="certificate-text">

Telah mengikuti

<span class="highlight">
Pelatihan Basic Trauma Cardiac Life Support (BTCLS) Angkatan 1
</span>

sebagai

<span class="highlight">
Peserta
</span>

yang diselenggarakan oleh PT INOVASI PELATIHAN KESEHATAN MANDIRI tanggal 14 Oktober 2025 s/d 19 Oktober 2025 dengan jumlah 55 jam pelajaran senilai 15 Satuan Kredit Profesi (SKP).

</p>

<div class="course-list">

<div class="header-list">
Daftar Mata Pembelajaran:
</div>

<ul>

<li><span class="highlight">Etik dan Aspek Legal Keperawatan Gawat Darurat</span></li>

<li><span class="highlight">Bantuan hidup dasar</span></li>

<li><span class="highlight">BLC</span></li>

<li><span class="highlight">Sistem Penanggulangan Gawat Darurat Terpadu (SPGDT)</span></li>

<li><span class="highlight">Anti Korupsi</span></li>

<li><span class="highlight">Triage pasien</span></li>

<li><span class="highlight">Penilaian dan penatalaksanaan awal (initial assessment)</span></li>

<li><span class="highlight">Penatalaksanaan pasien dengan gangguan jalan napas dan pernapasan (airway and breathing)</span></li>

<li><span class="highlight">Penatalaksanaan pasien akibat trauma kepala dan spinal, thorak dan abdomen, musculoskeletal dan luka bakar.</span></li>

<li><span class="highlight">Penatalaksanaan pasien dengan gangguan sirkulasi</span></li>

<li><span class="highlight">Penatalaksanaan kegawatdaruratan kardiovaskuler</span></li>

<li><span class="highlight">Evakuasi dan Transportasi</span></li>

</ul>

</div>

</div>

</div>

</div>

</body>
</html>