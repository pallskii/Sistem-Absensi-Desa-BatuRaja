<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Kehadiran</title>
  <link rel="stylesheet" href="{{ str_replace('http://', 'https://', Vite::asset('resources/css/app.css')) }}">
  <script type="module" src="{{ str_replace('http://', 'https://', Vite::asset('resources/js/app.js')) }}"></script>
</head>
<body class="bg-[#F1F5FF] font-poppins">
    <nav class="py-7 pl-7 pr-[111px] bg-[#010C4A] text-white flex justify-between items-center">
    <div class="flex items-center">
      <img src="{{ asset('img/logo_pesawaran.png') }}" alt="">
      <div>
        <h1 class="font-poppins text-[45px] font-semibold">SiAbsen</h1>
        <h2 class="font-poppins text-[25px] font-light">Sistem Absensi Desa Baturaja</h2>
      </div>
    </div>
    <div class="flex gap-6 text-[#010C4A]">
      <h1 class="text-[20px] font-semibold rounded-full px-5 py-2 bg-[#FFB524]"><a href="{{ route('beranda') }}">Beranda</a></h1>
      <h1 class="text-[20px] font-semibold rounded-full px-5 py-2 bg-[#FFB524]"><a href="{{ route('logout') }}">Logout</a></h1>
    </div>
  </nav>

  <div class="px-[66px] mt-[70px]">
    <h1 class="text-[32px] font-semibold text-[#010C4A]">Selamat Datang, {{ Auth::user()->name }}!</h1>
    <div class="bg-[#010C4A]/10 px-[66px] mt-[70px] py-9">
      <h1 class="font-semibold text-[30px] text-center">Riwayat Kehadiran</h1>
      <table class="w-[90%] bg-[#010C4A] rounded-2xl ml-auto mr-auto mt-[40px]">
        <tr class="border border-white border-solid border-1">
            <th class="text-white py-3 text-[20px] font-semibold">Tanggal</th>
            <th class="text-white py-3 text-[20px] font-semibold">Status Kehadiran</th>
            <th class="text-white py-3 text-[20px] font-semibold">Waktu Check-in</th>
        </tr>
         @if (!$kehadiran->isEmpty())
        @foreach ($kehadiran as $item)
        <tr class="border border-white border-solid border-1 text-center">
            <td class="py-2 text-[20px] text-white/50 font-normal">{{$item->qrcode->valid_date}}</td>
            <td class="py-2 text-[20px] text-white font-semibold">
                @if ($item->status == 'hadir')
                <h1 class="px-7 py-2 rounded-xl bg-[#15F332] ml-auto mr-auto w-fit">Hadir</h1>
                @else
                <h1 class="px-7 py-2 rounded-xl bg-[#FF0000] ml-auto mr-auto w-fit">Tidak Hadir</h1>
                @endif
            </td>
            <td class="py-2 text-[20px] text-white/50 font-normal">{{$item->created_at}}</td>
        </tr>
        @endforeach
        @endif
      </table>
    </div>

    <h1 class="text-[20px] text-white bg-[#FFB524] w-fit ml-auto mr-auto mt-[38px] px-6 py-2 rounded-2xl"><a href="{{route('qrcode.scanner')}}">Lakukan Absensi</a></h1>
  </div>

  <footer class="bg-[#010C4A]">
    <h3 class="font-medium text-[15px] text-center text-white py-[60px] mt-[150px]">© 2024 Sistem Absensi Desa. Semua Hak Dilindungi.</h3>
  </footer>

  
  {{-- <!-- Header -->
  <header class="bg-gray-800 shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <div class="text-2xl font-bold text-indigo-500">
        Sistem Absensi
      </div>
      <nav>
        @if(auth()->user()->role == 'admin')
        <a href="/admin" class="text-gray-300 hover:text-white">Admin</a>
        @endif
        <a href="/logout" class="text-gray-300 hover:text-white">Logout</a>
      </nav>
    </div>
  </header>

  @if(Session::has('success'))
    <p class="text-2xl font-bold text-center mb-8 text-green-400">{{ Session::get('message') }}</p>
  @endif  
  

  @if(Session::has('error'))
    <p class="text-2xl font-bold text-center mb-8 text-red-400">{{ Session::get('message') }}</p>
  @endif


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
    @if(auth()->user()->role == 'admin')
    <h2 class="bg-indigo-500 text-2xl font-bold text-center mt-8 w-fit px-3 py-2 rounded-lg ml-auto mr-auto"><a class="w-fit" href="/generate-qr-code">Generate QR </a></h2>
    @endif
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 py-6 mt-96">
    <div class="container mx-auto text-center">
      <p class="text-gray-400">
        &copy; 2024 Sistem Absensi Desa. Semua Hak Dilindungi.
      </p>
    </div>
  </footer> --}}

</body>
</html>
