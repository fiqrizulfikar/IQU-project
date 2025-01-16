<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
    <body>
    <section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Our Team</h1>
        <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias.
        </p>

        <!-- Category Buttons -->
        <div class="flex items-center justify-center space-x-4 mb-8">
            <button class="px-6 py-3 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-400 rounded-xl transition-transform transform hover:scale-105">Design</button>
            <button class="px-6 py-3 text-sm font-medium text-blue-600 bg-white border border-blue-600 rounded-xl transition-transform transform hover:scale-105">Development</button>
            <button class="px-6 py-3 text-sm font-medium text-blue-600 bg-white border border-blue-600 rounded-xl transition-transform transform hover:scale-105">Marketing</button>
        </div>

        <!-- Team Members Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">
            <div class="team-card relative flex flex-col items-center border rounded-xl p-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                <img class="object-cover w-full rounded-xl aspect-square" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&auto=format&fit=crop&w=880&q=80" alt="">
                <div class="team-info mt-4 text-center">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Arthur Melo</h2>
                    <p class="text-gray-500 dark:text-gray-300">Design Director</p>
                </div>
                <!-- Social Icons -->
                <div class="social-icons flex justify-center mt-4 space-x-4">
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22C6.47715 22 2 17.5228 2 12Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 2C7.13295 2 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Repeat similar team cards for other members -->
            <div class="team-card relative flex flex-col items-center border rounded-xl p-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                <img class="object-cover w-full rounded-xl aspect-square" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixid=rb-1.2.1&auto=format&fit=crop&w=764&q=80" alt="">
                <div class="team-info mt-4 text-center">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Pamela Anderson</h2>
                    <p class="text-gray-500 dark:text-gray-300">Lead Developer</p>
                </div>
                <!-- Social Icons -->
                <div class="social-icons flex justify-center mt-4 space-x-4">
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22C6.47715 22 2 17.5228 2 12Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22C6.47715 22 2 17.5228 2 12Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 2C7.13295 2 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>