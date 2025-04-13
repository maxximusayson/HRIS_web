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
        <img src="<?= base_url('/images/home/h5.jpg') ?>" alt="HRIS Feature 1" class="w-full h-full object-cover">
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




<section class="relative bg-[#CAF0F8] py-20 font-[Poppins] flex flex-col items-center justify-center overflow-hidden">

  <!-- Grid Lines -->
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

  <!-- Main Content -->
  <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12 py-12 flex flex-col md:flex-row items-center gap-12">

<!-- Video -->
<div class="w-full md:w-3/4 lg:w-2/3 xl:w-1/2">
  <iframe src="https://www.youtube.com/embed/K4TOrB7at0Y?si=yx4sHB4MSF_SaW52" 
          frameborder="0" 
          allowfullscreen 
          class="rounded-lg shadow-lg w-full h-96"></iframe> <!-- Fixed height -->
</div>



    <!-- Text Content -->
    <div class="w-full md:w-1/2 text-center md:text-left">
    <h2 class="text-3xl md:text-4xl font-extrabold text-[#0E1D51] mb-6 leading-tight">
  Simple, Accurate, and<br>
  Stress-Free People<br>
  Management with Sprout
</h2>


      <p class="text-gray-700 mb-8 text-base md:text-lg">
        Stay compliant and thrive with Sprout’s HR and Payroll solution. Get top-rated solutions and the expert support you need for managing your teams effectively in the Philippines.
      </p>

      <a href="#" class="inline-block bg-[#2563EB] text-white font-medium px-6 py-3 rounded-full shadow-md hover:bg-[#2563EB] transition-all">
        BOOK A MEETING
      </a>
    </div>

  </div>
</section>



<section class="relative bg-[#CAF0F8] py-20 font-[Poppins] flex flex-col items-center justify-center overflow-hidden">

  <!-- Grid Lines -->
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

  <h2 class="text-4xl md:text-5xl font-bold text-center mb-8" style="color: #0E1D51;">
  Benefits of Using the HRIS Portal
</h2>


  <!-- Flex container for content and image -->
  <div class="flex flex-col md:flex-row w-full max-w-7xl space-y-6 md:space-y-0 items-center justify-between">
  <div class="space-y-6 w-full md:w-1/2">
  <!-- Benefit 1 -->
  <div class="border-b border-gray-200 relative">
    <button class="w-full text-left p-5 bg-[#2563EB] text-white rounded-lg shadow-lg focus:outline-none hover:bg-[#0E1D51] focus:ring-2 focus:ring-blue-500 flex justify-between items-center transition-all" onclick="toggleDropdown(1)">
      <span class="font-semibold text-lg">Improved Efficiency</span>
      <svg class="w-6 h-6 transform transition-transform duration-300" id="arrow-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </button>
    <div id="content-1" class="hidden absolute top-full left-0 w-full px-5 py-3 bg-white text-gray-700 text-sm rounded-lg shadow-md mt-2 z-50">
      <p>Streamline HR processes, automate tasks, and reduce manual work, making operations faster and more efficient.</p>
    </div>
  </div>

  <!-- Benefit 2 -->
  <div class="border-b border-gray-200 relative">
    <button class="w-full text-left p-5 bg-[#2563EB] text-white rounded-lg shadow-lg focus:outline-none hover:bg-[#0E1D51] focus:ring-2 focus:ring-blue-500 flex justify-between items-center transition-all" onclick="toggleDropdown(2)">
      <span class="font-semibold text-lg">Data Security</span>
      <svg class="w-6 h-6 transform transition-transform duration-300" id="arrow-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </button>
    <div id="content-2" class="hidden absolute top-full left-0 w-full px-5 py-3 bg-white text-gray-700 text-sm rounded-lg shadow-md mt-2 z-50">
      <p>Keep employee data secure with encryption, controlled access, and regular audits to ensure privacy and compliance.</p>
    </div>
  </div>

  <!-- Benefit 3 -->
  <div class="border-b border-gray-200 relative">
    <button class="w-full text-left p-5 bg-[#2563EB] text-white rounded-lg shadow-lg focus:outline-none hover:bg-[#0E1D51] focus:ring-2 focus:ring-blue-500 flex justify-between items-center transition-all" onclick="toggleDropdown(3)">
      <span class="font-semibold text-lg">Real-Time Reporting</span>
      <svg class="w-6 h-6 transform transition-transform duration-300" id="arrow-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </button>
    <div id="content-3" class="hidden absolute top-full left-0 w-full px-5 py-3 bg-white text-gray-700 text-sm rounded-lg shadow-md mt-2 z-50">
      <p>Access up-to-date reports at any time, allowing better decision-making and timely interventions when needed.</p>
    </div>
  </div>

  <!-- Benefit 4 -->
  <div class="border-b border-gray-200 relative">
    <button class="w-full text-left p-5 bg-[#2563EB] text-white rounded-lg shadow-lg focus:outline-none hover:bg-[#0E1D51] focus:ring-2 focus:ring-blue-500 flex justify-between items-center transition-all" onclick="toggleDropdown(4)">
      <span class="font-semibold text-lg">Employee Self-Service</span>
      <svg class="w-6 h-6 transform transition-transform duration-300" id="arrow-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </button>
    <div id="content-4" class="hidden absolute top-full left-0 w-full px-5 py-3 bg-white text-gray-700 text-sm rounded-lg shadow-md mt-2 z-50">
      <p>Allow employees to update their personal information, access pay slips, and submit requests without HR intervention.</p>
    </div>
  </div>
</div>

    <!-- Right side (Large Image) -->
    <div class="w-full md:w-1/2 z-20 md:ml-6">
      <img src="/images/home/h1.jpg" alt="HRIS Portal" class="w-full h-auto rounded-lg shadow-lg">
    </div>
  </div>

</section>

<script>
  function toggleDropdown(index) {
    const content = document.getElementById('content-' + index);
    const arrow = document.getElementById('arrow-' + index);
    const isHidden = content.classList.contains('hidden');
    
    // Toggle visibility of content
    content.classList.toggle('hidden', !isHidden);

    // Rotate arrow
    arrow.style.transform = isHidden ? 'rotate(180deg)' : 'rotate(0deg)';
  }
</script>


</body>
</html>
