@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow-lg w-100" style="max-width: 500px;">
        <h1 class="text-center mb-4">Form Data Mahasiswa</h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- Input Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama Anda" value="{{ old('nama') }}">
                @error('nama')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input NPM -->
            <div class="mb-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM Anda" value="{{ old('npm') }}">
                @error('npm')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Kelas -->
            <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required>
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
