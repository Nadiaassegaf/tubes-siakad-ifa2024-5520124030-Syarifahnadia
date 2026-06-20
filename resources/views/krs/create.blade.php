<!DOCTYPE html>
<html>

<head>
    <title>Tambah KRS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef3f8;
        }

        .card-custom {
            border: none;
            border-top: 5px solid #240344;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .1);
            border-radius: 10px;
        }

        .title {
            color: #240344;
            font-weight: bold;
        }

        .btn-simpan {
            background: #240344;
            color: white;
            border: none;
        }

        .btn-simpan:hover {
            background: #240344;
            color: white;
        }

        .btn-kembali {
            background: #8405fc;
            color: white;
            border: none;
        }

        .btn-kembali:hover {
            background: #240344;
            color: white;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card card-custom">
        <div class="card-body">

            <h2 class="title mb-4">Tambah Data KRS</h2>

            <form action="{{ route('krs.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Mahasiswa</label>

                    <select name="mahasiswa_id" class="form-control">

                        @foreach($mahasiswas as $mahasiswa)

                            <option value="{{ $mahasiswa->id }}">
                                {{ $mahasiswa->nama }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jadwal</label>

                    <select name="jadwal_id" class="form-control">

                        @foreach($jadwals as $jadwal)

                            <option value="{{ $jadwal->id }}">
                                {{ $jadwal->mataKuliah->nama_mk }}
                                -
                                {{ $jadwal->hari }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-simpan">
                    Simpan
                </button>

                <a href="/krs" class="btn btn-kembali">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
