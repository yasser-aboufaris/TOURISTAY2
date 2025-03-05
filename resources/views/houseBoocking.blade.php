<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Downtown Apartment - Rental Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">RentLux</div>
            <div class="space-x-6">
                <a href="#" class="hover:text-blue-600 transition-colors">Properties</a>
                <a href="#" class="hover:text-blue-600 transition-colors">About</a>
                <a href="#" class="hover:text-blue-600 transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Property Showcase -->
    <div class="container mx-auto px-4 py-8">

        <!-- Main Content Area -->
        <div class="lg:flex lg:gap-8">
            <!-- Property Details -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-4xl font-bold text-gray-800">Luxury Downtown Apartment</h1>
                        <div class="text-2xl font-semibold text-green-600">$3,500 / month</div>
                    </div>

                    <div class="text-gray-600 mb-6">
                        <p class="mb-4">
                            Experience urban living at its finest in this meticulously designed downtown apartment. 
                            Spanning 1,200 square feet, this two-bedroom marvel offers an unparalleled blend of luxury, 
                            comfort, and convenience. Floor-to-ceiling windows flood the space with natural light, 
                            providing breathtaking city views that transform with every passing hour.
                        </p>
                        <p>
                            Located in the heart of the city's most vibrant neighborhood, you'll be steps away from 
                            world-class dining, boutique shopping, and cultural attractions. The apartment features 
                            a state-of-the-art kitchen with premium stainless steel appliances, spa-inspired bathrooms, 
                            and a private balcony perfect for morning coffee or evening relaxation.
                        </p>
                    </div>

                    <!-- Property Features -->
                    <div class="grid md:grid-cols-3 gap-4 bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-bed text-blue-600 text-2xl"></i>
                            <div>
                                <div class="font-semibold">2 Bedrooms</div>
                                <div class="text-sm text-gray-500">Spacious and bright</div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-bath text-blue-600 text-2xl"></i>
                            <div>
                                <div class="font-semibold">2 Bathrooms</div>
                                <div class="text-sm text-gray-500">Modern fixtures</div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-ruler text-blue-600 text-2xl"></i>
                            <div>
                                <div class="font-semibold">1,200 sq ft</div>
                                <div class="text-sm text-gray-500">Open concept</div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-parking text-blue-600 text-2xl"></i>
                            <div>
                                <div class="font-semibold">Parking</div>
                                <div class="text-sm text-gray-500">Secure underground</div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-wifi text-blue-600 text-2xl"></i>
                            <div>
                                <div class="font-semibold">High-Speed Internet</div>
                                <div class="text-sm text-gray-500">Included</div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-dumbbell text-blue-600 text-2xl"></i>
                            <div>
                                <div class="font-semibold">Fitness Center</div>
                                <div class="text-sm text-gray-500">24/7 access</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Sidebar -->
            <div class="lg:w-1/3">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Check Availability</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Move-in Date</label>
                            <input type="date" 
                                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Move-out Date</label>
                            <input type="date" 
                                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 rounded-lg 
                                       hover:from-blue-700 hover:to-indigo-700 transition-all hover:shadow-lg">
                            Check Availability
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Location Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mt-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Location & Neighborhood</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Neighborhood Highlights</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-utensils text-green-600 mr-3"></i>
                            Top-rated restaurants within walking distance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-theater-masks text-purple-600 mr-3"></i>
                            Cultural venues and entertainment
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-tree text-green-700 mr-3"></i>
                            Proximity to city parks and green spaces
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-subway text-blue-600 mr-3"></i>
                            Excellent public transportation
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="bg-gray-200 h-64 flex items-center justify-center rounded-lg">
                        <span class="text-gray-500">Location Map Placeholder</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-8">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div>
                <h4 class="text-xl font-bold mb-2">TouriStay</h4>
                <p class="text-gray-400">Find your perfect house</p>
            </div>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-400"><i class="fab fa-facebook"></i></a>
                <a href="#" class="hover:text-blue-400"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>