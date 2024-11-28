<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Kehadiran</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
    <div class="flex gap-[193px] mt-[201px] justify-center">
      <a href="{{ route('presensi') }}">
        <div class="bg-[#FFB524] border-black border border-solid w-[143px] h-[143px] flex flex-col justify-center items-center rounded-3xl">
          <img src="{{ asset('img/kalender.png') }}" alt="">
          <h1 class="text-[20px] font-semibold text-[#010C4A]">Presensi</h1>
        </div>
      </a>
      <a href="{{route('qrcode.scanner')}}">
        <div class="bg-[#FFB524] border-black border border-solid w-[143px] h-[143px] flex flex-col justify-center items-center rounded-3xl">
          <img src="{{ asset('img/qrs.png') }}" alt="">
          <h1 class="text-[20px] font-semibold text-[#010C4A]">Scan QR</h1>
        </div>
      </a>
    </div>
  </div>

  <footer class="bg-[#010C4A]">
    <h3 class="font-medium text-[15px] text-center text-white py-[60px] mt-[250px]">© 2024 Sistem Absensi Desa. Semua Hak Dilindungi.</h3>
  </footer>
</body>
</html>
