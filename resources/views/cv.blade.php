<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CV - Moh. Sahrul Alamsyah</title>
        <style>
            /* =========================
   RESET & BASE
========================= */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 10.5pt;
                line-height: 1.45;
                color: #000;
                background: #fff;
                padding: 0.5in;
                max-width: 8.5in;
                margin: 0 auto;
            }

            a {
                color: #000;
                text-decoration: none;
            }

            .header {
                margin-bottom: 15px;
                padding-bottom: 10px;
                border-bottom: 2px solid #000;
            }

            .header-table {
                width: 100%;
            }

            .photo-cell {
                width: 110px;
                vertical-align: middle;
            }

            .photo-cell img {
                width: 95px;
                height: 120px;
                border: 1px solid #000;
            }

            .info-cell {
                padding-left: 12px;
            }

            .info-inner {
                vertical-align: middle;
                height: 120px; /* samakan dengan tinggi foto */
            }

            .name {
                font-size: 18pt;
                font-weight: bold;
                margin-bottom: 6px;
            }

            .contact {
                font-size: 10.5pt;
            }

            /* =========================  SECTION
========================= */
            .section {
                margin-bottom: 14px;
            }

            .section-title {
                font-size: 12pt;
                font-weight: bold;
                text-transform: uppercase;
                border-bottom: 1.5px solid #000;
                padding-bottom: 3px;
                margin-bottom: 8px;
            }

            /* =========================
   ABOUT
========================= */
            .about-text {
                margin-bottom: 6px;
                text-align: justify;
            }

            /* =========================
   ENTRY (PENDIDIKAN / KERJA)
========================= */
            .entry {
                margin-bottom: 10px;
            }

            .entry-header {
                margin-bottom: 2px;
            }

            .entry-title {
                font-weight: bold;
                font-size: 11pt;
            }

            .entry-date {
                font-size: 9.5pt;
                font-style: italic;
            }

            .entry-company {
                font-size: 10pt;
                font-weight: bold;
                margin-bottom: 4px;
            }

            .entry-description {
                margin-bottom: 4px;
                text-align: justify;
            }

            /* =========================
   LIST
========================= */
            ul {
                margin-left: 18px;
                margin-top: 4px;
            }

            ul li {
                margin-bottom: 3px;
            }
            .skills-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 6px;
            }

            .skills-col {
                width: 50%;
                vertical-align: top;
                padding: 0 12px;
            }

            .skills-col:first-child {
                border-right: 1.5px solid #000;
            }

            .skill-category-title {
                font-weight: bold;
                font-size: 11pt;
                margin-bottom: 6px;
            }

            .skills-col ul {
                margin-left: 16px;
            }

            /* =========================
   CERTIFICATE & ORGANIZATION
========================= */
            .entry-description strong {
                font-weight: bold;
            }

            /* =========================
   PRINT (PDF)
========================= */
            @media print {
                body {
                    padding: 0.4in;
                }

                .section {
                    page-break-inside: avoid;
                }

                .photo img {
                    width: 100px;
                    height: 125px;
                }
            }
        </style>
    </head>
    <body>
        <div class="header">
            <table class="header-table">
                <tr>
                    <td class="photo-cell">
                        <img
                            src="{{
                                asset('assets/images/foto-sahrul.jpg')
                            }}"
                            alt="Foto"
                        />
                    </td>
                    <td class="info-cell">
                        <table width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="info-inner">
                                    <div class="name">MOH. SAHRUL ALAMSYAH</div>
                                    <div class="contact">
                                        <div>
                                            Tegal, Jawa Tengah | +62 822 2066
                                            8915
                                        </div>
                                        <div>
                                            alerascal77@gmail.com |
                                            github.com/alerascal
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <!-- TENTANG SAYA -->
        <div class="section">
            <div class="section-title">Tentang Saya</div>
            <p class="about-text">
                Saya <strong>Moh. Sahrul Alamsyah</strong>, lulusan
                <strong>D3 Sistem Informasi</strong> dari Universitas Bina
                Sarana Informatika (UBSI) Tegal, dengan fokus utama pada
                <strong>pengembangan aplikasi web</strong> dan
                <strong>dukungan teknis (IT Support)</strong>.
            </p>
            <p class="about-text">
                Saya adalah seorang <strong>fast learner</strong> dengan
                kemampuan adaptasi cepat, proaktif dalam menyelesaikan tugas,
                serta memiliki pengalaman di proyek <strong>freelance</strong>,
                <strong>magang</strong>, dan pekerjaan operasional yang melatih
                <strong>kedisiplinan</strong>, <strong>komunikasi</strong>,
                serta <strong>tanggung jawab</strong>.
            </p>
            <p class="about-text">
                Secara teknis, saya menguasai
                <strong>HTML, CSS, JavaScript, PHP, Laravel</strong>, serta
                pemahaman dasar
                <strong>React.js, Node.js, REST API,</strong> dan
                <strong>MySQL</strong>. Saya terbiasa bekerja dengan
                <strong>target</strong>, berorientasi <strong>solusi</strong>,
                dan siap memberikan kontribusi positif serta terus berkembang di
                industri teknologi informasi.
            </p>
        </div>

        <!-- PENDIDIKAN -->
        <div class="section">
            <div class="section-title">Pendidikan</div>
            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">
                        Diploma III (D3) Sistem Informasi
                    </div>
                    <div class="entry-date">Agustus 2022 - Agustus 2025</div>
                </div>
                <div class="entry-company">
                    Universitas Bina Sarana Informatika (UBSI) Tegal
                </div>
                <div class="entry-description">
                    <strong>IPK: 3.58 / 4.00</strong>
                </div>
            </div>
        </div>

        <!-- PENGALAMAN KERJA -->
        <div class="section">
            <div class="section-title">Pengalaman Kerja</div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">
                        Junior Fullstack Web Application Developer
                    </div>
                    <div class="entry-date">Juli 2024 - Sekarang</div>
                </div>
                <div class="entry-company">Freelance</div>
                <ul>
                    <li>
                        Mengembangkan aplikasi web sesuai kebutuhan klien,
                        seperti <strong>sistem absensi karyawan</strong>,
                        <strong>dashboard manajemen data</strong>, dan
                        <strong>sistem informasi publik</strong>
                    </li>
                    <li>
                        Menangani pengembangan <strong>frontend</strong> dan
                        <strong>backend</strong> secara terintegrasi menggunakan
                        Laravel, PHP, JavaScript, dan MySQL
                    </li>
                    <li>
                        Merancang struktur sistem dan
                        <strong>database</strong> agar efisien, aman, dan mudah
                        dikembangkan
                    </li>
                    <li>
                        Melakukan pemeliharaan sistem dan pengembangan fitur
                        berdasarkan kebutuhan pengguna
                    </li>
                </ul>
            </div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">Internship</div>
                    <div class="entry-date">September 2024 - Desember 2024</div>
                </div>
                <div class="entry-company">
                    Kantor Sekretariat DPRD Kota Tegal
                </div>
                <ul>
                    <li>
                        Melakukan pemeliharaan infrastruktur IT dan
                        <strong>network troubleshooting</strong> untuk
                        memastikan konektivitas dan kelancaran operasional
                        kantor
                    </li>
                    <li>
                        Merancang dan membangun
                        <strong>aplikasi pelayanan publik digital</strong> untuk
                        mendukung digitalisasi aspirasi masyarakat
                    </li>
                    <li>
                        Berkolaborasi dengan Bagian Umum dalam memberikan solusi
                        teknis dan layanan informasi publik
                    </li>
                    <li>
                        Melakukan pemeliharaan <strong>sistem web</strong> dan
                        <strong>database</strong> guna menjaga keamanan dan
                        stabilitas data
                    </li>
                    <li>
                        Memberikan dukungan teknis kepada pegawai, termasuk
                        instalasi, konfigurasi, dan troubleshooting perangkat
                        keras maupun perangkat lunak
                    </li>
                </ul>
            </div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">Host Livestreaming</div>
                    <div class="entry-date">November 2024 - Desember 2024</div>
                </div>
                <div class="entry-company">Shopee Affiliate</div>
                <ul>
                    <li>
                        Menjadi host live streaming untuk mempromosikan produk
                        secara langsung kepada customer dengan komunikasi
                        <strong>persuasif</strong>
                    </li>
                    <li>
                        Menjelaskan produk secara
                        <strong>komunikatif</strong> dan mudah dipahami
                    </li>
                    <li>
                        Menjawab pertanyaan audiens secara real-time serta
                        menjaga <strong>engagement</strong> selama live
                    </li>
                    <li>
                        Terbiasa bekerja dengan
                        <strong>target performa</strong> dan
                        <strong>penjualan</strong>
                    </li>
                    <li>
                        Mengembangkan kemampuan <strong>komunikasi</strong>,
                        <strong>pelayanan pelanggan</strong>, dan
                        <strong>problem solving</strong> cepat
                    </li>
                </ul>
            </div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">Operator Gudang</div>
                    <div class="entry-date">April 2020 - Juli 2022</div>
                </div>
                <div class="entry-company">
                    Annayra Collection Store (Fashion)
                </div>
                <ul>
                    <li>
                        Bertanggung jawab atas penerimaan, pengecekan,
                        penyimpanan, dan pengemasan barang fashion
                    </li>
                    <li>
                        Mengelola stok barang dan memastikan kesesuaian data
                        fisik dengan catatan gudang
                    </li>
                    <li>
                        Menyiapkan pesanan untuk pengiriman melalui
                        <strong>marketplace</strong> (Shopee / online store)
                    </li>
                    <li>
                        Terbiasa bekerja cepat, teliti, dan sesuai
                        <strong>target harian</strong>
                    </li>
                </ul>
            </div>
        </div>

       <div class="section">
    <div class="section-title">Kemampuan</div>

    <table class="skills-table">
        <tr>
            <td class="skills-col">
                <div class="skill-category-title">Hard Skills</div>
                <ul>
                    <li><strong>HTML, CSS, JavaScript</strong></li>
                    <li><strong>PHP & Laravel Framework</strong></li>
                    <li><strong>MySQL & Database Design</strong></li>
                    <li><strong>React.js</strong> (Dasar)</li>
                    <li><strong>Node.js & REST API</strong> (Dasar)</li>
                    <li><strong>Git & GitHub</strong></li>
                    <li><strong>Network Troubleshooting & IT Support</strong></li>
                    <li><strong>Microsoft Office</strong></li>
                    <li><strong>Canva & CapCut</strong></li>
                </ul>
            </td>

            <td class="skills-col">
                <div class="skill-category-title">Soft Skills</div>
                <ul>
                    <li><strong>Komunikasi Efektif & Public Speaking</strong></li>
                    <li><strong>Teamwork & Kolaborasi</strong></li>
                    <li><strong>Problem Solving & Berpikir Kritis</strong></li>
                    <li><strong>Adaptasi Cepat & Fast Learner</strong></li>
                    <li><strong>Manajemen Waktu & Bekerja dengan Target</strong></li>
                    <li><strong>Ketelitian & Tanggung Jawab</strong></li>
                    <li><strong>Pelayanan Pelanggan</strong></li>
                </ul>
            </td>
        </tr>
    </table>
</div>

        <!-- SERTIFIKAT -->
        <div class="section">
            <div class="section-title">Sertifikat & Penghargaan</div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">
                        Sertifikat Kompetensi Pengembangan Perangkat Lunak
                        (Software Development)
                    </div>
                    <div class="entry-date">November 2024</div>
                </div>
                <div class="entry-company">
                    Badan Nasional Sertifikasi Profesi (BNSP)
                </div>
                <div class="entry-description">
                    Dinyatakan <strong>kompeten</strong> sesuai standar profesi
                    nasional Indonesia.
                </div>
            </div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">
                        Sertifikat Profisiensi Pengetahuan - Database Systems
                    </div>
                    <div class="entry-date">Juli 2023</div>
                </div>
                <div class="entry-company">
                    Ikatan Ahli Informatika Indonesia (IAII)
                </div>
                <div class="entry-description">
                    Predikat <strong>EXPERT</strong>, menunjukkan penguasaan
                    mendalam terhadap konsep dan praktik sistem basis data.
                </div>
            </div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">Sertifikat Internship</div>
                    <div class="entry-date">November 2024</div>
                </div>
                <div class="entry-company">
                    Kantor Sekretariat DPRD Kota Tegal
                </div>
                <div class="entry-description">
                    Fokus pada <strong>pengelolaan data</strong>,
                    <strong>IT Support</strong>, dan
                    <strong>layanan informasi publik</strong>.
                </div>
            </div>
        </div>

        <!-- PENGALAMAN ORGANISASI -->
        <div class="section">
            <div class="section-title">Pengalaman Organisasi & Relawan</div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">
                        Saksi Pemilu - Penyelenggara Pemilihan Umum (TPS)
                    </div>
                    <div class="entry-date">Februari 2024</div>
                </div>
                <div class="entry-description">
                    Melaksanakan tugas pengawasan proses pemungutan dan
                    penghitungan suara di TPS dengan penuh
                    <strong>ketelitian</strong> dan <strong>integritas</strong>.
                </div>
            </div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">
                        Tim Sosialisasi Pengenalan Kampus ke SMA/MA
                    </div>
                    <div class="entry-date">November 2022</div>
                </div>
                <div class="entry-company">
                    Universitas Bina Sarana Informatika (UBSI)
                </div>
                <div class="entry-description">
                    Melakukan presentasi dan sosialisasi kampus kepada siswa
                    SMA/MA, melatih <strong>public speaking</strong> dan
                    <strong>kerja tim</strong>.
                </div>
            </div>

            <div class="entry">
                <div class="entry-header">
                    <div class="entry-title">
                        Petugas Jaga Malam - Linmas Desa Kemandungan
                    </div>
                    <div class="entry-date">Februari 2020 - Maret 2020</div>
                </div>
                <div class="entry-company">
                    Kecamatan Tegal Barat, Kota Tegal
                </div>
                <div class="entry-description">
                    Bertugas menjaga keamanan lingkungan melalui
                    <strong>patroli malam</strong> dan
                    <strong>koordinasi tim</strong>.
                </div>
            </div>
        </div>
    </body>
</html>
