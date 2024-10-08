@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow-lg w-100" style="max-width: 500px; background-color: rgba(13, 49, 111, 0.8); border-radius: 10px; border: 2px solid #82000f;">
        <style>
            input::placeholder {
                color: #d9d9d9 !important;
            }

            /* Style untuk tombol */
            .btn {
                font-weight: bold;
                width: auto;
                padding-left: 20px;
                padding-right: 20px;
            }

            /* Tombol khusus */
            .btn-warning {
                color: #0d316f !important;
            }

            .btn-secondary {
                color: #fff;
                background-color: #82000f;
                border: none;
            }
        </style>
        <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label text-light">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Anda" value="{{ old('nama', $user->nama) }}" style="background-color: #82000f; color: #fff;">
                @error('nama')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input NPM -->
            <div class="mb-3">
                <label for="npm" class="form-label text-light">NPM:</label>
                <input type="text" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM Anda" value="{{ old('npm', $user->npm) }}" style="background-color: #82000f; color: #fff;">
                @error('npm')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Kelas -->
            <div class="mb-3">
                <label for="kelas_id" class="form-label text-light">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required style="background-color: #0d316f; color: #fff;">
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}"
                            {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto" style="border: 2px solid #ffcc00; padding: 10px; border-radius: 5px; background-color: #f9f9f9;">
                @if($user->foto)
                    <img src="{{ asset($user->foto) }}" alt="User Photo" width="100" class="mt-2">
                @endif
            </div>

            <!-- Tombol Simpan Data -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-warning">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
