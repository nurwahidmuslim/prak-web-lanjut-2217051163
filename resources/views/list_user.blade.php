@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <a href="/user/create" class="btn btn-primary mb-3" style="background-color: #A50044; border-color: #A50044;">Tambah Pengguna Baru</a>
    
    <div class="row">
        @forelse ($users as $user)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset($user->foto ?? 'assets/img/default.png') }}" style="height: 18rem; transition: transform 0.3s;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $user->nama }}</h5>
                        <p class="card-text">NPM: {{ $user->npm }}
                        <br>Kelas: {{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}
                        <br>Jurusan: {{ $user->jurusan }}
                        <br>Semester: {{ $user->semester }}</p>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary mb-2" style="background-color: #004D98; border-color: #004D98;">View</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary mb-2" style="background-color: #A50044; border-color: #A50044;">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning" style="background-color: #ffcc00; border-color: #ffcc00;" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>Tidak ada data pengguna yang tersedia.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
