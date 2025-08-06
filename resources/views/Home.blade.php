<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Parking Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes zoomOut {
            0% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        .bg-animated {
            animation: zoomOut 3s ease-out forwards;
            background-size: cover;
            background-position: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .content {
            position: relative;
            z-index: 10;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- ✅ Floating Transparent Navbar -->
    <nav class="fixed top-0 left-0 w-full z-30 backdrop-blur-md bg-black/30 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="text-2xl font-bold">ParkPool</div>
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="hover:text-gray-300">Home</a>
                    <a href="#" class="hover:text-gray-300">Find Parking</a>
                    <a href="#" class="hover:text-gray-300">List Spot</a>
                    <a href="#" class="hover:text-gray-300">Login</a>
                    <a href="#" class="hover:text-gray-300">Register</a>
                </div>
                <div class="md:hidden">
                    <button id="menu-btn" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
            <a href="#" class="block py-2">Home</a>
            <a href="#" class="block py-2">Find Parking</a>
            <a href="#" class="block py-2">List Spot</a>
            <a href="#" class="block py-2">Login</a>
            <a href="#" class="block py-2">Register</a>
        </div>
    </nav>

    <!-- ✅ Hero Section with Background Zoom -->
    <section class="h-screen flex justify-center items-center text-white text-center px-4 relative overflow-hidden pt-16">
        <div class="absolute top-0 left-0 w-full h-full bg-animated"
            style="background-image: url('https://wallpapers.com/images/hd/black-car-4k-8iilwvng2997orpp.jpg');"></div>
        <div class="overlay"></div>
        <div class="content flex flex-col items-center">
            <h1 class="text-5xl font-bold mb-4 drop-shadow-2xl">
                FIND YOUR PERFECT PARKING SPOT
            </h1>
            <p class="text-xl mb-8 drop-shadow-xl max-w-xl">
                Discover convenient parking solutions or monetize your empty space
            </p>
            <div class="space-x-4">
                <button class="bg-gray-900 bg-opacity-80 px-6 py-3 rounded font-semibold hover:bg-opacity-90 transition">
                    Find Parking
                </button>
                <button class="bg-white bg-opacity-30 px-6 py-3 rounded font-semibold hover:bg-opacity-50 transition">
                    List Your Spot
                </button>
            </div>
        </div>
    </section>

    <!-- ✅ Featured Parking Section -->
    <section class="py-20 px-4 md:px-12 bg-gray-100">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-2">Featured Parking Spots</h2>
            <p class="text-gray-500">Discover some of our most popular parking locations</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transform transition-transform duration-500 hover:scale-105 hover:shadow-xl">
                <img class="w-full h-48 object-cover" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/305521563.jpg?k=25a384ac10f256129c723c3b51d606ceeded15672d61773982dbed05deeb9385&o=&hp=1" alt="Parking 1" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-1">Downtown Premium Garage</h3>
                    <p class="text-gray-700 font-bold mb-1">৳120/hour</p>
                    <p class="text-gray-500 mb-3">Gulshan, Dhaka</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Covered</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Security</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">EV Charging</span>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transform transition-transform duration-500 hover:scale-105 hover:shadow-xl">
                <img class="w-full h-48 object-cover" src="https://www.dlrgroup.com/media/2021/07/75_15803_00_N12_weblg-e1647368293799-2140x1171.jpg" alt="Parking 2" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-1">Airport Long-term Parking</h3>
                    <p class="text-gray-700 font-bold mb-1">৳80/hour</p>
                    <p class="text-gray-500 mb-3">Hazrat Shahjalal Airport, Dhaka</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">24/7 Access</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Shuttle Service</span>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transform transition-transform duration-500 hover:scale-105 hover:shadow-xl">
                <img class="w-full h-48 object-cover" src="https://media.istockphoto.com/id/174695368/photo/bright-colored-photo-of-parking-lot-and-office-building.jpg?s=612x612&w=0&k=20&c=WXyVyVc9uvZAC6SXsOfpR__rpzBH-9KUumF7_ebem-o=" alt="Parking 3" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-1">Shopping Mall Complex</h3>
                    <p class="text-gray-700 font-bold mb-1">৳50/hour</p>
                    <p class="text-gray-500 mb-3">Bashundhara City, Dhaka</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Covered</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Handicap Access</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS for mobile menu toggle -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>