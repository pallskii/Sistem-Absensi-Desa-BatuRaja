<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ str_replace('http://', 'https://', Vite::asset('resources/css/app.css')) }}">
  <script type="module" src="{{ str_replace('http://', 'https://', Vite::asset('resources/js/app.js')) }}"></script>

</head>
<body class="bg-[#F1F5FF] min-h-screen bg-login bg-no-repeat bg-left-bottom lg:pl-16 lg:pr-[112px]">
  <nav class="py-8">
    <div class="flex items-center">
      <img src="{{ asset('img/logo_pesawaran.png') }}" alt="">
      <div>
        <h1 class="font-poppins text-[35px] sm:text-[45px] font-semibold">SiAbsen</h1>
        <h2 class="font-poppins text-[20px] sm:text-[25px] font-light">Sistem Absensi Desa Baturaja</h2>
      </div>
    </div>
  </nav>

  <form class="bg-[#FFB524] px-4 sm:px-10 md:px-16  pt-14 sm:pt-20 pb-24 w-[80%] sm:w-[530px] md:w-[630px] rounded-3xl font-poppins ml-auto max-lg:mr-auto drop-shadow-custom" action="{{ route('login') }}" method="POST">
    @csrf
    <h1 class="font-medium text-[45px] text-center">Login</h1>
    <div>
      <input placeholder="Email" class="w-full rounded-full py-3 text-[25px] px-[20px] mt-[45px] sm:mt-[50px] md:mt-[77px]" type="text" name="email" id="">
    </div>
    <div>
      <input placeholder="Password" class="w-full rounded-full py-3 text-[25px] px-[20px] mt-[46px]" type="password" name="password">
    </div>

    <div>
      <button class="mt-[90px] sm:mt-[100px] md:mt-[140px] text-[30px] font-medium bg-[#010C4A] text-white w-full rounded-full" type="submit">Login</button>
    </div>
  </form>
</body>
</html>
