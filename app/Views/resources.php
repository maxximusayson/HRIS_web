<!-- Your styles and scripts -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="//unpkg.com/alpinejs" defer></script>

<title>HRIS | Resources</title>

<?= view('layout/header') ?>
  

<div class="relative min-h-screen bg-gradient-to-b from-white to-[#CAF0F8] py-12">


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
    <!-- End Grid Lines -->

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <br><br><br><br><br><br><br>

        <h1 class="text-4xl font-bold text-gray-800 mb-8">HRIS Resources</h1>

        <p class="text-gray-600 mb-12 text-lg">
            Access essential HR documents, policies, and tools for a smooth and productive work experience.
        </p>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Resource Card 1 -->
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition p-6 flex flex-col">
                <h2 class="text-2xl font-semibold text-blue-600 mb-3">Employee Handbook</h2>
                <p class="text-gray-600 flex-grow">
                    Your guide to company policies, workplace culture, and employee expectations.
                </p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-500 hover:text-blue-700 font-medium">
                    View Handbook
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Resource Card 2 -->
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition p-6 flex flex-col">
                <h2 class="text-2xl font-semibold text-blue-600 mb-3">Leave & Attendance Guide</h2>
                <p class="text-gray-600 flex-grow">
                    Understand the leave filing process, attendance policies, and holiday schedules.
                </p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-500 hover:text-blue-700 font-medium">
                    View Guide
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Resource Card 3 -->
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition p-6 flex flex-col">
                <h2 class="text-2xl font-semibold text-blue-600 mb-3">Payroll & Payslip FAQ</h2>
                <p class="text-gray-600 flex-grow">
                    Learn how salaries are computed, view deduction breakdowns, and download payslips.
                </p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-500 hover:text-blue-700 font-medium">
                    Read FAQ
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Resource Card 4 -->
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition p-6 flex flex-col">
                <h2 class="text-2xl font-semibold text-blue-600 mb-3">Training & Development</h2>
                <p class="text-gray-600 flex-grow">
                    Explore growth opportunities and stay updated with upcoming HRIS workshops and training.
                </p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-500 hover:text-blue-700 font-medium">
                    Explore Trainings
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Resource Card 5 -->
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition p-6 flex flex-col">
                <h2 class="text-2xl font-semibold text-blue-600 mb-3">Company Forms</h2>
                <p class="text-gray-600 flex-grow">
                    Access downloadable forms for leave applications, reimbursements, and HR requests.
                </p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-500 hover:text-blue-700 font-medium">
                    Download Forms
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<?= view('layout/footer') ?>