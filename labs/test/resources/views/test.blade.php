<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">Preline Page <i data-lucide="annoyed"></i></h1>

            <button 
                class="inline-flex items-center px-4 py-2 text-sm font-medium bg-blue-600 text-white rounded-lg hover:bg-blue-700"
                data-hs-overlay="#example-modal">
                Open Modal 
                <!-- <x-lucide-cone /> -->
            </button>
        </div>
    </header>

    <!-- Content -->
    <main class="max-w-7xl mx-auto px-6 py-10">
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-3">Hello from Preline</h2>
            <p class="text-gray-600">
                This is a simple Blade page styled with Tailwind and enhanced with Preline UI components.
            </p>

            <button 
                class="mt-5 inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700"
                data-hs-overlay="#example-modal">
                Show Example Modal
            </button>
        </div>
    </main>

    <!-- Modal -->
    <div id="example-modal" 
         class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-y-auto">
        <div class="hs-overlay-open:mt-20 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-10 opacity-0 transition-all sm:max-w-lg sm:mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl shadow-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Preline Modal</h3>
                    <p class="text-gray-600">
                        If you see this, Preline is working correctly.
                    </p>
                </div>

                <div class="flex justify-end gap-3 p-4 border-t">
                    <button 
                        class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300"
                        data-hs-overlay="#example-modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
