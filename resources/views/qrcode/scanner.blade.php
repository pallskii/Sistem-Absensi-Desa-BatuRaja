<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scan QR Code</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.8/html5-qrcode.min.js"
    integrity="sha512-r6rDA7W6ZeQhvl8S7yRVQUKVHdexq+GAlNkNNqVC7YyIV+NwqCTJe2hDWCiffTyRNOeGEzRRJ9ifvRm/HCzGYg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gray-900 text-gray-100">

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

  <main class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-center mb-8">Scan QR Code</h1>
    <div class="bg-gray-800 p-6 rounded-lg shadow">
      <div id="qr-reader" class="rounded-lg shadow"></div>
      <div id="qr-result" class="mt-6 text-center text-gray-300">
        <p id="result-message" class="text-lg">Arahkan kamera ke QR Code untuk memulai.</p>
      </div>
    </div>
  </main>

  <footer class="bg-gray-800 py-6 mt-10">
    <div class="container mx-auto text-center">
      <p class="text-gray-400">&copy; 2024 Sistem Absensi Desa. Semua Hak Dilindungi.</p>
    </div>
  </footer>

  <script>
    // Ambil CSRF token
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Inisialisasi QR Code Scanner
    const qrReader = new Html5Qrcode("qr-reader");

    qrReader.start(
      { facingMode: "environment" }, // Gunakan kamera belakang
      {
        fps: 10, // Frame per detik
        qrbox: { width: 500, height: 500 }, // Ukuran area QR Code
      },
      (decodedText, decodedResult) => {
        console.log("Scanned QR Code:", decodedText);
        document.getElementById("result-message").textContent = `QR Code ditemukan: ${decodedText}`;
        
        // Kirim data ke backend untuk validasi
        fetch('http://127.0.0.1:8000/qrcode-validasi', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken,
          },
          body: JSON.stringify({ code: decodedText }),
          credentials: 'same-origin',
        })
          .then((response) => {
            if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
            }
            window.location.href = "/"
            return response.json();
          })
          .then((data) => {
            if (data.message) {
              document.getElementById("result-message").textContent = data.message;
            } else {
              document.getElementById("result-message").textContent = 'QR Code validasi berhasil.';
            }
          })
          .catch((error) => {
            console.error('Error:', error);
          });
      },
      (errorMessage) => {
      }
    ).catch((err) => {
    });
  </script>
</body>
</html>
