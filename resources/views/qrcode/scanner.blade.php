<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scan QR Code</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Tambahkan library html5-qrcode -->
  <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
</head>
<body class="bg-gray-900 text-gray-100">

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

  <!-- Main Content -->
  <main class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-center mb-8">Scan QR Code</h1>

    <!-- QR Code Scanner -->
    <div class="bg-gray-800 p-6 rounded-lg shadow">
      <div id="qr-reader" class="rounded-lg shadow"></div>
      <div id="qr-result" class="mt-6 text-center text-gray-300">
        <p id="result-message" class="text-lg">Arahkan kamera ke QR Code untuk memulai.</p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 py-6 mt-10">
    <div class="container mx-auto text-center">
      <p class="text-gray-400">
        &copy; 2024 Sistem Absensi Desa. Semua Hak Dilindungi.
      </p>
    </div>
  </footer>

  <!-- JavaScript untuk html5-qrcode -->
  <script>
    // Inisialisasi QR Code Scanner
    const qrReader = new Html5Qrcode("qr-reader");

    qrReader.start(
      { facingMode: "environment" }, // Gunakan kamera belakang
      {
        fps: 10, // Frame per detik
        qrbox: 250, // Ukuran area QR Code
      },
      (decodedText, decodedResult) => {
        // Jika QR Code berhasil dipindai
        document.getElementById("result-message").textContent = `QR Code ditemukan: ${decodedText}`;
        qrReader.stop(); // Hentikan scanner setelah berhasil membaca
        // Kirim data ke backend untuk validasi (AJAX/Fetch API)
        fetch('/qrcode-validasi', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': {{ csrf_token() }}, // Tambahkan CSRF token jika menggunakan Laravel
          },
          body: JSON.stringify({ code: decodedText }),
        })
          .then((response) => response.json())
          .then((data) => {
            if (data.message) {
              document.getElementById("result-message").textContent = data.message;
            }
          })
          .catch((error) => {
            console.error('Error:', error);
            document.getElementById("result-message").textContent = 'Terjadi kesalahan saat memvalidasi QR Code.';
          });
      },
      (errorMessage) => {
        // Jika QR Code belum ditemukan
        console.warn(`QR Code error: ${errorMessage}`);
      }
    ).catch((err) => {
      console.error("QR Code Scanner Error:", err);
    });
  </script>
</body>
</html>
