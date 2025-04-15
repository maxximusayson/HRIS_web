 <!-- Your styles and scripts -->
 <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>

    <title>About | Company</title>

<?= view('layout/header') ?>

<section class="relative font-[Poppins] overflow-hidden bg-gradient-to-b from-white via-[#E0F7FF] to-[#CAF0F8]">
  <!-- Top Skyline Image Background -->
  <div class="w-full h-[300px] md:h-[400px] bg-cover bg-center" style="background-image: url('/images/seamless.png');"></div>

  <!-- About Section -->
  <div class="max-w-4xl mx-auto text-center py-16 px-6 md:py-20">
    <h2 class="text-3xl md:text-4xl font-bold text-[#001F54] mb-6">About Our Company</h2>
    <p class="text-gray-800 text-lg leading-relaxed mb-4">
      Our company has been a trusted provider in the industry, delivering top-quality services and products tailored to meet the unique needs of our clients. With a passionate team and a commitment to excellence, we aim to exceed expectations every step of the way.
    </p>
    <p class="text-gray-800 text-lg leading-relaxed">
      We believe in innovation, integrity, and building strong relationships with our customers. Our vision is to empower businesses and individuals through cutting-edge solutions and unwavering support.
    </p>
  </div>

  <!-- Mission and Vision Section -->
  <div class="max-w-6xl mx-auto px-6 pb-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start text-center md:text-left">
      <!-- Mission -->
      <div class="md:col-span-1">
        <h3 class="text-2xl font-bold text-[#001F54] mb-4 text-center md:text-left">Mission</h3>
        <p class="text-gray-800 text-lg leading-relaxed">
          To deliver innovative and high-quality solutions that drive success for our clients. We strive to exceed expectations through dedication, teamwork, and continuous improvement.
        </p>
      </div>

      <!-- Vertical Divider -->
      <div class="hidden md:flex justify-center items-center">
        <div class="min-h-[230px] w-[3px] bg-[#001F54]"></div>
      </div>

      <!-- Vision -->
      <div class="md:col-span-1">
        <h3 class="text-2xl font-bold text-[#001F54] mb-4 text-center md:text-left">Vision</h3>
        <p class="text-gray-800 text-lg leading-relaxed">
          To deliver innovative and high-quality solutions that drive success for our clients. We strive to exceed expectations through dedication, teamwork, and continuous improvement.
        </p>
      </div>
    </div>
  </div>
</section>


<?= view('layout/footer'); ?>

