{{-- resources/views/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Real Estate Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  </head>
<body class="bg-gray-100 min-h-screen">
  <div class="container mx-auto px-4 py-8">
    <header class="mb-8">
      <h1 class="text-3xl font-bold text-gray-800">Real Estate Dashboard</h1>
      <p class="text-gray-600">Overview of your property portfolio</p>
    </header>

    <!-- Stats Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
      <!-- Stat Card 1: Total Properties -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-14 0l2 2m0 0l7 7 7-7m-14 0l2-2m0 0l7-7 7 7m-14 0l2 2"></path>
            </svg>
          </div>
          <div class="ml-5">
            <p class="text-gray-500">Total Properties</p>
            <h3 class="text-3xl font-semibold text-gray-800">{{ $housesCount }}</h3>
          </div>
        </div>
      </div>

      <!-- Stat Card 2: Average Price -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-green-100 text-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <div class="ml-5">
            <p class="text-gray-500">Average Price</p>
          </div>
        </div>
      </div>

      <!-- Empty Stat Card to maintain layout -->
      <div class="bg-white rounded-lg shadow p-6 opacity-0"></div>
    </div>

    <!-- Houses List Section -->
    <div class="bg-white rounded-lg shadow">
      <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
        <h2 class="text-lg font-semibold text-gray-800">Property Listings</h2>
        <a href="{{ route('houses.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Add New Property</a>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @forelse($houses as $house)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-md flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-14 0l2 2m0 0l7 7 7-7m-14 0l2-2m0 0l7-7 7 7m-14 0l2 2"></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">{{ $house->name }}</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-900">{{ Str::limit($house->description, 100) }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${{ number_format($house->price, 0) }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <form action="" method="POST" class="inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this property?')">Delete</button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                No properties found
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      
      <!-- Pagination -->
      <div class="px-6 py-4 border-t border-gray-200">
        <div class="flex flex-col sm:flex-row items-center justify-between">
          <div class="text-sm text-gray-700 mb-4 sm:mb-0">
            Showing <span class="font-medium">{{ $houses->firstItem() ?? 0 }}</span> to <span class="font-medium">{{ $houses->lastItem() ?? 0 }}</span> of <span class="font-medium">{{ $housesCount }}</span> properties
          </div>
          {{ $houses->links() }}
        </div>
      </div>
    </div>
  </div>
</body>
</html>