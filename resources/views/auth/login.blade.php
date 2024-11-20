<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-900 text-gray-100">

  <!-- Login Card -->
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
  </div>

</body>
</html>
