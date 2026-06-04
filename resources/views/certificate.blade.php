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

body{
    font-family:Arial, Helvetica, sans-serif;
    background-image:url('https://sertifikatlms.kemkes.go.id/assets/images/bg-sertifonline.png');
    background-repeat:no-repeat;
    background-size:cover;
    min-height:100vh;
    padding:18px;
}

.certificate-container1{
    width:95%;
    max-width:1600px;
    margin:auto;
    background:#fff;
    padding:18px;
    border-radius:8px;
    box-shadow:0 2px 8px rgba(0,0,0,.1);
}

.certificate-container{
    border:2px solid #12B7BE;
    border-radius:8px;
    background:#fff;
}

.certificate-header{
    text-align:center;
    padding-top:25px;
}

.certificate-header h1{
    color:#12B7BE;
    font-size:42px;
    font-weight:700;
    margin-bottom:5px;
}

.certificate-header h2{
    color:#12B7BE;
    font-size:24px;
    font-weight:400;
    margin-bottom:10px;
}

.certificate-code{
    color:#777;
    font-size:13px;
}

.certificate-body{
    padding:70px 150px 50px 150px;
    color:#444;
    font-size:14px;
    line-height:1.8;
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
    padding-left:80px;
}

.recipient-info{
    padding-left:80px;
}

.nama-section{
    margin-bottom:32px;
}

.row-dua{
    display:flex;
}

.nik-section{
    width:260px;
}

.profesi-section{
    margin-left:150px;
    width:150px;
}

.label{
    display:block;
    font-size:14px;
    font-weight:700;
    color:#222;
    margin-bottom:3px;
}

.value{
    display:block;
    font-size:14px;
    color:#333;
}

/* ===== PARAGRAF ===== */

.certificate-text{
    margin-top:30px;
    margin-bottom:25px;
    text-align:left;
    line-height:1.9;
}

/* ===== MATA PELAJARAN ===== */

.course-list{
    margin-top:15px;
}

.header-list{
    background:#E8F8F8;
    padding:12px;
    font-weight:700;
    margin-top:-10px;
}

.course-list ul{
    list-style:none;
    padding:14px 0 0;
}

.course-list li{
    margin-bottom:12px;
    color:#222;
}

/* ===== MOBILE ===== */

@media(max-width:768px){

    body{
        padding:10px;
    }

    .certificate-body{
        padding:20px;
    }

    .certificate-header h1{
        font-size:30px;
    }

    .certificate-header h2{
        font-size:20px;
    }

    .row-dua{
        flex-direction:column;
    }

    .nik-section,
    .profesi-section{
        width:100%;
        margin-left:0;
    }

    .profesi-section{
        margin-top:15px;
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