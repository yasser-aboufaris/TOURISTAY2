<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Living | Modern Home Rentals</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3B82F6;
            --secondary: #6366F1;
        }

        body { 
            font-family: 'Poppins', sans-serif; 
            background: #f8fafc;
        }

        .gradient-text {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
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
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .btn-gradient {
            background-size: 200% auto;
            transition: all 0.5s ease;
        }
        
        .btn-gradient:hover {
            background-position: right center;
        }
        
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="antialiased">
    <!-- Modern Header -->
    <header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50 transition-all duration-300">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-9 h-9 bg-gradient-to-r from-blue-600 to-indigo-500 rounded-lg flex items-center justify-center shadow-md">
                    <i class="fas fa-home text-white text-lg"></i>
                </div>
                <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-indigo-500 bg-clip-text text-transparent">
                    LuxeLiving
                </span>
            </div>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-all font-medium relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-blue-600 after:transition-all hover:after:w-full">Discover</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-all font-medium relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-blue-600 after:transition-all hover:after:w-full">Cities</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-all font-medium relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-blue-600 after:transition-all hover:after:w-full">Blog</a>
                <a href="#" class="px-6 py-2 bg-gradient-to-r from-blue-600 to-indigo-500 text-white rounded-full hover:shadow-lg transition-all btn-gradient">
                    Get Started
                </a>
            </div>
            <div class="md:hidden">
                <button class="text-gray-600 hover:text-blue-600 transition-all">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- Dynamic Hero Section -->
    <section class="relative min-h-[80vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 to-indigo-500/90"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight">
                    Discover Your 
                    <span class="gradient-text bg-white">Dream Home</span><br>
                    in Perfect Locations
                </h1>
                <form action="/houses/search" method="POST" class="bg-white/20 backdrop-blur-sm rounded-xl p-1.5 shadow-2xl inline-block glass-effect"> 
                    @csrf
    <div class="flex flex-col md:flex-row gap-4 items-center p-4">
        <div class="flex-1 w-full">
            <input type="text" 
                   class="w-full px-6 py-4 rounded-lg border-0 shadow-inner focus:ring-2 focus:ring-blue-400 transition-all"
                   placeholder="Search by location or property..."
                   name="search">
        </div>
        <button type="submit" class="w-full md:w-auto bg-gradient-to-r from-blue-600 to-indigo-500 text-white px-8 py-4 rounded-lg hover:shadow-xl transition-all flex items-center justify-center btn-gradient">
            <i class="fas fa-search mr-2"></i> Explore Now
        </button>
    </div>
</form>

            </div>
        </div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="floating absolute top-20 left-20 w-24 h-24 bg-white/10 rounded-full"></div>
            <div class="floating absolute top-1/3 right-40 w-40 h-40 bg-white/10 rounded-full" style="animation-delay: -2s"></div>
            <div class="floating absolute bottom-20 left-1/3 w-32 h-32 bg-white/10 rounded-full" style="animation-delay: -4s"></div>
            <div class="floating absolute top-2/3 left-2/3 w-20 h-20 bg-white/5 rounded-full" style="animation-delay: -1s"></div>
            <div class="floating absolute bottom-1/3 right-1/4 w-16 h-16 bg-white/10 rounded-full" style="animation-delay: -3s"></div>
        </div>
    </section>

    <!-- Featured Listings Section -->
    <section class="py-24 bg-gradient-to-b from-white to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">
                    Featured <span class="gradient-text">Properties</span>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Curated selection of premium homes in top locations with exceptional amenities
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($houses as $house)
                <div class="group bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all overflow-hidden card-hover">
                    <div class="relative h-64">
                        <img src="{{ $house->image_url }}" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             alt="Property image">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <div class="text-white font-semibold text-lg">{{ $house->location }}</div>
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-blue-600 font-semibold text-sm">
                            Featured
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-semibold group-hover:text-blue-600 transition-colors">{{ $house->title }}</h3>
                            <span class="text-blue-600 font-bold text-lg">${{ number_format($house->price) }}/mo</span>
                        </div>
                        <div class="flex items-center space-x-4 text-gray-500 mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-bed text-blue-500 mr-2"></i>
                                <span>{{ $house->bedrooms }} Bed</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-bath text-blue-500 mr-2"></i>
                                <span>{{ $house->bathrooms }} Bath</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-ruler-combined text-blue-500 mr-2"></i>
                                <span>{{ $house->square_feet }} ft²</span>
                            </div>
                        </div>
                        <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-500 text-white py-3 rounded-lg hover:opacity-90 transition-all flex items-center justify-center group-hover:shadow-md btn-gradient">
                            Explore Property
                            <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-2"></i>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">
                    Simple <span class="gradient-text">Process</span>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Three easy steps to your perfect home with our seamless experience
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-2xl group transition-all hover:-translate-y-2 card-hover">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-500 rounded-xl flex items-center justify-center text-white text-2xl mb-6 shadow-md group-hover:shadow-lg transition-all">
                        1
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 group-hover:text-blue-600 transition-colors">Discover Properties</h3>
                    <p class="text-gray-600">Explore our curated collection of premium homes with immersive virtual tours</p>
                </div>
                
                <!-- Repeat similar blocks for other steps -->
            </div>
        </div>
    </section>

    <!-- Modern CTA Section -->
    <section class="bg-gradient-to-r from-blue-600 to-indigo-500 text-white py-24 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-white/5 rounded-full translate-x-1/2 translate-y-1/2"></div>
        </div>
        
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-4xl font-bold mb-6">Start Your Journey Today</h2>
                <p class="text-lg mb-8 opacity-90">Join our community of satisfied renters and find your perfect match</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="px-8 py-4 bg-white text-blue-600 rounded-full hover:shadow-xl transition-all font-semibold hover:bg-gray-100">
                        Browse Listings
                    </a>
                    <a href="#" class="px-8 py-4 border-2 border-white text-white rounded-full hover:bg-white hover:text-blue-600 transition-all">
                        Schedule Tour
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Footer -->
    <footer class="bg-gray-900 text-gray-300 pt-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 border-b border-gray-800 pb-12">
                <!-- Footer sections here -->
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-indigo-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-home text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold text-white">
                            LuxeLiving
                        </span>
                    </div>
                    <p class="text-gray-400 mb-6">Premium rental properties in prime locations to match your exclusive lifestyle.</p>
                </div>
            </div>
            <div class="py-8 text-center text-sm text-gray-500">
                © 2024 LuxeLiving. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>