<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HouseRent - Owner Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .house-form {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
        }
        .house-card {
            transition: box-shadow 0.3s ease;
        }
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        /* Hide form content when collapsed */
        .house-form * {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .house-form.active * {
            opacity: 1;
        }
        /* Modal background */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 100;
            justify-content: center;
            align-items: center;
        }
        /* Modal content */
        .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 0.75rem;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            transform: translateY(-20px);
            opacity: 0;
            transition: all 0.3s ease-out;
        }
        /* Show modal with animation */
        .modal-overlay.active {
            display: flex;
        }
        .modal-overlay.active .modal-content {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-home text-blue-600 text-3xl mr-2" aria-hidden="true"></i>
                <span class="text-2xl font-bold">
                    <span class="text-blue-600">House</span><span class="text-gray-800">Rent</span>
                </span>
            </div>
            <div class="hidden md:flex space-x-6 items-center">
                <a href="#" class="text-blue-600 font-medium border-b-2 border-blue-600 pb-1">My Properties</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300 hover:border-b-2 hover:border-blue-600 pb-1">Tenants</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300 hover:border-b-2 hover:border-blue-600 pb-1">Analytics</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300 hover:border-b-2 hover:border-blue-600 pb-1">Support</a>
                <div class="flex items-center ml-4">
                    <div class="relative">
                        <img src="https://source.unsplash.com/100x100/?person" alt="Profile" class="w-10 h-10 rounded-full border-2 border-blue-600 cursor-pointer">
                    </div>
                </div>
            </div>
            <button id="mobileMenuButton" class="md:hidden text-gray-600 hover:text-blue-600 focus:outline-none" aria-label="Toggle mobile menu">
                <i class="fas fa-bars text-2xl" aria-hidden="true"></i>
            </button>
        </nav>
        <!-- Mobile menu -->
        <div id="mobileMenu" class="mobile-menu md:hidden bg-white border-t border-gray-100">
            <div class="container mx-auto px-6 py-2">
                <a href="#" class="block py-2 text-blue-600 font-medium">My Properties</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition-colors">Tenants</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition-colors">Analytics</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition-colors">Support</a>
                <div class="flex items-center py-2">
                    <img src="https://source.unsplash.com/100x100/?person" alt="Profile" class="w-8 h-8 rounded-full">
                    <span class="ml-2 text-gray-600">My Account</span>
                </div>
            </div>
        </div>
    </header>

    <!-- house Management Section -->
    <section class="container mx-auto px-6 py-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 md:mb-0">My Properties</h2>
            <button id="addhouseBtn" onclick="toggleForm()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors duration-300 flex items-center focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                <i class="fas fa-plus mr-2" aria-hidden="true"></i> Add house
            </button>
        </div>

        <!-- Add house Form -->
        <div id="houseForm" class="house-form bg-white p-6 rounded-xl shadow-lg mb-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Add New house</h3>
            <form action="{{route('houses.create')}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @csrf
    <div>
        <label for="title" class="block text-gray-700 mb-2 font-medium">House Title</label>
        <input type="text" id="title" name="title" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Enter house title">
    </div>
    <div>
        <label for="id_categorie" class="block text-gray-700 mb-2 font-medium">House Category</label>
        <select id="id_categorie" name="id_categorie" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            <option value="" disabled selected>Select house category</option>
            <option value="1">Apartment</option>
            <option value="2">House</option>
            <option value="3">Villa</option>
            <option value="4">Commercial</option>
        </select>
    </div>
    <div>
        <label for="price" class="block text-gray-700 mb-2 font-medium">Price/Month ($)</label>
        <input type="number" id="price" name="price" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Enter monthly rent">
    </div>
    <div>
        <label for="image" class="block text-gray-700 mb-2 font-medium">House Image</label>
        <input type="file" id="image" name="image" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
    </div>
    <div>
        <label for="start_contract" class="block text-gray-700 mb-2 font-medium">Contract Start Date</label>
        <input type="date" id="start_contract" name="start_contract" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
    </div>
    <div>
        <label for="end_contract" class="block text-gray-700 mb-2 font-medium">Contract End Date</label>
        <input type="date" id="end_contract" name="end_contract" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
    </div>
    <div class="md:col-span-2">
        <label for="description" class="block text-gray-700 mb-2 font-medium">Description</label>
        <textarea id="description" name="description" class="w-full p-2 border rounded-lg h-32 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Describe your house..."></textarea>
    </div>
    <div class="md:col-span-2">
        <label class="block text-gray-700 mb-2 font-medium">Equipment</label>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($equipement as $equipement)
            <div class="flex items-center">
                <input type="checkbox" id="wifi" name="equipements[]" value="1" class="mr-2">
                <label for="wifi">{{$equipement->name}}</label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="md:col-span-2 flex justify-end space-x-4">
        <button type="button" onclick="toggleForm()" class="bg-gray-200 text-gray-800 px-6 py-2 rounded-lg hover:bg-gray-300 transition-colors">Cancel</button>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Submit House</button>
    </div>
</form>
        </div>

        <!-- Properties Counter -->
        <div class="flex flex-wrap items-center mb-6">
            <span class="bg-blue-100 text-blue-800 rounded-full px-3 py-1 text-sm font-medium mr-2">Total: 2 Properties</span>
            <span class="bg-green-100 text-green-800 rounded-full px-3 py-1 text-sm font-medium mr-2">Rented: 1</span>
            <span class="bg-yellow-100 text-yellow-800 rounded-full px-3 py-1 text-sm font-medium">Available: 1</span>
        </div>

        <!-- Fixed Properties Grid - No Hover Effects -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($houses as $house)
            <!-- Fixed house Card -->
            <div class="house-card bg-white rounded-xl shadow-lg overflow-hidden relative">
                <div class="p-4">
                    <h3 class="font-bold text-xl mb-2 text-gray-800">{{ $house->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ $house->description }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-bold">${{ $house->price }}/month</span>
                        <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">Rented</span>
                    </div>
                </div>
                
                <!-- Control buttons always visible -->
                <div class="p-4 bg-gray-100 border-t flex justify-between items-center">
                    <div class="flex space-x-3">
                        <button onclick="openEditModal({{ $house->id }}, '{{ $house->title }}', '{{ $house->description }}')" class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-edit mr-1"></i> Edit
                        </button>
                        <button class="text-red-600 hover:text-red-800">
                            <i class="fas fa-trash mr-1"></i> Delete
                        </button>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium">
                        View Details
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Modal for Edit Form -->
    <div id="editModal" class="modal-overlay">
        <div class="modal-content">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-gray-800">Edit Property</h3>
                <button onclick="closeEditModal()" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form id="edit-form" action="house/edit" method="POST">
                @csrf
                <input type="hidden" id="edit-house-id" name="id">
                <div class="mb-4">
                    <label for="edit-title" class="block text-gray-700 mb-2 font-medium">Property Title</label>
                    <input type="text" id="edit-title" name="title" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                </div>
                <div class="mb-4">
                    <label for="edit-description" class="block text-gray-700 mb-2 font-medium">Description</label>
                    <textarea id="edit-description" name="description" class="w-full p-2 border rounded-lg h-32 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"></textarea>
                </div>
                <div class="mb-4">
                    <label for="edit-price" class="block text-gray-700 mb-2 font-medium">Price/Month ($)</label>
                    <input type="number" id="edit-price" name="price" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeEditModal()" class="bg-gray-200 text-gray-800 px-6 py-2 rounded-lg hover:bg-gray-300 transition-colors">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Fixed Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center">
                        <i class="fas fa-home text-blue-400 text-2xl mr-2" aria-hidden="true"></i>
                        <span class="text-xl font-bold">
                            <span class="text-blue-400">House</span><span class="text-white">Rent</span>
                        </span>
                    </div>
                    <p class="mt-4 text-gray-400 max-w-md">Simplifying house management for landlords and real estate investors.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-lg mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">My Properties</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Tenants</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Analytics</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-lg mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">FAQs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400">© 2025 HouseRent. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
function toggleForm() {
    const houseForm = document.getElementById('houseForm');
    houseForm.classList.toggle('active');
    
    // Adjust max-height for smooth transition
    if (houseForm.style.maxHeight) {
        houseForm.style.maxHeight = null;
    } else {
        houseForm.style.maxHeight = houseForm.scrollHeight + "px";
    }
}

    document.addEventListener("DOMContentLoaded", function () {
        lucide.createIcons();
    });
</script>


  
</body>
</html>