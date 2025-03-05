<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Rentals - Find Your Perfect Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .property-image {
            background-size: cover;
            background-position: center;
            transition: transform 0.3s ease;
        }
        .property-card:hover .property-image {
            transform: scale(1.05);
        }
        .search-bar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1200/600');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-home text-blue-600 text-3xl mr-2"></i>
                <div class="text-2xl font-bold">
                    <span class="text-blue-600">House</span><span class="text-gray-800">Rent</span>
                </div>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors font-medium">Home</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors font-medium">Listings</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors font-medium">About</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors font-medium">Contact</a>
                <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium">Sign In</a>
            </div>
            <div class="md:hidden">
                <button class="text-gray-500 hover:text-gray-800 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section text-white py-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">Find Your Dream Home Today</h1>
            <p class="text-xl mb-10 opacity-90 max-w-2xl mx-auto">Browse thousands of rental properties available during your desired dates</p>
            <div class="max-w-3xl mx-auto">
                <div class="search-bar flex flex-col md:flex-row bg-white rounded-lg p-3 items-center">
                    <div class="flex items-center flex-1 border-b md:border-b-0 md:border-r border-gray-200 p-2 w-full md:w-auto">
                        <i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>
                        <input type="text" placeholder="City or neighborhood" class="flex-1 text-gray-700 focus:outline-none w-full">
                    </div>
                    <div class="flex items-center flex-1 border-b md:border-b-0 md:border-r border-gray-200 p-2 w-full md:w-auto">
                        <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>
                        <input type="date" placeholder="Move-in date" class="flex-1 text-gray-700 focus:outline-none w-full">
                    </div>
                    <div class="flex items-center flex-1 p-2 w-full md:w-auto">
                        <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>
                        <input type="date" placeholder="Move-out date" class="flex-1 text-gray-700 focus:outline-none w-full">
                    </div>
                    <button class="mt-4 md:mt-0 md:ml-4 bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors w-full md:w-auto font-medium">
                        <i class="fas fa-search mr-2"></i>Search
                    </button>
                </div>
                <div class="mt-3 text-sm flex justify-center space-x-4">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                        <span class="ml-2">Show only available properties</span>
                    </label>
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                        <span class="ml-2">Include nearby areas</span>
                    </label>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-blue-600 text-4xl font-bold mb-2">5,000+</div>
                    <p class="text-gray-600">Available Properties</p>
                </div>
                <div class="p-6">
                    <div class="text-blue-600 text-4xl font-bold mb-2">3,200+</div>
                    <p class="text-gray-600">Happy Tenants</p>
                </div>
                <div class="p-6">
                    <div class="text-blue-600 text-4xl font-bold mb-2">150+</div>
                    <p class="text-gray-600">Cities Covered</p>
                </div>
                <div class="p-6">
                    <div class="text-blue-600 text-4xl font-bold mb-2">98%</div>
                    <p class="text-gray-600">Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Listings -->
    <section class="container mx-auto px-6 py-16">
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-3xl font-bold">Featured Properties</h2>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View All <i class="fas fa-arrow-right ml-1"></i></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Property Card 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden property-card transform transition hover:-translate-y-1">
                <div class="relative">
                    <div class="property-image h-64" style="background-image: url('/api/placeholder/600/400')"></div>
                    <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">Featured</div>
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">Available Now</div>
                    <div class="absolute bottom-4 right-4 bg-white text-blue-600 p-2 rounded-full shadow-md">
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-semibold">Cozy Family Home</h3>
                        <div class="text-blue-600 font-bold">$1,500/mo</div>
                    </div>
                    <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>123 Main St, Springfield</p>
                    <div class="flex justify-between text-sm text-gray-500 mb-4">
                        <span class="flex items-center"><i class="fas fa-bed text-blue-600 mr-2"></i>3 Beds</span>
                        <span class="flex items-center"><i class="fas fa-bath text-blue-600 mr-2"></i>2 Baths</span>
                        <span class="flex items-center"><i class="fas fa-ruler-combined text-blue-600 mr-2"></i>1,200 sqft</span>
                    </div>
                    <div class="mb-6 text-sm text-gray-500">
                        <i class="fas fa-calendar-check text-blue-600 mr-2"></i>Available: Mar 1 - Aug 31, 2025
                    </div>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors font-medium">View Details</button>
                </div>
            </div>
            <!-- Property Card 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden property-card transform transition hover:-translate-y-1">
                <div class="relative">
                    <div class="property-image h-64" style="background-image: url('/api/placeholder/600/400')"></div>
                    <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">New</div>
                    <div class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-medium">Available Apr 15</div>
                    <div class="absolute bottom-4 right-4 bg-white text-blue-600 p-2 rounded-full shadow-md">
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-semibold">Modern Apartment</h3>
                        <div class="text-blue-600 font-bold">$2,000/mo</div>
                    </div>
                    <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>456 Oak Ave, Downtown</p>
                    <div class="flex justify-between text-sm text-gray-500 mb-4">
                        <span class="flex items-center"><i class="fas fa-bed text-blue-600 mr-2"></i>2 Beds</span>
                        <span class="flex items-center"><i class="fas fa-bath text-blue-600 mr-2"></i>1 Bath</span>
                        <span class="flex items-center"><i class="fas fa-ruler-combined text-blue-600 mr-2"></i>900 sqft</span>
                    </div>
                    <div class="mb-6 text-sm text-gray-500">
                        <i class="fas fa-calendar-check text-blue-600 mr-2"></i>Available: Apr 15 - Dec 31, 2025
                    </div>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors font-medium">View Details</button>
                </div>
            </div>
            <!-- Property Card 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden property-card transform transition hover:-translate-y-1">
                <div class="relative">
                    <div class="property-image h-64" style="background-image: url('/api/placeholder/600/400')"></div>
                    <div class="absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-medium">Premium</div>
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">Available Now</div>
                    <div class="absolute bottom-4 right-4 bg-white text-blue-600 p-2 rounded-full shadow-md">
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-semibold">Luxury Villa</h3>
                        <div class="text-blue-600 font-bold">$3,500/mo</div>
                    </div>
                    <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>789 Pine Rd, Hillside</p>
                    <div class="flex justify-between text-sm text-gray-500 mb-4">
                        <span class="flex items-center"><i class="fas fa-bed text-blue-600 mr-2"></i>4 Beds</span>
                        <span class="flex items-center"><i class="fas fa-bath text-blue-600 mr-2"></i>3 Baths</span>
                        <span class="flex items-center"><i class="fas fa-ruler-combined text-blue-600 mr-2"></i>2,500 sqft</span>
                    </div>
                    <div class="mb-6 text-sm text-gray-500">
                        <i class="fas fa-calendar-check text-blue-600 mr-2"></i>Available: Mar 1 - Open-ended
                    </div>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors font-medium">View Details</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Dates Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Popular Move-in Dates</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">March 1</h3>
                    <p class="text-gray-600 mb-4">Spring move-in special</p>
                    <span class="inline-block bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">145 Properties</span>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">April 15</h3>
                    <p class="text-gray-600 mb-4">Mid-month availability</p>
                    <span class="inline-block bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">87 Properties</span>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">May 1</h3>
                    <p class="text-gray-600 mb-4">Summer move-in special</p>
                    <span class="inline-block bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">203 Properties</span>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">June 1</h3>
                    <p class="text-gray-600 mb-4">Early summer availability</p>
                    <span class="inline-block bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">156 Properties</span>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">How It Works</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Choose Your Dates</h3>
                    <p class="text-gray-600">Select your desired move-in and move-out dates to find available properties.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Book Viewings</h3>
                    <p class="text-gray-600">Schedule viewings with landlords or property managers at convenient times.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Move In</h3>
                    <p class="text-gray-600">Complete the rental agreement and move into your new dream home.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-blue-600 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Find Your Perfect Home?</h2>
            <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">Search by availability dates to find the perfect property on your schedule</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="bg-white text-blue-600 px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors font-medium">Search Available Dates</a>
                <a href="#" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-blue-600 transition-colors font-medium">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center mb-12">What Our Customers Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="text-yellow-400 mb-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-6">"Being able to search by date made finding a place that fit my timeline so much easier. I found the perfect apartment that was available exactly when I needed it!"</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full mr-4"></div>
                    <div>
                        <h4 class="font-semibold">Sarah Johnson</h4>
                        <p class="text-gray-500 text-sm">New York, NY</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="text-yellow-400 mb-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-6">"I needed a place with specific availability dates for my summer internship. This site made it simple to find exactly what I needed!"</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full mr-4"></div>
                    <div>
                        <h4 class="font-semibold">Michael Chen</h4>
                        <p class="text-gray-500 text-sm">San Francisco, CA</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="text-yellow-400 mb-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-gray-600 mb-6">"As a landlord, I love how I can list my property's availability dates. It helps me find tenants who match my schedule perfectly."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full mr-4"></div>
                    <div>
                        <h4 class="font-semibold">Emily Rodriguez</h4>
                        <p class="text-gray-500 text-sm">Chicago, IL</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-home text-blue-500 text-2xl mr-2"></i>
                        <div class="text-xl font-bold">
                            <span class="text-blue-500">House</span><span class="text-white">Rent</span>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-4">Finding your perfect home on your schedule. Browse thousands of rental properties with your preferred availability dates.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Search by Date</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">For Tenants</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">How It Works</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Date-Based Search</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tenant Resources</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Renting Guide</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-500 mt-1 mr-3"></i>
                            <span class="text-gray-400">123 Rental St, Real Estate City, 10001</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-blue-500 mr-3"></i>
                            <span class="text-gray-400">support@houserent.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt text-blue-500 mr-3"></i>
                            <span class="text-gray-400">1-800-RENT-NOW</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-400">
                <p>&copy; 2025 HouseRent. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle functionality would go here
        });
    </script>
</body>
</html>

Version 2 of 2