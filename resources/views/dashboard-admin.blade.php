<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin SIAKAD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }

            body{
                background:#f4f6fb;
                font-family:'Segoe UI',sans-serif;
            }

            .sidebar{
                width:250px;
                height:100vh;
                background:linear-gradient(180deg,#8405fc,#240344);
                position:fixed;
                left:0;
                top:0;
                color:white;
                box-shadow:5px 0 20px rgba(0,0,0,.15);
            }

            .logo{
                padding:30px 20px;
                text-align:center;
                border-bottom:1px solid rgba(255,255,255,.15);
            }

            .logo h3{
                margin:0;
                font-size:42px;
                font-weight:700;
            }

            .logo small{
                font-size:14px;
            }

            .sidebar-menu a{
            display:block;
            padding:15px 25px;
            text-decoration:none;
            color:white;
            transition:.3s;
            font-size:16px;
            }

            .sidebar-menu a:hover{
            background:rgba(255,255,255,.15);
            padding-left:35px;
            color:white;
            }

            .logout-form{
            margin-top:auto;
            }

            .logout-btn{
            width:100%;
            border:none;
            background:#240344;
            color:white;
            padding:15px 25px;
            text-align:left;
            cursor:pointer;
            transition:.3s;
            font-size:16px;
            }

            .logout-btn:hover{
            background:rgba(255,255,255,.15);;
            padding-left:35px;
            }

            .main-content{
                margin-left:250px;
                padding:30px;
            }

            .header{
                background:white;
                padding:35px;
                border-radius:18px;
                box-shadow:0 5px 20px rgba(0,0,0,.08);
                margin-bottom:25px;
            }

            .header h2{
                color:#240344;
                font-weight:700;
            }

            .header h4{
                color:#6a11cb;
                font-weight:600;
            }

            .header h5{
                margin-top:15px;
                font-weight:600;
            }

            .info-box{
                background:white;
                border-left:5px solid #8405fc;
                padding:20px;
                border-radius:15px;
                margin-bottom:25px;
                box-shadow:0 3px 12px rgba(0,0,0,.08);
            }

            .info-box h5{
                color:#240344;
                font-weight:700;
                margin-bottom:10px;
            }

            .stat-card{
                border-radius:18px;
                color:white;
                padding:25px;
                box-shadow:0 5px 20px rgba(0,0,0,.12);
                transition:.3s;
            }

            .stat-card:hover{
                transform:translateY(-5px);
            }

            .card-dosen,
            .card-mahasiswa,
            .card-mk,
            .card-jadwal,
            .card-krs{
                background:linear-gradient(135deg,#8405fc,#240344);
            }

            .stat-card h5{
                font-size:18px;
                margin-bottom:10px;
            }

            .stat-card h1{
                font-size:50px;
                font-weight:700;
                margin:0;
            }

    </style>
</head>

<body>

<div class="sidebar">

```
<div class="logo">
    <h3>SIAKAD</h3>
    <small>Universitas Suryakancana</small>
</div>

<div class="sidebar-menu">

    <a href="/admin"> Dashboard</a>
    <a href="/dosen">   Dosen</a>
    <a href="/mahasiswa"> Mahasiswa</a>
    <a href="/matakuliah"> Mata Kuliah</a>
    <a href="/jadwal"> Jadwal Kuliah</a>
    <a href="/krs"> KRS</a>

    <form method="POST"
          action="{{ route('logout') }}"
          class="logout-form">
        @csrf

        <button type="submit" class="logout-btn">
            🚪 Logout
        </button>
    </form>

</div>
```

</div>


<div class="main-content">

    <div class="header">

        <h2>Sistem Informasi Akademik</h2>

        <h4>Universitas Suryakancana</h4>

        <hr>

        <h5>Selamat Datang Administrator</h5>

        <p>
            Sistem Informasi Akademik Universitas Suryakancana digunakan
            untuk mengelola data dosen, mahasiswa, mata kuliah,
            jadwal perkuliahan dan KRS mahasiswa secara terintegrasi.
        </p>

        <small>
            Tahun Akademik 2025/2026
        </small>

    </div>

    <div class="info-box">

        <h5>Informasi Sistem</h5>

        <p class="mb-0">
            Dashboard ini digunakan untuk memantau seluruh data akademik
            Universitas Suryakancana secara terpusat dan real-time.
        </p>

    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="stat-card card-dosen">
                <h5>Total Dosen</h5>
                <h1>{{ $jumlahDosen }}</h1>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card card-mahasiswa">
                <h5>Total Mahasiswa</h5>
                <h1>{{ $jumlahMahasiswa }}</h1>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card card-mk">
                <h5>Total Mata Kuliah</h5>
                <h1>{{ $jumlahMataKuliah }}</h1>
            </div>
        </div>

        <div class="col-md-6">
            <div class="stat-card card-jadwal">
                <h5>Total Jadwal</h5>
                <h1>{{ $jumlahJadwal }}</h1>
            </div>
        </div>

        <div class="col-md-6">
            <div class="stat-card card-krs">
                <h5>Total KRS</h5>
                <h1>{{ $jumlahKrs }}</h1>
            </div>
        </div>

    </div>

    <br><br>

   <div class="info-box mt-4">

    <h5>Ringkasan Sistem</h5>

    <p class="mb-0">
        Gunakan menu navigasi di sebelah kiri untuk mengelola data dosen,
        mahasiswa, mata kuliah, jadwal perkuliahan dan KRS mahasiswa.
    </p>

</div>

</div> <!-- penutup main-content -->

</body>
</html>