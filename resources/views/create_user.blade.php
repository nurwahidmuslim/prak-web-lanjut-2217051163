<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-r from-blue-800 to-blue-900 flex items-center justify-center">

    <div class="bg-white bg-opacity-95 p-10 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-3xl font-bold text-center mb-8 text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-blue-700">
            Form Data Mahasiswa
        </h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- Input Nama -->
            <div class="mb-6">
                <label for="nama" class="block text-blue-600 text-sm font-semibold mb-2">Nama:</label>
                <input type="text" name="nama" id="nama" class="w-full p-3 bg-blue-50 text-gray-800 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama Anda">
            </div>

            <!-- Input Kelas -->
            <div class="mb-6">
                <label for="kelas" class="block text-blue-600 text-sm font-semibold mb-2">Kelas:</label>
                <input type="text" name="kelas" id="kelas" class="w-full p-3 bg-blue-50 text-gray-800 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan kelas Anda">
            </div>

            <!-- Input NPM -->
            <div class="mb-6">
                <label for="npm" class="block text-blue-600 text-sm font-semibold mb-2">NPM:</label>
                <input type="text" name="npm" id="npm" class="w-full p-3 bg-blue-50 text-gray-800 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan NPM Anda">
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-center mt-8">
                <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold px-6 py-3 rounded-full shadow-lg hover:from-blue-600 hover:to-blue-700 transition duration-300 transform hover:scale-105">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>

</body>
</html>
