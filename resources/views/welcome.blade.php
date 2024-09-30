<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>neobiling</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
         /* tambah ini supaya lebar kontennya tidak melebihi viewport */
         html, body {
            overflow-x: hidden; 
        } 
    </style>
</head>

<body class="bg-gray-100">
   <!-- Header -->
   <header class="flex justify-between items-center p-6 bg-orange-500 fixed w-full top-0 z-50 transition-all duration-300 shadow-lg">
    <div class="flex items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="RadbooX logo" width="50" height="50"
            class="mr-3 rounded-full border-4 border-white p-1 bg-white shadow-md" />
        <h1 class="text-4xl font-bold text-white tracking-wide italic">neobiling</h1>
    </div>

    <nav class="hidden md:flex space-x-8 text-lg">
        <a href="#home" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">Home</a>
        <a href="#about" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">About</a>
        <a href="#service" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">Services</a>
        <a href="#pricing" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">Pricing</a>
        <a href="#faq" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">FAQ</a>
        <a href="#contact" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">Contact</a>
    </nav>

    <div class="hidden md:flex space-x-4">
        <a href="http://my.idneobilling.com/auth/login" class="bg-orange-400 text-white py-2 px-4 rounded-full shadow-lg transition-transform duration-300 hover:bg-orange-300 hover:text-white">
            My Account
        </a>
        <a href="#" class="bg-green-500 text-white py-2 px-4 rounded-full shadow-lg flex items-center transition-transform duration-300 hover:bg-green-400">
            <i class="fab fa-whatsapp mr-2"></i> Chat on WhatsApp
        </a>
    </div>
    
    <div class="md:hidden">
        <button id="menu-button" class="text-white focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>
</header>
<!-- Mobile Menu (Hidden by default) -->
<div class="flex justify-center">
  <nav id="menu" class="lg:hidden hidden w-full max-w-[calc(100%-3rem)] fixed mt-20 rounded-lg bg-white p-6 justify-center z-50 flex flex-col space-y-7 shadow-lg">
      <a href="#home" class="text-gray-700 hover:text-orange-500 transition duration-300">Home</a>
      <a href="#about" class="text-gray-700 hover:text-orange-500 transition duration-300">About</a>
      <a href="#service" class="text-gray-700 hover:text-orange-500 transition duration-300">Services</a>
      <a href="#pricing" class="text-gray-700 hover:text-orange-500 transition duration-300">Pricing</a>
      <a href="#faq" class="text-gray-700 hover:text-orange-500 transition duration-300">FAQ</a>
      <a href="#contact" class="text-gray-700 hover:text-orange-500 transition duration-300">Contact</a>

      <!-- Make buttons appear in separate rows -->
      <div class="mt-auto space-y-3">
          <a href="http://my.idneobilling.com/auth/login" class="bg-orange-500 text-white py-2 px-5 w-full text-center rounded-full shadow-lg flex items-center justify-center transition-transform duration-300 hover:bg-orange-300 hover:text-white transform hover:scale-105">
              My Account
          </a>
          <a href="#" class="bg-green-500 text-white py-2 px-5 w-full text-center rounded-full shadow-lg flex items-center justify-center transition-transform duration-300 hover:bg-green-400 transform hover:scale-105">
              <i class="fab fa-whatsapp mr-2"></i> Chat on WhatsApp
          </a>
      </div>
  </nav>
</div>

<!-- MAIN CONTENT -->
    <main id="home" class="flex flex-col md:flex-row justify-between items-center p-12 bg-orange-500 text-white">
        <!-- LEFT SIDE TEXT CONTENT -->
        <div class="max-w-lg space-y-6" data-aos="fade-up">
            <h2 class="text-5xl font-bold leading-tight mb-4 tracking-wider">
                Solusi Akuntansi dan Otentikasi MikroTik Anda
            </h2>
            <p class="text-white text-lg tracking-wide">
                Radius Server, Users Management, Billing, Notification, Payment Gateway, OLT ZTE Management Semua dalam satu Aplikasi.
            </p>
            <div class="flex space-x-4 mt-6">
                <a href="#about" class="bg-orange-400 text-white hover:bg-orange-400 hover:text-white py-3 px-6 rounded-full text-lg font-semibold shadow-md transition duration-300 transform hover:scale-110">
                    Get Started
                </a>
                <a href="#" class="flex items-center bg-orange-400 text-white hover:bg-orange-400 hover:text-white py-3 px-6 rounded-full text-lg font-semibold shadow-md transition duration-300 transform hover:scale-110">
                    <i class="fas fa-play-circle text-1xl mr-2"></i> Watch Video
                </a>
            </div>
        </div>

        <!-- RIGHT SIDE IMAGE -->
        <div class="flex-shrink-0 mt-10 md:mt-20" data-aos="fade-left">
            <div class="relative rounded-xl overflow-hidden  transition-transform duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/img/hero-img.png') }}" alt="Illustration of people interacting with technology" width="600" height="400" class="object-cover"/>
            </div>
        </div>
    </main>

<!-- ABOUT US -->
  <section id="about" class="py-16 bg-gradient-to-r from-blue-50 to-teal-50 scroll-mt-16">
    <div class="container mx-auto px-6" data-aos="fade-right">
      <!-- About Us dan Visi dan Misi Kami -->
      <div class="text-center mb-16">
        <!-- About Us Heading -->
        <h2 class="text-3xl font-extrabold text-blue-900 mb-4">ABOUT US</h2>
        <div class="w-20 h-1 bg-gradient-to-r from-orange-400 to-blue-600 mx-auto mb-8"></div>
      </div>
      
      <div class="flex justify-center space-x-8">
        <div class="w-1/2">
          <p class="mb-4" data-aos="fade-up">RadbooX adalah Applikasi Radius Server untuk pengguna mikrotik yang menerapkan sistem Otentikasi, Otorisasi, dan Akuntansi (AAA) pada jaringan PPPoE dan Hotspot sebagai Network Access.</p>
          <ul class="list-none space-y-2" data-aos="fade-up">
            <li class="flex items-start">
              <i class="fas fa-check text-orange-400 mr-2"></i>
              <span><strong>Radius</strong> sebagai protokol yang mengelola akses jaringan</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-orange-400 mr-2"></i>
              <span>Support enkripsi tipe CHAP, MSCHAP dan PAP</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-orange-400 mr-2"></i>
              <span>Lebih aman dan memudahkan proses pengolahan data Users</span>
            </li>
          </ul>
        </div>
        <div class="w-1/2" data-aos="fade-up">
          <p class="mb-4">RadbooX selain untuk Radius Server juga dapat digunakan untuk <strong>Manajemen Keuangan (Billing)</strong>. Dengan fasilitas dan kemudahan layanan yang kami berikan, cukup satu pintu cukup dengan RadbooX.</p>
          <a href="http://my.idneobilling.com/auth/register" class="bg-orange-400 text-white rounded-full px-6 py-3 font-bold hover:bg-orange-500 transition duration-300">Free Trial</a>
        </div>
      </div>
    </div>
  </section>

<!-- FEATURES SECTION -->
<section id="features" class="bg-gradient-to-r from-pink-200 via-orange-200 to-pink-200 py-16 scroll-mt-16" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-center">
    <!-- Image Section -->
    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12 lg:pr-16 flex justify-center md:justify-start">
      <img src="{{ asset('assets/img/Network.png') }}" alt="Network Image" class="w-3/4 md:w-full h-auto rounded-lg" data-aos="zoom-in">
    </div>

    <!-- Feature List Section -->
    <div class="md:w-1/2 space-y-6">
      <!-- Section Title -->
      <div class="text-center md:text-left mb-8" data-aos="fade-left">
        <h1 class="text-3xl font-extrabold text-blue-900 mb-4">Fitur RadbooX Tanpa Pihak Ketiga</h1>
        <p class="text-gray-800 text-lg leading-relaxed">
          Solusi lengkap untuk manajemen user, keuangan, laporan, tagihan, dan pemberitahuan otomatis.
        </p>
      </div>

      <!-- Feature List -->
      <div class="space-y-4">
        <!-- Feature Item Template -->
        <div class="feature-item bg-white p-4 rounded-lg shadow-md cursor-pointer transition-all duration-300" data-aos="fade-up" onclick="toggleFeature(this)">
          <div class="flex items-center space-x-4">
            <div class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center bg-blue-50 shadow-inner">01</div>
            <div class="flex-1">
              <div class="flex justify-between items-center">
                <span class="text-gray-700 font-bold text-lg feature-title hover:text-blue-900">Notifikasi Via WhatsApp Menggunakan Nomor Sendiri</span>
                <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300 transform chevron-icon"></i>
              </div>
              <p class="text-gray-800 mt-2 feature-description hidden">
                Fitur gratis ini bisa langsung digunakan tanpa biaya tambahan. Kami menyediakan Scan QR Code melalui halaman account untuk penggunaan nomor WhatsApp sendiri.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-item bg-white p-4 rounded-lg shadow-md cursor-pointer transition-all duration-300" data-aos="fade-up" data-aos-delay="100" onclick="toggleFeature(this)">
          <div class="flex items-center space-x-4">
            <div class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center bg-blue-50 shadow-inner">02</div>
            <div class="flex-1">
              <div class="flex justify-between items-center">
                <span class="text-gray-700 font-bold text-lg feature-title hover:text-blue-900">Generate Invoice Otomatis oleh Sistem</span>
                <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300 transform chevron-icon"></i>
              </div>
              <p class="text-gray-800 mt-2 feature-description hidden">
                Tagihan pelanggan otomatis akan dibuat setiap bulan. Pelanggan akan menerima notifikasi real-time terkait terbitnya invoice.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-item bg-white p-4 rounded-lg shadow-md cursor-pointer transition-all duration-300" data-aos="fade-up" data-aos-delay="200" onclick="toggleFeature(this)">
          <div class="flex items-center space-x-4">
            <div class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center bg-blue-50 shadow-inner">03</div>
            <div class="flex-1">
              <div class="flex justify-between items-center">
                <span class="text-gray-700 font-bold text-lg feature-title hover:text-blue-900">Support Payment Pascabayar dan Prabayar</span>
                <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300 transform chevron-icon"></i>
              </div>
              <p class="text-gray-800 mt-2 feature-description hidden">
                Pembayaran dapat dilakukan dengan 2 opsi: Pascabayar (bayar di akhir) dan Prabayar (bayar di awal).
              </p>
            </div>
          </div>
        </div>

        <div class="feature-item bg-white p-4 rounded-lg shadow-md cursor-pointer transition-all duration-300" data-aos="fade-up" data-aos-delay="300" onclick="toggleFeature(this)">
          <div class="flex items-center space-x-4">
            <div class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center bg-blue-50 shadow-inner">04</div>
            <div class="flex-1">
              <div class="flex justify-between items-center">
                <span class="text-gray-700 font-bold text-lg feature-title hover:text-blue-900">Rekap Laporan Harian dan Bulanan</span>
                <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300 transform chevron-icon"></i>
              </div>
              <p class="text-gray-800 mt-2 feature-description hidden">
                Semua transaksi direkap otomatis setiap hari dan bulan, tanpa perlu membuat laporan manual.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-item bg-white p-4 rounded-lg shadow-md cursor-pointer transition-all duration-300" data-aos="fade-up" data-aos-delay="400" onclick="toggleFeature(this)">
          <div class="flex items-center space-x-4">
            <div class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center bg-blue-50 shadow-inner">05</div>
            <div class="flex-1">
              <div class="flex justify-between items-center">
                <span class="text-gray-700 font-bold text-lg feature-title hover:text-blue-900">Support Multi User and Role</span>
                <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300 transform chevron-icon"></i>
              </div>
              <p class="text-gray-800 mt-2 feature-description hidden">
                Buat user tambahan seperti Operator dan Kasir untuk manajemen dan pencatatan keuangan.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-item bg-white p-4 rounded-lg shadow-md cursor-pointer transition-all duration-300" data-aos="fade-up" data-aos-delay="500" onclick="toggleFeature(this)">
          <div class="flex items-center space-x-4">
            <div class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center bg-blue-50 shadow-inner">06</div>
            <div class="flex-1">
              <div class="flex justify-between items-center">
                <span class="text-gray-700 font-bold text-lg feature-title hover:text-blue-900">Data Terpusat</span>
                <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300 transform chevron-icon"></i>
              </div>
              <p class="text-gray-800 mt-2 feature-description hidden">
                Kelola user dan tagihan lebih mudah dengan menghubungkan semua cabang server MikroTik.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-item bg-white p-4 rounded-lg shadow-md cursor-pointer transition-all duration-300" data-aos="fade-up" data-aos-delay="600" onclick="toggleFeature(this)">
          <div class="flex items-center space-x-4">
            <div class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center bg-blue-50 shadow-inner">07</div>
            <div class="flex-1">
              <div class="flex justify-between items-center">
                <span class="text-gray-700 font-bold text-lg feature-title hover:text-blue-900">Payment Gateway</span>
                <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300 transform chevron-icon"></i>
              </div>
              <p class="text-gray-800 mt-2 feature-description hidden">
                Terima pembayaran online dengan Virtual Account, Alfamart, eWallet (OVO, DANA, ShopeePay, dll.) tanpa register tambahan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills" class="bg-white font-roboto py-12" data-aos="fade-up">
  <div class="bg-white py-8">
    <div class="container mx-auto px-6 flex flex-col items-center text-center">
      <!-- Text Section -->
      <div class="max-w-lg">
        <h1 class="text-3xl font-extrabold text-blue-900 mb-6" data-aos="fade-right">Hemat Biaya dan Waktu</h1>
        <p class="text-gray-800 mb-4" data-aos="fade-right" data-aos-delay="100">
          Bersama RadbooX, Anda tidak perlu ada tambahan aplikasi atau daftar penyedia lainnya. RadbooX akan meringankan pekerjaan Anda.
        </p>
        <p class="text-gray-800 mb-4" data-aos="fade-right" data-aos-delay="200">
          Kami berupaya semaksimal mungkin dalam menyajikan fitur agar pekerjaan Anda menjadi lebih ringan.
        </p>
        <p class="text-gray-800 mb-6" data-aos="fade-right" data-aos-delay="300">Daftar sekarang juga, gratis 100% selama 1 minggu.</p>
        <a href="http://my.idneobilling.com/auth/register" class="bg-orange-400 text-white rounded-full px-6 py-3 font-bold hover:bg-orange-500 transition duration-300" data-aos="fade-up" data-aos-delay="400">Free Trial</a>
      </div>
    </div>
  </div>
</section>

<!-- DATA CENTER SECTION -->
<section id="data-center" class="bg-gradient-to-r from-pink-200 via-orange-200 to-pink-200 py-16" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-12 md:space-y-0 md:space-x-12">
      <!-- Left Side -->
      <div class="md:w-1/2">
        <h2 class="text-4xl font-extrabold text-blue-900 mb-4 text-center md:text-left" data-aos="fade-left">RadbooX Data Center</h2>
        <p class="text-gray-800 mb-8 leading-relaxed text-lg text-center md:text-left" data-aos="fade-left" data-aos-delay="100">
          Server kami berada di Cyber Data Center Jakarta, memberikan akses cepat dari manapun dengan jaminan uptime SLA 99%. Didukung oleh listrik backup, server kami tetap berjalan bahkan dalam situasi darurat.
        </p>
        <ul class="space-y-6" data-aos="fade-left" data-aos-delay="200">
          <li class="flex items-start space-x-4">
            <i class="fas fa-server text-orange-400 text-3xl mt-1"></i>
            <span class="text-gray-800 text-lg">100% Penyimpanan menggunakan Solid State Drive (SSD) dengan RAID 10.</span>
          </li>
          <li class="flex items-start space-x-4">
            <i class="fas fa-lock text-orange-400 text-3xl mt-1"></i>
            <span class="text-gray-800 text-lg">Keamanan data tingkat tinggi dengan enkripsi standar industri.</span>
          </li>
          <li class="flex items-start space-x-4">
            <i class="fas fa-clock text-orange-400 text-3xl mt-1"></i>
            <span class="text-gray-800 text-lg">Monitoring server 24/7 untuk memastikan performa optimal.</span>
          </li>
        </ul>
      </div>

      <!-- Right Side -->
      <div class="md:w-1/2 flex justify-center md:justify-end">
        <div class="relative w-full max-w-sm md:max-w-none md:w-auto rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300" data-aos="zoom-in">
          <img src="{{ asset('assets/img/Data Center.png') }}" alt="Data Center" class="w-full h-auto object-cover" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES SECTION -->
<section id="service" class="bg-gray-100 py-16 scroll-mt-16" data-aos="fade-up">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-extrabold text-blue-900" data-aos="fade-up">SERVICES</h2>
      <div class="flex justify-center mt-3">
        <div class="w-20 h-1 bg-gradient-to-r from-orange-400 to-blue-600 mx-auto mb-8"></div>
      </div>
      <p class="mt-6 text-gray-800 max-w-2xl mx-auto text-lg leading-relaxed" data-aos="fade-up" data-aos-delay="100">
        RadbooX menyediakan paket langganan dengan harga bervariasi. Semua paket mendapatkan performance server yang sama. 
        Dengan dukungan tim teknis yang sangat berpengalaman dalam bidang jaringan internet, kami siap mendukung penuh 
        selama berlangganan.
      </p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Service 01 -->
      <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up">
        <i class="fas fa-server text-6xl text-orange-400 mb-6"></i>
        <h3 class="text-xl font-bold text-blue-900 mb-2">Radius Server</h3>
        <p class="text-gray-800">Support PPPoE dan Hotspot, dengan Protokol CHAP, MSCHAP dan PAP.</p>
      </div>
      <!-- Service 02 -->
      <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
        <i class="fas fa-file-invoice-dollar text-6xl text-orange-400 mb-6"></i>
        <h3 class="text-xl font-bold text-blue-900 mb-2">Billing</h3>
        <p class="text-gray-800">Manajemen keuangan dan catatan pembayaran pelanggan.</p>
      </div>
      <!-- Service 03 -->
      <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
        <i class="fas fa-sync-alt text-6xl text-orange-400 mb-6"></i>
        <h3 class="text-xl font-bold text-blue-900 mb-2">Update</h3>
        <p class="text-gray-800">Fitur-fitur selalu diperbarui mengikuti kebutuhan dan maintenance.</p>
      </div>
      <!-- Service 04 -->
      <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
        <i class="fas fa-database text-6xl text-orange-400 mb-6"></i>
        <h3 class="text-xl font-bold text-blue-900 mb-2">Backup</h3>
        <p class="text-gray-800">Sistem kami sudah auto backup, dengan SLA 99% uptime.</p>
      </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION (CTA) SECTION -->
<section class="relative bg-orange-400 bg-opacity-70 py-24">
    <!-- Background Image with Parallax Effect -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/img/Ecommerce Development .png') }}'); background-attachment: fixed;">
    </div>
  
    <!-- Overlay Color to Darken the Background -->
    <div class="absolute inset-0 bg-orange-400 bg-opacity-70"></div>
  
    <!-- Content Section -->
    <div class="relative container mx-auto px-6 z-10">
      <div class="flex flex-col lg:flex-row items-center justify-between">
        <!-- Text Section -->
        <div class="lg:w-9/12 lg:text-left pl-14 mb-8 lg:mb-0 text-white">
            <h3 class="text-3xl lg:text-4xl font-bold mb-4">Trial 100% Gratis</h3>
            <p class="text-lg leading-relaxed">
            Ingin mencoba?.. Silahkan daftar hari ini juga, gratis selama 1 minggu, bayar hanya jika lanjut berlangganan. Nikmati semua fitur yang sudah kami siapkan.
            </p>
        </div>
        <!-- Button Section -->
        <div class="lg:w-3/12 text-center">
            <a href="http://my.idneobilling.com/auth/login" class="bg-transparent border-2 border-white text-white font-semibold py-3 px-6 rounded-xl shadow-md hover:bg-orange-400 hover:text-white transition duration-300">Try Free</a>
        </div>
  
      </div>
    </div>
  </section>

<!-- PRICING -->
<section id="pricing" class="bg-gradient-to-r from-blue-50 via-white to-gray-50 text-gray-800 py-20 scroll-mt-16">
  <div class="max-w-4xl mx-auto text-center">
    <h1 class="text-4xl font-extrabold text-blue-900 mb-4" data-aos="fade-down">PRICING</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-orange-400 to-blue-600 mx-auto mb-8" data-aos="zoom-in"></div>
    <p class="mb-8 max-w-2xl mx-auto text-lg leading-relaxed" data-aos="fade-up" data-aos-delay="200">
      Jumlah Users adalah batas pelanggan dalam tabel baik hotspot maupun PPPoE. Ketika sudah mencapai batas, Anda tidak dapat membuat user baru, namun bisa menghapus user yang lama atau tidak terpakai kemudian membuat user baru.
    </p>
    <p class="mb-8 max-w-2xl mx-auto text-lg leading-relaxed" data-aos="fade-up" data-aos-delay="300">
      Unlimited NAS, tidak ada batasan Router Mikrotik yang dapat dihubungkan ke Radius. Jika Anda memiliki cabang lebih dari satu, Anda dapat menghubungkan semua router ke sistem.
    </p>
    <p class="text-gray-800 font-bold text-1xl mb-12" data-aos="fade-up" data-aos-delay="400">
      Pilih paket yang sesuai dengan kebutuhan Anda.
    </p>
  </div>
</section>

<!-- SECTION: Paket Radius -->
<section class="bg-gradient-to-r from-pink-200 via-orange-200 to-pink-200 py-16">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Radius Starter -->
      <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-6 transform transition-transform hover:scale-105 duration-300">
        <h2 class="text-2xl font-semibold text-orange-500 mb-3" data-aos="fade-up">Radius Starter</h2>
        <p class="text-4xl font-bold text-blue-900 mb-2" data-aos="fade-up" data-aos-delay="100">Rp100.000</p>
        <p class="text-blue-500 mb-4" data-aos="fade-up" data-aos-delay="200">per bulan</p>
        <ul class="mb-6 space-y-3">
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="300"><i class="fas fa-check text-green-500 mr-2"></i> Unlimited NAS</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="400"><i class="fas fa-check text-green-500 mr-2"></i> 200 Users PPPoE</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="500"><i class="fas fa-check text-green-500 mr-2"></i> 10.000 Users Hotspot</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="600"><i class="fas fa-check text-green-500 mr-2"></i> 300 Hotspot Sesi Aktif</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="700"><i class="fas fa-check text-green-500 mr-2"></i> Free VPN</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="800"><i class="fas fa-check text-green-500 mr-2"></i> Free Setup</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="900"><i class="fas fa-check text-green-500 mr-2"></i> Free WhatsApp Notifikasi</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="1000"><i class="fas fa-check text-green-500 mr-2"></i> No Additional Fee</li>
        </ul>
        <a href="http://my.idneobilling.com/auth/register" class="bg-orange-500 text-white border border-orange-500 rounded-full px-6 py-3 hover:bg-orange-600 transition duration-300">
          Order Now
        </a>
      </div>

      <!-- Radius Basic -->
      <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-6 transform transition-transform hover:scale-105 duration-300">
        <h2 class="text-2xl font-semibold text-orange-500 mb-3" data-aos="fade-up" data-aos-delay="100">Radius Basic</h2>
        <p class="text-4xl font-bold text-blue-900 mb-2" data-aos="fade-up" data-aos-delay="200">Rp150.000</p>
        <p class="text-blue-500 mb-4" data-aos="fade-up" data-aos-delay="300">per bulan</p>
        <ul class="mb-6 space-y-3">
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="400"><i class="fas fa-check text-green-500 mr-2"></i> Unlimited NAS</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="500"><i class="fas fa-check text-green-500 mr-2"></i> 300 Users PPPoE</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="600"><i class="fas fa-check text-green-500 mr-2"></i> 20.000 Users Hotspot</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="700"><i class="fas fa-check text-green-500 mr-2"></i> 500 Hotspot Sesi Aktif</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="800"><i class="fas fa-check text-green-500 mr-2"></i> Free VPN</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="900"><i class="fas fa-check text-green-500 mr-2"></i> Free Setup</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="1000"><i class="fas fa-check text-green-500 mr-2"></i> Free WhatsApp Notifikasi</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="1100"><i class="fas fa-check text-green-500 mr-2"></i> No Additional Fee</li>
        </ul>
        <a href="http://my.idneobilling.com/auth/register" class="bg-orange-500 text-white border border-orange-500 rounded-full px-6 py-3 hover:bg-orange-600 transition duration-300">
          Order Now
        </a>
      </div>

      <!-- Radius Premium -->
      <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-6 transform transition-transform hover:scale-105 duration-300">
        <h2 class="text-2xl font-semibold text-orange-500 mb-3" data-aos="fade-up" data-aos-delay="100">Radius Premium</h2>
        <p class="text-4xl font-bold text-blue-900 mb-2" data-aos="fade-up" data-aos-delay="200">Rp250.000</p>
        <p class="text-blue-500 mb-4" data-aos="fade-up" data-aos-delay="300">per bulan</p>
        <ul class="mb-6 space-y-3">
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="400"><i class="fas fa-check text-green-500 mr-2"></i> Unlimited NAS</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="500"><i class="fas fa-check text-green-500 mr-2"></i> 600 Users PPPoE</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="600"><i class="fas fa-check text-green-500 mr-2"></i> 35.000 Users Hotspot</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="700"><i class="fas fa-check text-green-500 mr-2"></i> 1.000 Hotspot Sesi Aktif</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="800"><i class="fas fa-check text-green-500 mr-2"></i> Free VPN</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="900"><i class="fas fa-check text-green-500 mr-2"></i> Free Setup</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="1000"><i class="fas fa-check text-green-500 mr-2"></i> Free WhatsApp Notifikasi</li>
          <li class="flex items-center text-gray-700" data-aos="fade-up" data-aos-delay="1100"><i class="fas fa-check text-green-500 mr-2"></i> No Additional Fee</li>
        </ul>
        <a href="http://my.idneobilling.com/auth/register" class="bg-orange-500 text-white border border-orange-500 rounded-full px-6 py-3 hover:bg-orange-600 transition duration-300">
          Order Now
        </a>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: Radius Server Mandiri -->
<section class="bg-gray-100 py-16">
  <div class="max-w-6xl mx-auto px-4">
    <div class="bg-white rounded-lg shadow-lg p-10">
      <div class="text-center mb-8">
        <h1 class="text-2xl font-semibold text-orange-500 mb-3" data-aos="fade-up">Radius Server Mandiri</h1>
        <p class="text-4xl font-bold text-blue-900 mb-2" data-aos="fade-up" data-aos-delay="100">
          Rp<span class="text-blue-900 mb-4">250.000</span> /bulan
        </p>
        <a href="#" class="text-blue-900 underline" data-aos="fade-up" data-aos-delay="200">Syarat & Ketentuan berlaku</a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-center">
        <div>
          <ul class="space-y-4 text-left">
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="300">
              <span class="text-blue-600 text-xl mr-2">+</span>
              <span>Pelanggan harus menyiapkan PC/mini PC/Raspberry atau lainnya untuk dijadikan server</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="400">
              <span class="text-blue-600 text-xl mr-2">+</span>
              <span>Instalasi dilakukan oleh tim teknisi kami</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="500">
              <span class="text-blue-600 text-xl mr-2">+</span>
              <span>Sebelum instalasi, semua pembayaran harus sudah selesai</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="600">
              <span class="text-blue-600 text-xl mr-2">+</span>
              <span>Data server termasuk user dan password hanya kami yang pegang</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="700">
              <span class="text-blue-600 text-xl mr-2">+</span>
              <span>Jika sistem terjadi error kami bertanggung jawab untuk memperbaiki</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="800">
              <span class="text-blue-600 text-xl mr-2">+</span>
              <span>Kerjasama berkelanjutan, selama tiap bulan melakukan perpanjangan lisensi</span>
            </li>
          </ul>
        </div>

        <div>
          <ul class="space-y-4 text-left">
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="300">
              <i class="fas fa-check text-orange-400 text-xl mr-2"></i>
              <span>Unlimited NAS</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="400">
              <i class="fas fa-check text-orange-400 text-xl mr-2"></i>
              <span>Unlimited Users PPPoE</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="500">
              <i class="fas fa-check text-orange-400 text-xl mr-2"></i>
              <span>Unlimited Users Hotspot</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="600">
              <i class="fas fa-check text-orange-400 text-xl mr-2"></i>
              <span>Free VPN</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="700">
              <i class="fas fa-check text-orange-400 text-xl mr-2"></i>
              <span>Setup Fee Rp 500.000</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="800">
              <i class="fas fa-check text-orange-400 text-xl mr-2"></i>
              <span>Free WhatsApp Notifikasi</span>
            </li>
            <li class="flex items-start" data-aos="fade-up" data-aos-delay="900">
              <i class="fas fa-check text-orange-400 text-xl mr-2"></i>
              <span>No Additional Fee</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="text-center mt-8">
        <button class="bg-orange-500 text-white border border-orange-500 rounded-full px-6 py-3 hover:bg-orange-600 transition duration-300" data-aos="fade-up" data-aos-delay="100">Contact Us</button>
      </div> 
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section id="faq" class="bg-gradient-to-r from-pink-200 via-orange-200 to-pink-200 py-16 scroll-mt-16">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <!-- FAQ Content -->
    <div class="text-center mb-12">
      <h1 class="text-3xl font-extrabold text-blue-900 mb-4" data-aos="fade-up">FREQUENTLY ASKED QUESTIONS</h1>
      <p class="text-lg lg:text-xl text-gray-700 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        Anda bingung? Coba cari solusinya di sini. Silakan hubungi kami melalui kontak di bawah ini jika masih ada yang perlu ditanyakan.
      </p>
    </div>

    <!-- FAQ Items -->
    <div class="space-y-8">
      <!-- FAQ Item 1 -->
      <div class="faq-item bg-white p-6 rounded-lg shadow-md transition-transform duration-300 cursor-pointer hover:shadow-lg hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200" onclick="toggleFAQ(this)">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-4">
            <span class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center">
              <i class="fas fa-question-circle"></i>
            </span>
            <p class="text-gray-700 font-semibold text-lg hover:text-blue-900">Apakah mendapatkan support teknis?</p>
          </div>
          <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300" id="icon-1"></i>
        </div>
        <p class="faq-content text-gray-800 mt-4 leading-relaxed hidden">
          Ya, selama berlangganan Anda akan mendapatkan full support dari tim teknis kami terkait layanan.
        </p>
      </div>

      <!-- FAQ Item 2 -->
      <div class="faq-item bg-white p-6 rounded-lg shadow-md transition-transform duration-300 cursor-pointer hover:shadow-lg hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300" onclick="toggleFAQ(this)">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-4">
            <span class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center">
              <i class="fas fa-question-circle"></i>
            </span>
            <p class="text-gray-700 font-semibold text-lg hover:text-blue-900">Untuk terhubung ke Radius server apa butuh VPN?</p>
          </div>
          <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300" id="icon-2"></i>
        </div>
        <p class="faq-content text-gray-800 mt-4 leading-relaxed hidden">
          Ya, untuk berkomunikasi antara NAS dengan Radius Server harus melalui VPN. Kami sudah menyiapkan VPN gratis selama berlangganan, dengan jaringan yang sudah peering dengan ISP besar di Indonesia. Tapi jika Anda memiliki IP public, Anda tidak butuh VPN. Hubungi tim teknis kami untuk bantu setup.
        </p>
      </div>

      <!-- FAQ Item 3 -->
      <div class="faq-item bg-white p-6 rounded-lg shadow-md transition-transform duration-300 cursor-pointer hover:shadow-lg hover:-translate-y-1" data-aos="fade-up" data-aos-delay="400" onclick="toggleFAQ(this)">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-4">
            <span class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center">
              <i class="fas fa-question-circle"></i>
            </span>
            <p class="text-gray-700 font-semibold text-lg hover:text-blue-900">Saya punya cabang 4, apa bisa dihubungkan semua?</p>
          </div>
          <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300" id="icon-3"></i>
        </div>
        <p class="faq-content text-gray-800 mt-4 leading-relaxed hidden">
          Ya, layanan kami memberikan Unlimited NAS. Semua cabang dapat dihubungkan ke Radius Server tanpa biaya tambahan.
        </p>
      </div>

      <!-- FAQ Item 4 -->
      <div class="faq-item bg-white p-6 rounded-lg shadow-md transition-transform duration-300 cursor-pointer hover:shadow-lg hover:-translate-y-1" data-aos="fade-up" data-aos-delay="500" onclick="toggleFAQ(this)">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-4">
            <span class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center">
              <i class="fas fa-question-circle"></i>
            </span>
            <p class="text-gray-700 font-semibold text-lg hover:text-blue-900">Saya ingin mengirim notifikasi via WhatsApp, apa saya harus langganan WhatsApp dari pihak lain?</p>
          </div>
          <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300" id="icon-4"></i>
        </div>
        <p class="faq-content text-gray-800 mt-4 leading-relaxed hidden">
          Tidak, kami sudah menyiapkan server WhatsApp sendiri. Anda bisa menggunakan nomor sendiri atau nomor kami. Anda dapat mengaturnya nanti pada halaman Account Area.
        </p>
      </div>

      <!-- FAQ Item 5 -->
      <div class="faq-item bg-white p-6 rounded-lg shadow-md transition-transform duration-300 cursor-pointer hover:shadow-lg hover:-translate-y-1" data-aos="fade-up" data-aos-delay="600" onclick="toggleFAQ(this)">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-4">
            <span class="text-blue-900 font-extrabold text-lg rounded-full w-10 h-10 flex items-center justify-center">
              <i class="fas fa-question-circle"></i>
            </span>
            <p class="text-gray-700 font-semibold text-lg hover:text-blue-900">Apakah bisa custom template voucher hotspot?</p>
          </div>
          <i class="fas fa-chevron-down text-blue-900 text-lg transition-transform duration-300" id="icon-5"></i>
        </div>
        <p class="faq-content text-gray-800 mt-4 leading-relaxed hidden">
          Ya, kami menyediakan template untuk voucher hotspot. Anda bisa menambahkan atau mengedit sesuai keinginan.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="bg-gray-100 py-10 scroll-mt-16">
  <div class="max-w-8xl mx-auto px-16"> <!-- Increased max width -->
    <!-- Section Title -->
    <div class="text-center mb-12" data-aos="fade-up">
      <h1 class="text-4xl font-extrabold text-blue-900 mb-4">Contact Us</h1>
      <p class="text-lg lg:text-xl text-gray-700 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        Jangan ragu untuk menghubungi kami terkait layanan atau informasi tambahan. Kami menjaga kerahasiaan data pribadi Anda.
      </p>
    </div>

    <!-- Contact Information -->
    <div class="lg:mx-auto flex justify-center items-center">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-8 text-left w-full mx-auto">
        <!-- Address Info -->
        <div class="flex items-start space-x-5 py-2.5 mb-4 justify-start lg:justify-center lg:ml-8" data-aos="fade-up" data-aos-delay="300">
          <div class="flex-shrink-0">
            <i class="fas fa-map-marker-alt text-orange-500 text-3xl"></i>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-1">Alamat</h2>
            <p class="text-gray-600 leading-relaxed text-sm">
              PT. Digital Informatika,<br>
              Kel. Dukuh Jeruk,<br>
              Karangampel, Indramayu, Indonesia
            </p>
          </div>
        </div>

        <!-- Email Info -->
        <div class="flex items-start space-x-5 py-2.5 mb-4 justify-start lg:justify-center" data-aos="fade-up" data-aos-delay="300">
          <div class="flex-shrink-0">
            <i class="fas fa-envelope text-orange-500 text-3xl"></i>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-1">Email</h2>
            <p class="text-gray-600 text-sm">admin@radboox.com</p>
          </div>
        </div>

        <!-- Operating Hours Info -->
        <div class="flex items-start space-x-5 py-2.5 mb-4 justify-start lg:justify-center" data-aos="fade-up" data-aos-delay="300">
          <div class="flex-shrink-0">
            <i class="fas fa-clock text-orange-500 text-3xl"></i>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-1">Jam Operasional</h2>
            <p class="text-gray-600 leading-relaxed text-sm">
              Senin - Sabtu: 08:00 - 22:00 WIB<br>
              Minggu: 08:00 - 16:00 WIB
            </p>
          </div>
        </div>

        <!-- WhatsApp Info -->
        <div class="flex items-start space-x-5 py-2.5 mb-4 justify-start lg:justify-center" data-aos="fade-up" data-aos-delay="500">
          <div class="flex-shrink-0">
            <i class="fas fa-phone text-orange-500 text-3xl"></i>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-1">WhatsApp</h2>
            <p class="text-gray-600 text-sm">+62 821-2657-7254</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-orange-400 text-white p-6 text-center">
  <p class="text-sm lg:text-base">Copyright © 2024 RadbooX - All rights reserved.</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>  
  // Inisialisasi AOS
   AOS.init({
      duration: 1000, // Duration of animations in milliseconds
      easing: 'ease-in-out', // Easing function
    });

// Menangani menu hamburger
const menuButton = document.getElementById('menu-button');
        const menu = document.getElementById('menu');
        const closeButton = document.getElementById('close-button');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        closeButton.addEventListener('click', () => {
            menu.classList.add('hidden');
        });

// Mengubah latar belakang navbar saat di-scroll
window.addEventListener('scroll', function() {
  const navbar = document.getElementById('navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('shadow-md');
  } else {
    navbar.classList.remove('shadow-md');
  }
});


// Tambahkan efek scroll halus untuk semua tautan dengan kelas 'nav-link'
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah perilaku tautan default
    const targetID = this.getAttribute('href').slice(1); // Dapatkan ID target, hilangkan #
    const targetElement = document.getElementById(targetID); // Temukan elemen target

    // Periksa apakah elemen target ada
    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop - 70, // Gulir ke offset elemen - 70px (tinggi navbar)
        behavior: 'smooth' // Aktifkan scroll halus
      });
    }
  });
});

// Menangani toggle konten FAQ
function toggleFAQ(item) {
    // Get the content and icon elements
    const content = item.querySelector('.faq-content');
    const icon = item.querySelector('.fas.fa-chevron-down');
    
    // Hide all other FAQ content
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(otherItem => {
      if (otherItem !== item) {
        otherItem.querySelector('.faq-content').classList.add('hidden');
        otherItem.querySelector('.fas.fa-chevron-down').classList.remove('rotate-180');
      }
    });

    // Toggle display of the clicked item's content
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
  }

  // Add event listener for all FAQ items
  document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', function() {
      toggleFAQ(this);
    });
  });

  function toggleFeature(item) {
    const description = item.querySelector('.feature-description');
    const icon = item.querySelector('.fas.fa-chevron-down');

    // Close all other feature descriptions
    const featureItems = document.querySelectorAll('.feature-item');
    featureItems.forEach(otherItem => {
        if (otherItem !== item) {
            otherItem.querySelector('.feature-description').classList.add('hidden');
            otherItem.querySelector('.fas.fa-chevron-down').classList.remove('rotate-180');
        }
    });

    // Toggle clicked item's description
    description.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}

// Add event listener for all feature items
document.querySelectorAll('.feature-item').forEach(item => {
    item.addEventListener('click', function() {
        toggleFeature(this);
    });
});
</script>
</body>
</html>
