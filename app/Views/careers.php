<!-- Your styles and scripts -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="//unpkg.com/alpinejs" defer></script>

<title>About | Careers</title>

<?= view('layout/header') ?>
<br><br><br>

<section class="relative font-[Poppins] overflow-hidden bg-gradient-to-b from-white via-[#E0F7FF] to-[#CAF0F8]">

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

  <!-- Hero Header -->
  <div class="relative w-full h-[300px] md:h-[400px] bg-cover bg-center flex items-center justify-center z-10" style="background-image: url('/images/seamless.png');">
      <div class="bg-black/50 absolute inset-0"></div>
      <h1 class="relative text-white text-4xl md:text-5xl font-bold">Careers</h1>
  </div>

  <!-- Introduction -->
  <div class="max-w-3xl mx-auto text-center py-16 px-6 md:py-20 relative z-10">
    <h2 class="text-3xl md:text-4xl font-bold text-[#001F54] mb-6">Join Our Growing Team</h2>
    <p class="text-gray-800 text-lg leading-relaxed mb-4">
      We're always looking for passionate, creative, and dedicated individuals to help shape the future of our company.
    </p>
    <p class="text-gray-800 text-lg leading-relaxed">
      Explore our open roles and find where you fit in. Your journey with us starts here.
    </p>
  </div>

 <!-- Job Listings -->
<div class="max-w-6xl mx-auto px-6 pb-20 relative z-10">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Job Card 1: HRIS Developer -->
    <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
      <h3 class="text-2xl font-bold text-[#001F54] mb-2">HRIS Developer</h3>
      <p class="text-gray-700 mb-4">Develop and maintain custom HRIS solutions, integrating with other systems and optimizing workflows for HR departments.</p>
      <a href="#" class="text-blue-600 font-semibold hover:underline">Apply Now →</a>
    </div>

    <!-- Job Card 2: HR Data Analyst -->
    <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
      <h3 class="text-2xl font-bold text-[#001F54] mb-2">HR Data Analyst</h3>
      <p class="text-gray-700 mb-4">Analyze and interpret HR data to drive decisions related to workforce management, recruitment, and retention strategies.</p>
      <a href="#" class="text-blue-600 font-semibold hover:underline">Apply Now →</a>
    </div>

    <!-- Job Card 3: HRIS Administrator -->
    <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
      <h3 class="text-2xl font-bold text-[#001F54] mb-2">HRIS Administrator</h3>
      <p class="text-gray-700 mb-4">Manage and administer HRIS platforms, ensuring data integrity, security, and user support for HR teams across the organization.</p>
      <a href="#" class="text-blue-600 font-semibold hover:underline">Apply Now →</a>
    </div>

    <!-- Job Card 4: HR Systems Integrator -->
    <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
      <h3 class="text-2xl font-bold text-[#001F54] mb-2">HR Systems Integrator</h3>
      <p class="text-gray-700 mb-4">Integrate third-party HR tools and services into existing HRIS infrastructure, ensuring seamless data flow across platforms.</p>
      <a href="#" class="text-blue-600 font-semibold hover:underline">Apply Now →</a>
    </div>
  </div>
</div>

</section>

<?= view('layout/footer'); ?>
