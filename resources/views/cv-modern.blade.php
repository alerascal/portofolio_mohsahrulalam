<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>CV Modern</title>

<style>
body {
    font-family: Arial, sans-serif;
    font-size: 10pt;
    color: #333;
}

.container {
    width: 100%;
}

/* HEADER */
.header {
    display: table;
    width: 100%;
    margin-bottom: 20px;
}

.header-left, .header-right {
    display: table-cell;
    vertical-align: middle;
}

.header-left {
    width: 70%;
}

.header-right {
    width: 30%;
    text-align: center;
}

/* FOTO */
.photo {
    width: 90px;
    height: 110px;
    border-radius: 6px;
    border: 2px solid #444;
}

/* NAMA */
.name {
    font-size: 18pt;
    font-weight: bold;
    color: #222;
}

.contact {
    font-size: 9pt;
    margin-top: 5px;
}

/* SECTION */
.section {
    margin-bottom: 15px;
}

.section-title {
    font-weight: bold;
    font-size: 11pt;
    color: #fff;
    background: #444;
    padding: 4px 8px;
    margin-bottom: 8px;
}

/* GRID 2 KOLOM */
.row {
    display: table;
    width: 100%;
}

.col-left, .col-right {
    display: table-cell;
    vertical-align: top;
}

.col-left {
    width: 65%;
    padding-right: 10px;
}

.col-right {
    width: 35%;
    padding-left: 10px;
}

/* ENTRY */
.entry {
    margin-bottom: 10px;
}

.entry-title {
    font-weight: bold;
}

.entry-date {
    font-size: 9pt;
    color: #666;
}

ul {
    margin-left: 15px;
}

/* SKILL BOX */
.skill-box {
    background: #f2f2f2;
    padding: 8px;
    margin-bottom: 6px;
    border-radius: 4px;
}

/* QR */
.qr {
    margin-top: 5px;
}

</style>
</head>

<body>

@php
$qr = base64_encode(
    file_get_contents(
        'https://api.qrserver.com/v1/create-qr-code/?size=120x120&data=http://moh_sahrulalam.test/'
    )
);
@endphp

<div class="container">

<!-- HEADER -->
<div class="header">

    <div class="header-left">
        <table>
            <tr>
                <td>
                    <img class="photo" src="{{ public_path('assets/images/foto-sahrul.jpg') }}">
                </td>
                <td style="padding-left:10px;">
                    <div class="name">MOH. SAHRUL ALAMSYAH</div>
                    <div class="contact">
                        Tegal, Jawa Tengah<br>
                        0822 2066 8915<br>
                        alerascal77@gmail.com<br>
                        github.com/alerascal
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="header-right">
        <div style="font-size:9pt;">Portofolio</div>
        <img class="qr" src="data:image/png;base64,{{ $qr }}" width="90">
    </div>

</div>

<!-- BODY -->
<div class="row">

<!-- LEFT -->
<div class="col-left">

<div class="section">
    <div class="section-title">Tentang Saya</div>
    <p>
        Lulusan D3 Sistem Informasi dengan fokus Web Development dan IT Support.
        Memiliki pengalaman freelance dan magang, terbiasa bekerja dengan target,
        cepat beradaptasi, dan berorientasi solusi.
    </p>
</div>

<div class="section">
    <div class="section-title">Pengalaman</div>

    <div class="entry">
        <div class="entry-title">Fullstack Developer - Freelance</div>
        <div class="entry-date">2024 - Sekarang</div>
        <ul>
            <li>Membangun sistem absensi & dashboard</li>
            <li>Frontend & Backend Laravel</li>
        </ul>
    </div>

    <div class="entry">
        <div class="entry-title">Internship - DPRD Kota Tegal</div>
        <div class="entry-date">2024</div>
        <ul>
            <li>IT Support & troubleshooting</li>
            <li>Membangun aplikasi pelayanan publik</li>
        </ul>
    </div>

</div>

</div>

<!-- RIGHT -->
<div class="col-right">

<div class="section">
    <div class="section-title">Pendidikan</div>
    <div class="entry">
        D3 Sistem Informasi<br>
        UBSI Tegal<br>
        IPK 3.58
    </div>
</div>

<div class="section">
    <div class="section-title">Skills</div>

    <div class="skill-box">HTML, CSS, JS</div>
    <div class="skill-box">PHP & Laravel</div>
    <div class="skill-box">MySQL</div>
    <div class="skill-box">React (Basic)</div>

</div>

<div class="section">
    <div class="section-title">Soft Skills</div>

    <div class="skill-box">Komunikasi</div>
    <div class="skill-box">Teamwork</div>
    <div class="skill-box">Problem Solving</div>

</div>

</div>

</div>

</div>

</body>
</html>