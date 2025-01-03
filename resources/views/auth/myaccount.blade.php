<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
 
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar -->
            <aside class="bg-white shadow-md rounded-lg p-6 w-full lg:w-1/4">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Dashboard</h2>
                <ul>
                    <li>
                        <a href="#profile" class="block text-gray-700 py-2 hover:text-blue-600">Profile</a>
                    </li>
                    <li>
                        <a href="#orders" class="block text-gray-700 py-2 hover:text-blue-600">Order History</a>
                    </li>
                    <li>
                        <a href="#addresses" class="block text-gray-700 py-2 hover:text-blue-600">Saved Addresses</a>
                    </li>
                    <li>
                        <a href="#settings" class="block text-gray-700 py-2 hover:text-blue-600">Account Settings</a>
                    </li>
                </ul>
            </aside>

            <!-- Content Area -->
            <section class="bg-white shadow-md rounded-lg p-6 w-full lg:w-3/4">
                <!-- Profile Section -->
                <div id="profile" class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Profile</h3>
                    <div class="flex items-center gap-4">
                        <img src="https://via.placeholder.com/100" alt="Profile Picture" class="w-24 h-24 rounded-full border">
                        <div>
                            <p class="text-gray-800 font-medium">John Doe</p>
                            <p class="text-gray-600">johndoe@example.com</p>
                        </div>
                    </div>
                    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Edit Profile</button>
                </div>

                <!-- Order History -->
                <div id="orders" class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Order History</h3>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-4">
                            <div class="flex justify-between items-center">
                                <p class="text-gray-800">Order #12345</p>
                                <p class="text-gray-600">12th Nov 2024</p>
                                <a href="#" class="text-blue-600 hover:underline">View Details</a>
                            </div>
                        </li>
                        <li class="py-4">
                            <div class="flex justify-between items-center">
                                <p class="text-gray-800">Order #67890</p>
                                <p class="text-gray-600">8th Nov 2024</p>
                                <a href="#" class="text-blue-600 hover:underline">View Details</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Saved Addresses -->
                <div id="addresses" class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Saved Addresses</h3>
                    <ul>
                        <li class="mb-4">
                            <p class="text-gray-800 font-medium">Home Address</p>
                            <p class="text-gray-600">123 Main St, City, Country</p>
                        </li>
                        <li class="mb-4">
                            <p class="text-gray-800 font-medium">Office Address</p>
                            <p class="text-gray-600">456 Elm St, City, Country</p>
                        </li>
                    </ul>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add New Address</button>
                </div>

                <!-- Account Settings -->
                <div id="settings">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">Account Settings</h3>
                    <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Logout</button>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
