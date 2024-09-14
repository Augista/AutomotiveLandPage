<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automotive Show</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-300">

    <nav class="bg-gray-900 text-white py-4 px-8">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">Augist.Co</a>
            <ul class="flex space-x-8">
                <li><a href="#home" class="hover:text-blue-500">Home</a></li>
                <li><a href="#about" class="hover:text-blue-500">About Us</a></li>
                <li><a href="#events" class="hover:text-blue-500">Events</a></li>
                <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="container mx-auto">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Augista's Project. All rights reserved.</p>
            <p>Follow us on <a href="https://github.com/Augista" class="text-gray-500">Github</a> for the latest updates.</p>
        </div>
    </footer>

</body>
</html>
