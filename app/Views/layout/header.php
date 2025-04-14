<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- Hide x-cloak until Alpine loads -->
<style>[x-cloak] { display: none !important; }</style>

<!-- Header -->
<header class="relative bg-gradient-to-b from-[#CAF0F8] to-white shadow-sm font-[Poppins] z-50" x-data="{ open: false }">

  <!-- Top Navbar -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">

    <!-- Left: Logo + Nav -->
    <div class="flex items-center gap-10 -ml-32">
      <!-- Logo -->
      <div class="flex-shrink-0">
  <div class="h-24 w-24 flex items-center justify-center text-[#0E1D51] font-bold text-xl">
    LOGO
  </div>
</div>


      <!-- Navigation - Desktop -->
<nav class="hidden sm:flex space-x-6 text-lg text-gray-800 items-center relative"></nav>

<!-- Navigation -->
<nav class="flex space-x-6 text-lg text-gray-800 items-center relative">
  <!-- HR Solutions Dropdown -->
  <div class="relative group" @mouseenter="open = true" @mouseleave="open = false">
    <button 
      @click="open = !open" 
      class="flex items-center space-x-1 text-gray-800 hover:text-blue-600 focus:outline-none"
    >
      <span>HR Solutions</span>
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
      </svg>
    </button>

    <!-- Dropdown Menu (Single Column) -->
    <div 
      x-show="open"
      x-cloak
      x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="opacity-0 translate-y-2"
      x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 translate-y-2"
      class="absolute left-0 top-full mt-4 bg-white shadow-xl pt-6 pb-8 z-40 rounded-xl min-w-[300px] w-max"
    >
      <div class="flex flex-col gap-4 px-8 text-gray-800 text-base font-medium">
        <h3 class="text-blue-600 font-semibold mb-2">Core Modules</h3>
        <ul class="space-y-3">
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
  </div>
</nav>

        <!-- Other nav items -->
       
  <!-- About Us Dropdown -->
  <div class="relative group" @mouseenter="aboutOpen = true" @mouseleave="aboutOpen = false" x-data="{ aboutOpen: false }">
    <button 
      @click="aboutOpen = !aboutOpen" 
      class="flex items-center space-x-1 text-gray-800 hover:text-blue-600 focus:outline-none"
    >
      <span>About Us</span>
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
      </svg>
    </button>

    <!-- About Dropdown -->
    <div 
      x-show="aboutOpen"
      x-cloak
      x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="opacity-0 translate-y-2"
      x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 translate-y-2"
      class="absolute left-0 top-full mt-4 bg-white shadow-xl pt-4 pb-6 z-40 rounded-xl min-w-[300px]"
    >
    <div class="px-6 text-gray-800 text-base font-medium space-y-4">
  <div>
    <a href="<?= base_url('company') ?>" class="hover:text-blue-500 block">Company</a>
    <p class="text-sm text-gray-500">Get to know our mission and vision.</p>
  </div>
  <div>
    <a href="<?= base_url('team') ?>" class="hover:text-blue-500 block">Our Team</a>
    <p class="text-sm text-gray-500">Meet the people behind HRIS.</p>
  </div>
  <div>
    <a href="<?= base_url('careers') ?>" class="hover:text-blue-500 block">Careers</a>
    <p class="text-sm text-gray-500">Explore job opportunities with us.</p>
  </div>
</div>

    </div>
  </div>
        <a href="#" class="hover:text-blue-600">Resources</a>
        <a href="#" class="hover:text-blue-600">Help & Support</a>
      </nav>
    </div>

    <!-- Right: Search + Button -->
    <div class="flex items-center space-x-4">
      <div class="relative">
        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-1.5 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
        </svg>
      </div>
      <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-full shadow hover:bg-blue-700 hover:scale-105 transition-all duration-300 font-medium">
        How it works
      </a>
    </div>
  </div>


     <!-- Mobile Toggle -->
     <button @click="mobileMenu = !mobileMenu" class="sm:hidden text-gray-700 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path x-show="!mobileMenu" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          <path x-show="mobileMenu" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>

       <!-- Mobile Menu -->
  <div x-show="mobileMenu" x-transition x-cloak class="sm:hidden bg-white border-t border-gray-200 px-6 pb-6 space-y-4">
    <a href="#" class="block py-2 text-gray-800 hover:text-blue-600">HR Solutions</a>
    <a href="#" class="block py-2 text-gray-800 hover:text-blue-600">About Us</a>
    <a href="#" class="block py-2 text-gray-800 hover:text-blue-600">Resources</a>
    <a href="#" class="block py-2 text-gray-800 hover:text-blue-600">Help & Support</a>
    <div class="pt-2">
      <input type="text" placeholder="Search..." class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
    </div>
    <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded-full font-medium hover:bg-blue-700">How it works</a>
  </div>
  
</header>
