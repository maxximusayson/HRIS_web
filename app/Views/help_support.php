<!-- Your styles and scripts -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="//unpkg.com/alpinejs" defer></script>

<title>HRIS | Help & Support</title>

<?= view('layout/header') ?>

<div class="min-h-screen bg-gradient-to-b from-[#CAF0F8] to-white py-12 px-6 flex flex-col items-center justify-start">
<br><br><br><br><br><br><br><br>
    <!-- Page Title -->
    <h1 class="text-4xl font-bold text-gray-800 mb-6">Help & Support</h1>
    
    <!-- Search Box -->
    <div class="w-full max-w-2xl mb-12">
        <div class="flex items-center bg-white shadow rounded-full overflow-hidden p-2">
            <svg class="w-6 h-6 text-gray-400 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 14.65z"></path>
            </svg>
            <input type="text" placeholder="Search lorem topics, policies, or forms..."
                class="flex-grow p-2 bg-transparent focus:outline-none text-gray-700" />
        </div>
    </div>

    <!-- Support Cards Section -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 w-full max-w-5xl">
        <!-- Policies Card -->
        <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl text-center transition">
            <div class="flex justify-center mb-4">
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M9 12h6m2 0a8 8 0 11-16 0 8 8 0 0116 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Lorem Policies</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
        </div>

        <!-- Leave Requests Card -->
        <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl text-center transition">
            <div class="flex justify-center mb-4">
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M8 7V3m8 4V3M3 11h18M5 19h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Lorem & Attendance</h3>
            <p class="text-gray-600">Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
        </div>

        <!-- Payslips Card -->
        <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl text-center transition">
            <div class="flex justify-center mb-4">
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M3 10h11M9 21V3m7 7h5l-1.405 1.405A2.032 2.032 0 0118 12H8a2 2 0 00-2 2v7"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Lorem & Salary</h3>
            <p class="text-gray-600">Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
        </div>
    </div>

    <p class="text-sm text-gray-500 mt-16">
        Need more help? Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>
</div>

<?= view('layout/footer') ?>
