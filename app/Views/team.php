<!-- Your styles and scripts -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="//unpkg.com/alpinejs" defer></script>

<title>About | Our Team</title>

<?= view('layout/header') ?>
<br><br><br>

<section class="relative font-[Poppins] overflow-hidden bg-gradient-to-b from-white via-[#E0F7FF] to-[#CAF0F8]">

  <!-- Header Image with Overlay Text -->
  <div class="relative w-full h-[300px] md:h-[400px] bg-cover bg-center flex items-center justify-center" style="background-image: url('/images/seamless.png');">
      <div class="bg-black/50 absolute inset-0"></div> <!-- subtle dark overlay for contrast -->
      <h1 class="relative text-white text-4xl md:text-5xl font-bold">Our Team</h1>
  </div>

  <!-- Team Members Grid -->
  <div class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
              <!-- Member 1 -->
              <div class="flex flex-col items-center">
                  <img src="/images/team/p1.png" alt="Team Member" class="w-36 h-36 object-cover rounded-full shadow-xl border-4 border-white">
                  <h3 class="mt-4 text-lg font-semibold text-gray-800">Name</h3>
                  <p class="text-sm text-gray-500">Position</p>
              </div>

              <!-- Member 2 -->
              <div class="flex flex-col items-center">
                  <img src="/images/team/p2.png" alt="Team Member" class="w-36 h-36 object-cover rounded-full shadow-xl border-4 border-white">
                  <h3 class="mt-4 text-lg font-semibold text-gray-800">Name</h3>
                  <p class="text-sm text-gray-500">Position</p>
              </div>

              <!-- Member 3 -->
              <div class="flex flex-col items-center">
                  <img src="/images/team/p1.png" alt="Team Member" class="w-36 h-36 object-cover rounded-full shadow-xl border-4 border-white">
                  <h3 class="mt-4 text-lg font-semibold text-gray-800">Name</h3>
                  <p class="text-sm text-gray-500">Position</p>
              </div>

              <!-- Member 4 -->
              <div class="flex flex-col items-center">
                  <img src="/images/team/p4.png" alt="Team Member" class="w-36 h-36 object-cover rounded-full shadow-xl border-4 border-white">
                  <h3 class="mt-4 text-lg font-semibold text-gray-800">Name</h3>
                  <p class="text-sm text-gray-500">Position</p>
              </div>

              <!-- Member 5 -->
              <div class="flex flex-col items-center">
                  <img src="/images/team/p5.png" alt="Team Member" class="w-36 h-36 object-cover rounded-full shadow-xl border-4 border-white">
                  <h3 class="mt-4 text-lg font-semibold text-gray-800">Name</h3>
                  <p class="text-sm text-gray-500">Position</p>
              </div>

              <!-- Member 6 -->
              <div class="flex flex-col items-center">
                  <img src="/images/team/p1.png" alt="Team Member" class="w-36 h-36 object-cover rounded-full shadow-xl border-4 border-white">
                  <h3 class="mt-4 text-lg font-semibold text-gray-800">Name</h3>
                  <p class="text-sm text-gray-500">Position</p>
              </div>
          </div>
      </div>
  </div>
</section>


<?= view('layout/footer'); ?>