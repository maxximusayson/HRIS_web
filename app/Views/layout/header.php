<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- Hide x-cloak until Alpine loads -->
<style>[x-cloak] { display: none !important; }</style>

<!-- Header -->
<header class="fixed top-0 left-0 w-full bg-gradient-to-b from-[#CAF0F8] to-white shadow-sm font-[Poppins] z-50"
        x-data="{ mobileMenu: false }">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex-shrink-0">
      <div class="h-16 w-16 flex items-center justify-center text-[#0E1D51] font-bold text-xl">
        LOGO
      </div>
    </div>

    <!-- Desktop Nav -->
    <nav class="hidden lg:flex items-center space-x-6 text-lg text-gray-800">
      <a href="<?= base_url('/') ?>" class="hover:text-blue-600">Home</a>

      <!-- HR Solutions Dropdown -->
      <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
        <button @click="open = !open" class="flex items-center space-x-1 hover:text-blue-600 focus:outline-none">
          <span>HR Solutions</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="open" x-cloak x-transition class="absolute top-full left-0 mt-2 bg-white shadow-lg rounded-xl w-72 p-6 z-40">
          <h3 class="text-blue-600 font-semibold mb-2">Core Modules</h3>
          <ul class="space-y-3 text-base font-medium text-gray-800">
            <li>
              <a href="#" class="hover:text-blue-500 block">Payroll Management</a>
              <p class="text-sm text-gray-500">Manage employee salaries, taxes, and deductions.</p>
            </li>
            <li>
              <a href="#" class="hover:text-blue-500 block">Leave Tracking</a>
              <p class="text-sm text-gray-500">Track vacation days, sick leaves, and approvals.</p>
            </li>
            <li>
              <a href="#" class="hover:text-blue-500 block">Employee Directory</a>
              <p class="text-sm text-gray-500">Browse and manage employee contact details.</p>
            </li>
          </ul>
        </div>
      </div>

     <!-- About Us Dropdown -->
<div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
  <button @click="open = !open" class="flex items-center space-x-1 hover:text-blue-600 focus:outline-none">
    <span>About Us</span>
    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
    </svg>
  </button>
  <div x-show="open" x-cloak x-transition class="absolute top-full left-0 mt-2 bg-white shadow-lg rounded-xl w-72 p-6 z-40">
    <div class="space-y-4 text-base font-medium text-gray-800">
      <div>
        <a href="<?= base_url('about/company') ?>" class="hover:text-blue-500 block">Company</a>
        <p class="text-sm text-gray-500">Get to know our mission and vision.</p>
      </div>
      <div>
        <a href="<?= base_url('about/team') ?>" class="hover:text-blue-500 block">Our Team</a>
        <p class="text-sm text-gray-500">Meet the people behind HRIS.</p>
      </div>
      <div>
        <a href="<?= base_url('about/careers') ?>" class="hover:text-blue-500 block">Careers</a>
        <p class="text-sm text-gray-500">Explore job opportunities with us.</p>
      </div>
    </div>
  </div>
</div>


      <a href="#" class="hover:text-blue-600">Resources</a>
      <a href="#" class="hover:text-blue-600">Help & Support</a>
    </nav>

    <!-- Search + Button -->
    <div class="hidden sm:flex items-center space-x-4">
      <div class="relative">
        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
        </svg>
      </div>
      <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-full shadow hover:bg-blue-700 transition-all duration-300 font-medium">
        How it works
      </a>
    </div>

     <!-- Mobile Menu Button -->
     <button @click="mobileMenu = !mobileMenu" class="lg:hidden focus:outline-none">
      <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path x-show="!mobileMenu" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        <path x-show="mobileMenu" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Mobile Nav -->
  <!-- Mobile Nav -->
<div x-show="mobileMenu" x-transition x-cloak class="lg:hidden px-4 pb-6 space-y-4 bg-white border-t border-gray-200" x-data="{ openHR: false, openAbout: false }">
  <a href="<?= base_url('/') ?>" class="block py-2 text-gray-800 hover:text-blue-600">Home</a>

  <!-- HR Solutions Mobile Dropdown -->
  <div>
    <button @click="openHR = !openHR" class="w-full text-left py-2 flex justify-between items-center text-gray-800 hover:text-blue-600">
      HR Solutions
      <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': openHR }" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <div x-show="openHR" x-transition x-cloak class="pl-4 space-y-2 text-sm text-gray-700">
      <a href="#" class="block hover:text-blue-500">Payroll Management</a>
      <a href="#" class="block hover:text-blue-500">Leave Tracking</a>
      <a href="#" class="block hover:text-blue-500">Employee Directory</a>
    </div>
  </div>

  <!-- About Us Mobile Dropdown -->
<div>
  <button @click="openAbout = !openAbout" class="w-full text-left py-2 flex justify-between items-center text-gray-800 hover:text-blue-600">
    About Us
    <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': openAbout }" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
    </svg>
  </button>
  <div x-show="openAbout" x-transition x-cloak class="pl-4 space-y-2 text-sm text-gray-700">
    <a href="<?= base_url('about/company') ?>" class="block hover:text-blue-500">Company</a>
    <a href="<?= base_url('about/team') ?>" class="block hover:text-blue-500">Our Team</a>
    <a href="<?= base_url('about/careers') ?>" class="block hover:text-blue-500">Careers</a>
  </div>
</div>


  <a href="#" class="block py-2 text-gray-800 hover:text-blue-600">Resources</a>
  <a href="#" class="block py-2 text-gray-800 hover:text-blue-600">Help & Support</a>

  <div>
    <input type="text" placeholder="Search..." class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
  </div>

  <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded-full font-medium hover:bg-blue-700">How it works</a>
</div>

</header>