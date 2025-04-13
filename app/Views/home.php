<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRIS | Home</title>

    <!-- Your styles and scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <?= view('layout/header') ?>

    <section class="relative bg-gradient-to-t from-[#CAF0F8] to-white py-40 md:py-48 font-[Poppins] overflow-hidden -mt-24">
 
  <!-- Background Lines (behind content) -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <!-- Vertical lines -->
    <div class="absolute left-1/4 top-0 h-full w-[2px] bg-white/50"></div>
    <div class="absolute left-1/2 top-0 h-full w-[2px] bg-white/50"></div>
    <div class="absolute right-1/4 top-0 h-full w-[2px] bg-white/50"></div>
    <!-- Horizontal lines -->
    <div class="absolute top-1/4 left-0 w-full h-[2px] bg-white/50"></div>
    <div class="absolute top-1/2 left-0 w-full h-[2px] bg-white/50"></div>
    <div class="absolute bottom-1/4 left-0 w-full h-[2px] bg-white/50"></div>
  </div>

  <!-- Content (in front) -->
  <div class="max-w-7xl mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center gap-24 relative z-10">
    
    <!-- Image -->
    <div class="w-full md:w-1/2">
      <img src="<?= base_url('/images/hero-woman.png') ?>" alt="HR Technology" class="rounded-[40px] w-full object-cover shadow-2xl">
    </div>

    <!-- Text Content -->
    <div class="w-full md:w-1/2 text-center md:text-left">
      <h1 class="text-5xl md:text-7xl font-extrabold text-[#0E1D51] leading-tight mb-8">
        Putting People First<br>
        with Smart HR<br>
        Technology
      </h1>
      <p class="text-gray-700 mb-10 text-lg md:text-2xl leading-relaxed max-w-xl mx-auto md:mx-0">
        Empower your business with intuitive, people-centric HR tools built for today’s workplace. Streamline processes and elevate your team’s potential.
      </p>
      <div class="flex justify-center md:justify-start space-x-4">
        <a href="#" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full text-lg hover:bg-blue-700 transition-all duration-300 shadow-lg z-20 relative">
          Get Started
        </a>
        <a href="#" class="inline-block border border-blue-600 text-blue-700 px-8 py-3 rounded-full text-lg hover:bg-blue-100 transition-all duration-300 z-20 relative">
          How it Works
        </a>
      </div>
    </div>

  </div>
</section>

<!-- Second Section with Modern Fixed Captions -->
<section class="relative bg-[#CAF0F8] py-20 font-[Poppins] flex flex-col items-center justify-center overflow-hidden">

  <!-- Background Lines -->
  <div class="absolute inset-0 pointer-events-none z-0">
    <div class="absolute left-1/4 top-0 h-full w-[2px] bg-white/50"></div>
    <div class="absolute left-1/2 top-0 h-full w-[2px] bg-white/50"></div>
    <div class="absolute right-1/4 top-0 h-full w-[2px] bg-white/50"></div>
    <div class="absolute top-1/4 left-0 w-full h-[2px] bg-white/50"></div>
    <div class="absolute top-1/2 left-0 w-full h-[2px] bg-white/50"></div>
    <div class="absolute bottom-1/4 left-0 w-full h-[2px] bg-white/50"></div>
  </div>

  <!-- Section Title -->
  <h2 class="text-4xl md:text-5xl font-bold text-[#0E1D51] mb-12 text-center relative z-10">
    Discover Our Features
  </h2>

  <!-- Image Carousel -->
  <div class="w-full overflow-hidden relative z-10">
    <div class="flex items-center gap-14 px-10 w-max animate-scroll">

      <!-- Image Card with Fixed Caption -->
      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/hero-woman.png') ?>" alt="HRIS Feature 1" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Seamless Employee Experience</p>
        </div>
      </div>

      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/home/h1.jpg') ?>" alt="HRIS Feature 2" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Automate HR Processes</p>
        </div>
      </div>

      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/home/h2.jpg') ?>" alt="HRIS Feature 3" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Empower Your Workforce</p>
        </div>
      </div>

      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/home/h3.jpg') ?>" alt="HRIS Feature 4" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Real-Time Insights</p>
        </div>
      </div>

      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/home/h4.jpg') ?>" alt="HRIS Feature 5" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Simplify HR Management</p>
        </div>
      </div>

      <!-- Duplicate for seamless loop -->
      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/home/h1.jpg') ?>" alt="HRIS Feature 2" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Automate HR Processes</p>
        </div>
      </div>

      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/home/h4.jpg') ?>" alt="HRIS Feature 5" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Simplify HR Management</p>
        </div>
      </div>

      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/home/h3.jpg') ?>" alt="HRIS Feature 4" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Real-Time Insights</p>
        </div>
      </div>

      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/hero-woman.png') ?>" alt="HRIS Feature 1" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Seamless Employee Experience</p>
        </div>
      </div>

      <div class="relative w-[600px] h-[350px] rounded-2xl shadow-xl shrink-0 overflow-hidden">
        <img src="<?= base_url('/images/home/h4.jpg') ?>" alt="HRIS Feature 5" class="w-full h-full object-cover">
        <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-4 text-center">
          <p class="text-white text-2xl md:text-3xl font-semibold tracking-wide">Simplify HR Management</p>
        </div>
      </div>

    </div>
  </div>
</section>


<style>
  @keyframes scroll {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .animate-scroll {
    display: flex;
    animation: scroll 70s linear infinite;
  }
</style>

</body>
</html>
