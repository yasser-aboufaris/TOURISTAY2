<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Living | Modern Home Rentals</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3B82F6;
            --secondary: #6366F1;
            --accent: #8B5CF6;
            --dark: #1E293B;
        }

        body { 
            font-family: 'Poppins', sans-serif; 
            background: #f8fafc;
            scroll-behavior: smooth;
        }

        .heading-font {
            font-family: 'Montserrat', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-bg {
            background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(59, 130, 246, 0.1), 0 10px 10px -5px rgba(99, 102, 241, 0.08);
        }

        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .hero-search {
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.2);
        }
        
        .property-badge {
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(99, 102, 241, 0.2), 0 2px 4px -1px rgba(99, 102, 241, 0.1);
        }
        
        .btn-primary:hover {
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3), 0 4px 6px -2px rgba(99, 102, 241, 0.2);
            transform: translateY(-2px);
        }
        
        .btn-outline {
            transition: all 0.3s ease;
        }
        
        .btn-outline:hover {
            transform: translateY(-2px);
        }
        
        .step-card {
            border-radius: 1.5rem;
            overflow: hidden;
            border: 1px solid rgba(99, 102, 241, 0.1);
            transition: all 0.5s ease;
        }
        
        .step-card:hover {
            border-color: rgba(99, 102, 241, 0.3);
        }

        .step-number {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
        }

        .scroll-indicator {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
        }
    </style>
</head>
<body class="antialiased">
    <!-- Enhanced Header -->
    <header class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50 transition-all duration-300">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/20">
                    <i class="fas fa-home text-white text-lg"></i>
                </div>
                <span class="text-2xl heading-font font-extrabold bg-gradient-to-r from-blue-600 via-indigo-500 to-purple-500 bg-clip-text text-transparent">
                    LuxeLiving
                </span>
            </div>
            <div class="hidden md:flex space-x-10 items-center">
                <a href="#" class="nav-link text-gray-700 hover:text-blue-600 transition-all font-medium">Discover</a>
                <a href="#" class="nav-link text-gray-700 hover:text-blue-600 transition-all font-medium">Cities</a>
                <a href="#" class="nav-link text-gray-700 hover:text-blue-600 transition-all font-medium">Blog</a>
                <a href="#" class="btn-primary px-6 py-2.5 bg-gradient-to-r from-blue-600 via-indigo-500 to-purple-500 text-white rounded-full hover:shadow-lg transition-all font-medium">
                    Get Started
                </a>
            </div>
            <div class="md:hidden">
                <button class="text-gray-700 hover:text-blue-600 p-2 rounded-lg hover:bg-blue-50 transition-all">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- Enhanced Hero Section -->
    <section class="relative min-h-[85vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-700/90 via-indigo-600/90 to-purple-600/90"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="heading-font text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight">
                    Discover Your 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-pink-300 to-white">Dream Home</span><br>
                    in Perfect Locations
                </h1>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">Luxury living spaces tailored to your lifestyle in the most sought-after neighborhoods.</p>
                <div class="hero-search bg-white/20 backdrop-blur-lg rounded-2xl p-2 shadow-2xl inline-block">
                    <div class="flex flex-col md:flex-row gap-4 items-center p-4">
                        <div class="flex-1 w-full">
                            <div class="relative">
                                <i class="fas fa-map-marker-alt absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input type="text" 
                                      class="w-full pl-12 pr-6 py-4 rounded-xl border-0 focus:ring-2 focus:ring-blue-400 shadow-inner"
                                      placeholder="Search by location or property...">
                            </div>
                        </div>
                        <button class="btn-primary w-full md:w-auto bg-gradient-to-r from-blue-600 via-indigo-500 to-purple-500 text-white px-8 py-4 rounded-xl hover:shadow-xl transition-all flex items-center justify-center font-medium">
                            <i class="fas fa-search mr-2"></i> Explore Now
                        </button>
                    </div>
                </div>
                <div class="mt-12 scroll-indicator text-white/70">
                    <i class="fas fa-chevron-down text-2xl"></i>
                </div>
            </div>
        </div>
        
        <!-- Enhanced Animated Background Elements -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="floating absolute top-20 left-20 w-24 h-24 bg-white/15 rounded-full blur-sm"></div>
            <div class="floating absolute top-1/2 right-40 w-40 h-40 bg-white/10 rounded-full blur-sm" style="animation-delay: -2s"></div>
            <div class="floating absolute bottom-20 left-1/3 w-32 h-32 bg-white/10 rounded-full blur-sm" style="animation-delay: -4s"></div>
            <div class="floating absolute top-40 right-1/4 w-20 h-20 bg-white/10 rounded-full blur-sm" style="animation-delay: -6s"></div>
            <div class="floating absolute bottom-40 right-20 w-28 h-28 bg-white/15 rounded-full blur-sm" style="animation-delay: -3s"></div>
        </div>
    </section>

    <!-- Enhanced Featured Listings Section -->
    <section class="py-24 bg-gradient-to-b from-white to-blue-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="px-4 py-1.5 bg-blue-100 text-blue-600 rounded-full text-sm font-medium inline-block mb-4">HANDPICKED PROPERTIES</span>
            <h2 class="heading-font text-4xl md:text-5xl font-extrabold mb-6">
                Featured <span class="gradient-text">Properties</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Curated selection of premium homes in top locations, tailored to provide exceptional living experiences
            </p>
        </div>

        <!-- Per Page Selection Form -->
        <div class="mb-8 flex justify-end">
            <form method="GET" action="{{ request()->url() }}" class="flex items-center space-x-3">
                <label for="per_page" class="text-gray-600 font-medium">Show:</label>
                <select name="per_page" id="per_page" onchange="this.form.submit()" 
                        class="form-select rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 text-gray-700 py-2 px-3">
                    @foreach([6, 9, 12, 15, 24] as $option)
                        <option value="{{ $option }}" {{ request('per_page', 9) == $option ? 'selected' : '' }}>
                            {{ $option }} per page
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
        @foreach($houses as $house)
    <div class="card-hover bg-white rounded-2xl shadow-xl overflow-hidden group">
        <div class="relative h-72 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-800/20 to-blue-900/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
            <img src="{{ $house->image_url }}" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                 alt="Property image">
            <div class="absolute top-4 left-4 z-20">
                <span class="px-3 py-1 bg-white/80 property-badge text-blue-600 rounded-full text-sm font-medium">
                    {{ $house->type ?? 'Apartment' }}
                </span>
            </div>
            <!-- Favorite Button - Positioned in the top right -->
            <div class="absolute top-4 right-4 z-20">
                <form action="favorite/add/{{$house->id}}" method="POST" class="inline">
                    @csrf
                    @if(in_array($house->id, $favorites ?? []))
                        @method('DELETE')
                    @endif
                    <button type="submit" 
                            class="h-10 w-10 flex items-center justify-center rounded-full bg-white/80 backdrop-blur-sm transition-all duration-300 hover:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <i class="fas fa-heart {{ in_array($house->id, $favorites ?? []) ? 'text-red-500' : 'text-gray-400' }} text-lg transition-colors duration-300 hover:text-red-500"></i>
                    </button>
                </form>
            </div>
            <div class="absolute bottom-0 left-0 right-0 p-6 z-20 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                <div class="text-white font-semibold text-xl">{{ $house->location }}</div>
                <div class="flex mt-2">
                    <span class="px-2 py-1 bg-white/30 backdrop-blur-md rounded text-white text-xs mr-2">
                        <i class="fas fa-ruler-combined mr-1"></i> {{ $house->sqft ?? '1,200' }} sq ft
                    </span>
                    <span class="px-2 py-1 bg-white/30 backdrop-blur-md rounded text-white text-xs">
                        <i class="fas fa-calendar-alt mr-1"></i> Available Now
                    </span>
                </div>
            </div>
        </div>
        <div class="p-6">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-xl font-bold text-gray-800">{{ $house->title }}</h3>
                <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-lg font-bold">${{ number_format($house->price) }}/mo</span>
            </div>
            <div class="flex items-center space-x-6 text-gray-500 mb-6">
                <div class="flex items-center">
                    <i class="fas fa-bed text-blue-500 mr-2"></i>
                    <span>{{ $house->bedrooms }} Beds</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-bath text-blue-500 mr-2"></i>
                    <span>{{ $house->bathrooms }} Baths</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-car text-blue-500 mr-2"></i>
                    <span>{{ $house->parking ?? '2' }}</span>
                </div>
            </div>
            <button class="w-full btn-primary py-3.5 rounded-xl font-medium flex items-center justify-center group">
                <span>Explore Property</span>
                <i class="fas fa-arrow-right ml-2 transform transition-transform group-hover:translate-x-1"></i>
            </button>
        </div>
    </div>
@endforeach

        </div>

        <!-- Enhanced Pagination -->
        <div class="mt-16 flex justify-center">
            {{ $houses->appends(['per_page' => request('per_page', 9)])->links() }}
        </div>
        
        <!-- View All Button -->
        <div class="text-center mt-10">
            <a href="#" class="inline-flex items-center px-8 py-3 border-2 border-blue-500 text-blue-600 rounded-xl hover:bg-blue-50 transition-all font-medium group">
                View All Properties
                <i class="fas fa-long-arrow-alt-right ml-2 transform transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>
    </div>
</section>

    <!-- Enhanced How It Works Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <span class="px-4 py-1.5 bg-blue-100 text-blue-600 rounded-full text-sm font-medium inline-block mb-4">HOW IT WORKS</span>
                <h2 class="heading-font text-4xl md:text-5xl font-extrabold mb-6">
                    Simple <span class="gradient-text">Process</span>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Three easy steps to finding and securing your perfect home
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-10">
                <div class="step-card bg-gradient-to-br from-blue-50 to-indigo-50 p-10 group transition-all">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center text-white text-2xl mb-8 shadow-lg shadow-blue-200 group-hover:shadow-blue-300 step-number">
                        1
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Discover Properties</h3>
                    <p class="text-gray-600 mb-6">Explore our curated collection of premium homes with immersive virtual tours and detailed descriptions.</p>
                    <a href="#" class="text-blue-600 font-medium inline-flex items-center group">
                        Learn More 
                        <i class="fas fa-arrow-right ml-2 transform transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>
                
                <div class="step-card bg-gradient-to-br from-indigo-50 to-purple-50 p-10 group transition-all">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center text-white text-2xl mb-8 shadow-lg shadow-indigo-200 group-hover:shadow-indigo-300 step-number">
                        2
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Schedule Viewings</h3>
                    <p class="text-gray-600 mb-6">Book appointments online or in-person to tour your favorite properties at your convenience.</p>
                    <a href="#" class="text-blue-600 font-medium inline-flex items-center group">
                        Learn More 
                        <i class="fas fa-arrow-right ml-2 transform transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>
                
                <div class="step-card bg-gradient-to-br from-purple-50 to-pink-50 p-10 group transition-all">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center text-white text-2xl mb-8 shadow-lg shadow-purple-200 group-hover:shadow-purple-300 step-number">
                        3
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Secure Your Home</h3>
                    <p class="text-gray-600 mb-6">Complete the application process online with our streamlined system and move into your new home.</p>
                    <a href="#" class="text-blue-600 font-medium inline-flex items-center group">
                        Learn More 
                        <i class="fas fa-arrow-right ml-2 transform transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced CTA Section -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600"></div>
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 rounded-full border-8 border-white"></div>
            <div class="absolute bottom-10 right-10 w-60 h-60 rounded-full border-8 border-white"></div>
            <div class="absolute top-1/2 left-1/3 w-20 h-20 rounded-full border-4 border-white"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="heading-font text-4xl md:text-5xl font-extrabold text-white mb-6">Start Your Journey Today</h2>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">Join our community of satisfied renters and find your perfect match with expert guidance every step of the way</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="btn-primary px-10 py-4 bg-white text-blue-600 rounded-xl hover:shadow-xl transition-all font-semibold">
                        Browse Listings
                    </a>
                    <a href="#" class="btn-outline px-10 py-4 border-2 border-white text-white rounded-xl hover:bg-white hover:text-blue-600 transition-all font-semibold">
                        Schedule Tour
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Footer -->
    <footer class="bg-gray-900 text-gray-300 pt-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 border-b border-gray-800 pb-16">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                            <i class="fas fa-home text-white text-lg"></i>
                        </div>
                        <span class="text-2xl heading-font font-bold text-white">
                            LuxeLiving
                        </span>
                    </div>
                    <p class="text-gray-400 mb-6">Discover your dream home in perfect locations with our premium rental listings.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-all">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-400 transition-all">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pink-600 transition-all">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white text-lg font-semibold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Properties</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Agents</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white text-lg font-semibold mb-6">Cities</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">New York</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Los Angeles</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Miami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">Chicago</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all">San Francisco</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white text-lg font-semibold mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for the latest updates.</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="bg-gray-800 border-0 flex-1 py-3 px-4 rounded-l-lg focus:ring-2 focus:ring-blue-500">
                        <button class="btn-primary px-4 py-3 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="py-8 text-center text-sm text-gray-500">
                © 2024 LuxeLiving. All rights reserved. Designed with <i class="fas fa-heart text-red-500"></i> for luxury living.
            </div>
        </div>
    </footer>
</body>
</html>