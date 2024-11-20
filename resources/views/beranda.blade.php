<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Kehadiran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen h-screen">

  <!-- Header -->
  <header class="bg-gray-800 shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <div class="text-2xl font-bold text-indigo-500">
        Sistem Absensi
      </div>
      <nav>
        <a href="/logout" class="text-gray-300 hover:text-white">Logout</a>
      </nav>
    </div>
  </header>

  <!-- Tabel Kehadiran -->
  <main class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-left mb-8 capitalize">Selamat Datang, {{ auth()->user()->name }}</h1>

    
    <h1 class="text-2xl font-bold text-center mb-8">Riwayat Kehadiran</h1>
    <div class="bg-gray-800 rounded-lg shadow overflow-x-auto">
        <table class="min-w-full bg-gray-800">
            <thead>
                <tr class="text-left text-gray-300 bg-gray-700">
                    <th class="px-6 py-3">Tanggal</th>
                    <th class="px-6 py-3">Status Kehadiran</th>
                    <th class="px-6 py-3">Waktu Check-in</th>
                </tr>
            </thead>
            <tbody>
                @if (!$kehadiran->isEmpty())
                    @foreach ($kehadiran as $item)
                    <!-- Contoh Data -->
                    <tr class="text-gray-300 border-t border-gray-700">
                        <td class="px-6 py-3">{{$item->qrcode->valid_date}}</td>
                        @if ($item->status == 'hadir')
                        <td class="px-6 py-3">
                            <span class="px-3 py-1 bg-green-600 text-white rounded capitalize">{{$item->status}}</span>
                        </td>
                        @else
                        <td class="px-6 py-3">
                            <span class="px-3 py-1 bg-red-600 text-white rounded capitalize">{{$item->status}}</span>
                        </td>
                        @endif
                        <td class="px-6 py-3">{{$item->created_at}}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
      </table>
    </div>
    <h2 class="bg-indigo-500 text-2xl font-bold text-center mt-8 w-fit px-3 py-2 rounded-lg ml-auto mr-auto"><a class="w-fit" href="/qrcode-scanner">Lakukan Absensi</a></h2>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 py-6 mt-96">
    <div class="container mx-auto text-center">
      <p class="text-gray-400">
        &copy; 2024 Sistem Absensi Desa. Semua Hak Dilindungi.
      </p>
    </div>
  </footer>

</body>
</html>
