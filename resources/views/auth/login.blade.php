<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="{{ str_replace('http://', 'https://', Vite::asset('resources/css/app.css')) }}">
  <script type="module" src="{{ str_replace('http://', 'https://', Vite::asset('resources/js/app.js')) }}"></script>

</head>
<body class="bg-[#F1F5FF] min-h-screen bg-login bg-no-repeat bg-left-bottom pl-16 pr-[112px]">
  <nav class=" py-8">
    <div class="flex items-center">
      <img src="{{ asset('img/logo_pesawaran.png') }}" alt="">
      <div>
        <h1 class="font-poppins text-[45px] font-semibold">SiAbsen</h1>
        <h2 class="font-poppins text-[25px] font-light">Sistem Absensi Desa Baturaja</h2>
      </div>
    </div>
  </nav>

  <form class="bg-[#FFB524] px-16 pt-20 pb-24 w-[630px] rounded-3xl font-poppins ml-auto drop-shadow-custom" action="{{ route('login') }}" method="POST">
    @csrf
    <h1 class="font-medium text-[45px] text-center">Login</h1>
    <div>
      <input placeholder="Email" class="w-full rounded-full py-3 text-[25px] px-[20px] mt-[77px]" type="text" name="email" id="">
    </div>
    <div>
      <input placeholder="Password" class="w-full rounded-full py-3 text-[25px] px-[20px] mt-[46px]" type="password" name="password">
    </div>

    <div>
      <button class="mt-[140px] text-[30px] font-medium bg-[#010C4A] text-white w-full rounded-full" type="submit">Login</button>
    </div>
  </form>
  {{-- <!-- Login Card -->
  <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-lg p-6">
    <h2 class="text-2xl font-bold text-center">Login</h2>
    <p class="text-sm text-center text-gray-400 mt-1">
      Masuk ke akun Anda
    </p>

    <form method="POST" action="{{ route('login') }}" class="mt-6">
      @csrf
      <!-- Username -->
      <div>
        <label for="email" class="block text-sm font-medium">
          Email
        </label>
        <input
          type="text"
          id="email"
          name="email"
          class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="Masukkan email Anda"
          required
        />
      </div>

      <!-- Password -->
      <div class="mt-4">
        <label for="password" class="block text-sm font-medium">
          Password
        </label>
        <input
          type="password"
          id="password"
          name="password"
          class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="Masukkan password Anda"
          required
        />
      </div>

      <!-- Login Button -->
      <div class="mt-6">
        <button
          type="submit"
          class="w-full px-4 py-2 text-white bg-indigo-600 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-800"
        >
          Login
        </button>
      </div>
    </form>
  </div> --}}

</body>
</html>
