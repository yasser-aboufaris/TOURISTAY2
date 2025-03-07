<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $house->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8A1538',
                        secondary: '#3A7F0D',
                        accent: '#FEC310',
                        dark: '#2F2F2F',
                    }
                }
            }
        }
    </script>
</head>
@php
    $availability = session('availability');
@endphp
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">
    <nav class="bg-primary text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-white flex items-center">
                <i class="fas fa-futbol mr-2"></i> TouristStay
            </div>
            <div class="space-x-6">
                <a href="#" class="hover:text-accent transition-colors">Properties</a>
                <a href="#" class="hover:text-accent transition-colors">About</a>
                <a href="#" class="hover:text-accent transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 flex-grow">
        <div class="lg:flex lg:gap-8">
            <div class="lg:w-2/3">
                <div class="bg-white rounded-lg shadow-md p-6 mb-8 border-t-4 border-accent">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-4xl font-bold text-primary">{{ $house->title }}</h1>
                        <div class="text-2xl font-semibold text-secondary">${{ $house->price }} / month</div>
                    </div>

                    <div class="text-gray-600 mb-6">
                        {{ $house->description }}
                    </div>

                    <div class="grid md:grid-cols-3 gap-4 bg-gray-50 rounded-lg p-6 border border-gray-200">
                        <div class="flex items-center space-x-4">
                            <i class="{{ $house->category->icon }} text-primary text-2xl"></i>
                            <div>
                                <div class="font-semibold">
                                    @if($house->category)
                                        {{ $house->category->category_name }}
                                    @else
                                        <p>No category found</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking Availability Form -->
                <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-primary">
                    <h2 class="text-2xl font-bold text-primary mb-6">Check Availability</h2>
                    <form action="{{ !isset($availability) ? 'checkAvailability/' . $house->id : '/house/reserve/' . $house->id }}" method="POST" class="space-y-4">
    @csrf
    <div class="grid md:grid-cols-2 gap-4">
        <div>
            <label for="start_date" class="block text-gray-700 font-semibold mb-2">Check-in Date</label>
            <input 
                type="date" 
                id="start_date" 
                name="start_date" 
                required 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
            >
        </div>
        <div>
            <label for="end_date" class="block text-gray-700 font-semibold mb-2">Check-out Date</label>
            <input 
                type="date" 
                id="end_date" 
                name="end_date" 
                required 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
            >
        </div>
    </div>

    @if(isset($availability))
        <!-- Stripe Payment Fields -->
        <div>
            <label for="card_name" class="block text-gray-700 font-semibold mb-2">Name on Card</label>
            <input 
                type="text" 
                id="card_name" 
                name="card_name" 
                required 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
            >
        </div>

        <div>
            <label for="card_number" class="block text-gray-700 font-semibold mb-2">Card Number</label>
            <input 
                type="text" 
                id="card_number" 
                name="card_number" 
                required 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
            >
        </div>

        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <label for="expiry_date" class="block text-gray-700 font-semibold mb-2">Expiration Date (MM/YY)</label>
                <input 
                    type="text" 
                    id="expiry_date" 
                    name="expiry_date" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                >
            </div>
            <div>
                <label for="cvv" class="block text-gray-700 font-semibold mb-2">CVV</label>
                <input 
                    type="text" 
                    id="cvv" 
                    name="cvv" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                >
            </div>
        </div>
    @endif

    <button 
        type="submit" 
        class="w-full bg-primary text-white py-3 rounded-md hover:bg-opacity-90 transition-colors font-semibold"
    >
        {{ isset($availability) ? 'Reserve' : 'Check Availability' }}
    </button>
</form>

                </div>
            </div>

            <!-- Sidebar with Additional Property Details -->
            <div class="lg:w-1/3 mt-8 lg:mt-0">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6 border-t-4 border-secondary">
                    <h3 class="text-xl font-bold text-primary mb-4">Property Highlights</h3>
                    <ul class="space-y-3">
                    @if($house->equipementes->isEmpty())
                        <p>No equipment found.</p>
                    @else
                        @foreach($house->equipementes as $equipement)
                            <li class="flex items-center">
                                <i class="fas fa-futbol text-secondary mr-3"></i>
                                <span>{{ $equipement->name }}</span>
                            </li>
                        @endforeach
                    @endif

                        <li class="flex items-center">
                            <i class="fas fa-bath text-secondary mr-3"></i>
                            <span>2 Bathrooms</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-ruler text-secondary mr-3"></i>
                            <span>120 sq m</span>
                        </li>
                    </ul>
                </div>
                
                <!-- World Cup Special Section -->
                <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-accent">
                    <h3 class="text-xl font-bold text-primary mb-4">World Cup Special</h3>
                    <p class="text-gray-600 mb-3">Book during the tournament and get:</p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-ticket-alt text-accent mr-3"></i>
                            <span>Fan Zone discounts</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-bus text-accent mr-3"></i>
                            <span>Stadium shuttle service</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-tv text-accent mr-3"></i>
                            <span>Match viewing parties</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-8">
        <div class="container mx-auto px-4 grid md:grid-cols-3 gap-8">
            <div>
                <h4 class="text-xl font-bold mb-4 text-accent flex items-center">
                    <i class="fas fa-futbol mr-2"></i> TouristStay
                </h4>
                <p class="text-gray-300">Your trusted partner for World Cup accommodation.</p>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-4 text-accent">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-accent transition-colors">Properties</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">About Us</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Match Schedule</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-4 text-accent">Contact Us</h4>
                <p class="text-gray-300">
                    <i class="fas fa-phone mr-2"></i> +1 (555) 123-4567<br>
                    <i class="fas fa-envelope mr-2"></i> support@touriststay.com
                </p>
            </div>
        </div>
        <div class="text-center mt-8 border-t border-gray-700 pt-4">
            <p class="text-gray-300">&copy; 2025 TouristStay. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>