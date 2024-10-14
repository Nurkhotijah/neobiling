<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neobiling</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <style>
        body {
          font-family: 'Poppins', sans-serif;
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
      <img src="{{ asset('assets/img/logo.png') }}" alt="Logo RadbooX" width="50" height="50"
          class="mr-3 rounded-full border-4 border-white p-1 bg-white shadow-md" />
      <h1 class="text-2xl font-bold text-white tracking-wide font-serif">Neobiling</h1> <!-- Changed text-4xl to text-2xl -->
  </div>

  <nav class="hidden md:flex space-x-8 text-base"> <!-- Changed text-lg to text-base -->
      <a href="#home" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">Beranda</a>
      <a href="#about" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">Tentang</a>
      <a href="#service" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">Layanan</a>
      <a href="#pricing" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">Harga</a>
      <!-- <a href="#faq" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">FAQ</a> -->
      <a href="#contact" class="nav-link text-white transition duration-300 hover:text-orange-300 hover:underline">Kontak</a>
  </nav>

  <div class="hidden md:flex space-x-4">
      <a href="http://my.idneobilling.com/auth/register" class="bg-orange-400 text-white py-2 px-4 rounded-full shadow-lg transition-transform duration-300 hover:bg-orange-300 hover:text-white">
          Akun Saya
      </a>
       <a href="https://wa.me/6281384329600" class="bg-green-500 text-white py-2 px-4 rounded-full shadow-lg flex items-center transition-transform duration-300 hover:bg-green-400">
        <i class="fab fa-whatsapp mr-2"></i> Chat di WhatsApp
    </a>
  </div>
  
  <div class="md:hidden">
      <button id="menu-button" class="text-white focus:outline-none">
          <i class="fas fa-bars text-2xl"></i>
      </button>
  </div>
</header>

<!-- Mobile Menu -->
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
            Akun Saya
          </a>
         <a href="https://wa.me/6281384329600" class="bg-green-500 text-white py-2 px-5 w-full text-center rounded-full shadow-lg flex items-center justify-center transition-transform duration-300 hover:bg-green-400 transform hover:scale-105">
        <i class="fab fa-whatsapp mr-2"></i> Chat di WhatsApp
    </a>
      </div>
  </nav>
</div>

<!-- KONTEN UTAMA -->
<main id="home" class="flex flex-col md:flex-row justify-between items-center p-16 bg-orange-500 text-white">
  <!-- KONTEN TEKS DI SEBELAH KIRI -->
  <div class="max-w-lg space-y-6" data-aos="fade-up">
      <h2 class="text-5xl font-bold leading-tight mb-4 tracking-wider">
          ID Neobilling
      </h2>
      <p class="text-white text-lg tracking-wide">
          ID Neobilling adalah aplikasi manajemen untuk pengusaha ISP/mini ISP dalam mengatur manajemen pelanggan.
      </p>
      <div class="flex space-x-4 mt-6">
          <a href="#about" class="bg-orange-400 text-white hover:bg-orange-400 hover:text-white py-3 px-6 rounded-full text-lg font-semibold shadow-md transition duration-300 transform hover:scale-110">
              Mulai Sekarang
          </a>
          <a href="#" class="flex items-center bg-orange-400 text-white hover:bg-orange-400 hover:text-white py-3 px-6 rounded-full text-lg font-semibold shadow-md transition duration-300 transform hover:scale-110" onclick="toggleModal(true)">
              <i class="fas fa-play-circle text-1xl mr-2"></i> Tonton Video
          </a>
      </div>
  </div>

  <!-- GAMBAR DI SEBELAH KANAN -->
  <div class="flex-shrink-0 mt-10 md:mt-20" data-aos="fade-left">
      <div class="relative rounded-xl overflow-hidden transition-transform duration-300 transform hover:scale-105">
          <img src="{{ asset('assets/img/hero-img.png') }}" alt="Ilustrasi orang berinteraksi dengan teknologi" width="580" height="400" class="object-cover"/>
      </div>
  </div>
</main>

<!-- Modal Web -->
<div id="webModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-100">
  <!-- Close Button Positioned on the Overlay -->
  <button class="absolute top-10 right-10 text-white hover:text-gray-300 z-50" onclick="toggleModal(false)">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
  </button>

  <!-- Modal Content -->
  <div class="relative bg-white rounded-sm shadow-lg max-w-4xl w-full h-4/5">
      <div class="w-full h-full">
          <iframe id="webIframe" class="w-full h-full" src="" frameborder="0"></iframe>
      </div>
  </div>
</div>

<!-- ABOUT US -->
<section id="about" class="py-16 bg-gradient-to-r from-blue-50 to-teal-50 scroll-mt-16">
  <div class="container mx-auto px-6" data-aos="fade-right">
    <!-- About Us dan Visi dan Misi Kami -->
    <div class="text-center mb-16">
      <!-- About Us Heading -->
      <h2 class="text-4xl font-bold text-blue-900 mb-6 font-serif">Tentang Kami</h2> <!-- Added font-serif -->
      <div class="w-24 h-1 bg-gradient-to-r from-orange-400 to-blue-600 mx-auto mb-10"></div>
    </div>
    
    <div class="flex flex-col md:flex-row justify-center space-y-8 md:space-y-0 md:space-x-8">
      <div class="w-full md:w-1/2">
        <p class="mb-6 leading-relaxed text-gray-900 font-serif" data-aos="fade-up">ID Neobilling adalah Aplikasi Manajemen untuk pengusaha ISP/mini ISP dalam mengatur manajemen pelanggan. Aplikasi ini juga dapat terintegrasi dengan MikroTik seperti PPPoE dan Hotspot sebagai Network Access.</p> <!-- Added font-serif -->
        <ul class="list-none space-y-4 font-serif" data-aos="fade-up"> <!-- Added font-serif -->
          <li class="flex items-start">
            <i class="fas fa-check text-orange-400 mr-3 mt-1"></i>
            <span><strong>Manajemen Pelanggan</strong> yang mudah dan efisien.</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-orange-400 mr-3 mt-1"></i>
            <span>Support integrasi MikroTik dengan PPPoE dan Hotspot.</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-orange-400 mr-3 mt-1"></i>
            <span>Kemudahan dalam mengelola data dan keuangan pelanggan.</span>
          </li>
        </ul>
      </div>
      <div class="w-full md:w-1/2" data-aos="fade-up">
        <p class="mb-6 leading-relaxed text-gray-900 font-serif">ID Neobilling selain untuk manajemen pelanggan juga dapat digunakan untuk <strong>Manajemen Keuangan (Billing)</strong>. Dengan fasilitas dan kemudahan layanan yang kami berikan, cukup satu pintu dengan IDNeobilling.</p> <!-- Added font-serif -->
        <a href="http://my.idneobilling.com/auth/register" class="bg-orange-400 text-white rounded-full px-6 py-3 font-bold hover:bg-orange-500 transition duration-300 font-serif">Coba Gratis</a> <!-- Added font-serif -->
      </div>
    </div>
  </div>
</section>

<!-- SERVICES SECTION -->
<section id="service" class="bg-gradient-to-r from-pink-100 via-orange-100 to-pink-100 py-16 scroll-mt-16 font-sans" data-aos="fade-up">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-extrabold text-blue-900 font-serif" data-aos="fade-up">Solusi Aplikasi Manajemen Pelanggan<br>Internet Berbasis SAAS</h2>
      <div class="flex justify-center mt-3">
        <div class="w-32 h-1 bg-gradient-to-r from-orange-400 to-blue-600 mx-auto mb-8 rounded-full"></div>
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/wifi.png') }}" alt="router Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Router</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Tambahkan beberapa router mikrotik dalam 1 sistem tanpa batasan.</p>
      </div>
      <!-- Card 2 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="100" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/monitoring.png') }}" alt="monitoring Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Monitoring</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Monitoring Traffic, Screets Online, Screet Offline.</p>
      </div>
      <!-- Card 3 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="200" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/map.png') }}" alt="map Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">ODP Maps</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Pantau Sisa Port ODP dan Memetakan Lokasinya.</p>
      </div>
      <!-- Card 4 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="300" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/whatsapp.png') }}" alt="WA Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">WhatsApp Notifikasi</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Broadcast tagihan pelanggan, info gangguan, dan lainnya hanya sekali klik.</p>
      </div>
      <!-- Card 5 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="400" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/bill.png') }}" alt="bill Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Biaya & Diskon</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Setting tambahan biaya dan diskon pelanggan.</p>
      </div>
      <!-- Card 6 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="500" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/ticket.png') }}" alt="tiket Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Tiket Support</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Manajemen tiket komplain terstruktur dan lebih rapi.</p>
      </div>
      <!-- Card 7 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="600" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/computer.png') }}" alt="auto Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Auto Isolir</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Otomatis disable atau ganti profile ketika suspend.</p>
      </div>
      <!-- Card 8 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="700" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/bill 2.png') }}" alt="bill Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Tagihan</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Pembayaran tagihan mudah dan otomatis membuka isolir, support print Bluetooth.</p>
      </div>
      <!-- Card 9 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="800" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/payment.png') }}" alt="payment Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Pengeluaran</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Rekap semua pengeluaran untuk manajemen keuangan yang lebih baik.</p>
      </div>
      <!-- Card 10 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="900" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/voucher.png') }}" alt="voucher Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Voucher Hotspot</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Jual voucher hotspot online, user dan password otomatis setelah pembayaran.</p>
      </div>
      <!-- Card 11 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="1000" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/report.png') }}" alt="report Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Laporan</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">Laporan keuangan, penjualan voucher, reward marketing, dan lainnya.</p>
      </div>
      <!-- Card 12 -->
      <div class="p-6 rounded-2xl shadow-lg hover:shadow-2xl focus:shadow-orange-500 transition-shadow duration-300 transform hover:-translate-y-1 cursor-pointer bg-white" data-aos="fade-up" data-aos-delay="1100" tabindex="0">
        <div class="flex items-center justify-center mb-4">
          <img src="{{ asset('assets/img/feature.png') }}" alt="star Icon" class="w-12 h-12 mr-4">
          <h3 class="text-xl font-bold text-blue-900">Fitur Unggulan</h3>
        </div>
        <p class="text-gray-700 text-sm text-center">VPN Client / VPN Remote, Payment Gateway, Halaman Isolir, dan banyak lagi.</p>
      </div>
    </div>
  </div>
</section>

<!-- Trial Free Image -->
<section class="relative bg-orange-400 bg-opacity-70 py-24">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/img/Ecommerce Development .png') }}'); background-attachment: fixed;"></div>
  <div class="absolute inset-0 bg-orange-400 bg-opacity-70"></div>

  <div class="relative container mx-auto px-6 z-10">
    <div class="flex flex-col lg:flex-row items-center justify-between">
      <div class="lg:w-9/12 lg:text-left pl-14 mb-8 lg:mb-0 text-white">
        <h3 class="text-4xl font-bold mb-4 font-serif">Siap Mengalami Transformasi Digital?</h3> <!-- Added font-serif -->
        <p class="text-lg leading-relaxed font-serif">
          Ingin mencoba? Daftar hari ini dan nikmati semua fitur yang telah kami siapkan untuk Anda.
        </p> <!-- Added font-serif -->
      </div>

      <div class="lg:w-3/12 text-center">
        <a href="http://my.idneobilling.com/auth/login" class="bg-transparent border-2 border-white text-white font-semibold py-3 px-6 rounded-xl shadow-md hover:bg-orange-400 hover:text-white transition duration-300 font-serif">Mulai Sekarang</a> <!-- Added font-serif -->
      </div>
    </div>
  </div>
</section>

<!-- PRICING & RADIUS PACKAGES SECTION -->
<section id="pricing" class="bg-gradient-to-r from-blue-50 via-white to-gray-50 text-gray-800 py-20 scroll-mt-16">
  <div class="max-w-4xl mx-auto text-center">
    <h1 class="text-4xl font-extrabold text-blue-900 mb-4" data-aos="fade-down">Harga</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-orange-400 to-blue-600 mx-auto mb-8" data-aos="zoom-in"></div>
    <p class="text-gray-800 font-bold text-xl mb-12" data-aos="fade-up" data-aos-delay="400">
      Pilih paket yang sesuai dengan kebutuhan Anda.
    </p>
  </div>

  <!-- Paket Neobilling -->
  <div class="flex flex-wrap justify-center space-x-4">
    @if (isset($packages) && count($packages) > 0)
      @foreach ($packages as $index => $package)
        <div class="relative bg-white rounded-lg shadow-lg w-80 mb-10 flex flex-col">
          <div class="p-6 bg-orange-100 rounded-t-lg">
            <h2 class="text-xl font-bold text-gray-700">{{ $package['name'] }}</h2>
            <p class="text-4xl font-bold text-gray-800 mt-4">Rp{{ number_format($package['tariff'], 0, ',', '.') }}</p>
            <p class="text-sm text-gray-700">
              @if ($package['is_trial'])
                7 hari
              @else
                per bulan
              @endif
            </p>
          </div>
          <div class="p-6 flex flex-col flex-grow"> <!-- Memastikan flex-grow ada di sini -->
            <ul class="mt-4 space-y-2 text-gray-700">
              @if ($package['description'] && !$package['is_trial']) <!-- Memastikan deskripsi hanya muncul untuk paket berbayar -->
                {!! str_replace('<li>', '<li class="flex items-center text-gray-700"><i class="fas fa-check text-green-500 mr-2"></i>', $package['description']) !!} 
              @endif
            </ul>
          </div>
          <div class="flex justify-center mt-8"> 
            <a href="http://my.idneobilling.com/auth/register" 
               class="flex items-center justify-center ml-4 mb-8 mr-4 bg-{{ $package['is_trial'] ? 'green' : 'red' }}-500 text-white border border-{{ $package['is_trial'] ? 'green' : 'red' }}-500 rounded-full px-6 py-3 hover:bg-{{ $package['is_trial'] ? 'green-600' : 'red-600' }} transition duration-300 w-full">
              Beli Sekarang
            </a>
          </div>
        </div>

        @if ($index === 2) 
          </div>
          <div class="flex flex-wrap justify-center space-x-4">
        @endif
      @endforeach
    @else
      <p class="text-center text-gray-500">Tidak ada paket yang tersedia saat ini.</p>
    @endif
  </div>
</section>


<!-- CONTACT SECTION -->
  <section id="contact" class="bg-gradient-to-r from-pink-100 via-orange-100 to-pink-100 py-8 scroll-mt-16">
    <div class="max-w-4xl mx-auto py-16 px-4">
        <h1 class="text-3xl font-bold text-center text-blue-800 mb-4 font-serif">Kontak Kami</h1> <!-- Change font class -->
        <p class="text-center text-gray-600 mb-12">Jangan ragu untuk menghubungi kami terkait layanan atau informasi tambahan. Kami menjaga kerahasiaan data pribadi Anda.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="flex items-start mb-8">
              <img src="{{ asset('assets/img/location.png') }}" alt="address" class="w-8 h-8 mr-4">
                <div>
                    <h2 class="text-xl font-semibold mb-2">Alamat</h2> <!-- Changed font weight -->
                    <p class="text-gray-700">PT. Qelopak Teknologi Indonesia, Jl. Wangun Jaya Rt.02 RW.07, Desa Ciaruteun Ilir, Kec. Cibungbulang, Kab. Bogor 16630, Pakuan Regency, Jl. Amparan Jati Blok A2 No 11, RT.01/RW.07, Margajaya, Bogor Barat, Kota Bogor.</p>
                </div>
            </div>
            <div class="flex items-start mb-8">
              <img src="{{ asset('assets/img/email.png') }}" alt="Email" class="w-8 h-8 mr-4">
                <div>
                    <h2 class="text-xl font-semibold mb-2">Email</h2>
                    <p class="text-gray-700">hello@qelopak.com</p>
                </div>
            </div>
            <div class="flex items-start mb-8">
              <img src="{{ asset('assets/img/clock.png') }}" alt="time" class="w-8 h-8 mr-4">
                <div>
                    <h2 class="text-xl font-semibold mb-2">Jam Operasional</h2>
                    <p class="text-gray-700">Senin - Jumat: 09:00 - 17:00 WIB</p>
                </div>
            </div>
            <div class="flex items-start mb-8">
              <img src="{{ asset('assets/img/phone-call.png') }}" alt="telephone" class="w-8 h-8 mr-4">
                <div>
                    <h2 class="text-xl font-semibold mb-2">Telepon / WhatsApp</h2>
                    <p class="text-gray-700">(0251) 8474192</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-orange-400 text-white p-6 text-center">
  <p class="text-sm lg:text-base">Copyright © 2024 neo - All rights reserved.</p>
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

function toggleModal(show) {
        const modal = document.getElementById('webModal');
        const iframe = document.getElementById('webIframe');
        if (show) {
            // Ganti dengan URL web yang ingin ditampilkan
            iframe.src = "http://127.0.0.1:8000/";
            modal.classList.remove('hidden');
        } else {
            iframe.src = "";
            modal.classList.add('hidden');
        }
    }

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

</script>
</body>
</html>
