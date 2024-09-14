@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 bg-black">

    <div class="hero bg-cover bg-center h-[700px] flex flex-col items-center justify-center text-white" style="background-image: url('/images/hyperion-xp-1-3.jpeg');">
        <h1 class="text-6xl font-bold mb-6">Best Innovate Car</h1>
        <div class="flex space-x-6">
            <a href="#about" class="bg-blue-500 px-8 py-3 rounded-lg text-white font-semibold hover:bg-blue-600 transition">Learn More</a>
        </div>
    </div>

    <section id="about" class="py-16 flex flex-col items-center justify-center">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-6">About Our Company</h2>
            <p class="max-w-4xl mx-auto text-center text-lg text-gray-600 mb-8">
                "Our company is at the forefront of innovation in both electric and hydrogen vehicle technologies, paving the way for the future of sustainable transportation. We are dedicated to reducing carbon emissions and promoting clean energy by developing state-of-the-art electric vehicles (EVs) known for their efficiency, zero emissions, and lower operating costs."
            </p>
        </div>
        <div class="text-center mb-12 flex items-center justify-center w-full">
            <h2 class="text-4xl font-bold mb-2 text-center">Our Innovative Car</h2>
        </div>
        <div class="flex items-center justify-center w-full mb-12">
            <img src="/images/innovcar.png" class="w-full max-w-3xl rounded-lg shadow-md" alt="Innovative Car">
        </div>
        <div class="text-center mb-12 flex items-center justify-center w-full">
            <h2 class="text-4xl font-bold mb-2 text-center">Technology Development</h2>
        </div>
        <div class="flex items-center justify-center w-full">
            <img src="/images/tescar.png" class="w-full max-w-3xl rounded-lg shadow-md" alt="Innovative Car">
        </div>
    </section>
    
    <section class="mb-12">
        <div class="relative w-full flex items-center justify-center">
            <button class="absolute left-0 z-30 p-2 bg-gray-700 text-white rounded-full hover:bg-gray-800 focus:outline-none">
                &lt;
            </button>
    
            <div class="flex overflow-hidden space-x-6">
                <div class="w-64 bg-gray-800 text-white p-4 rounded-lg">
                    <img src="images/manufacture.jpg" alt="Product Image" class="mb-4 rounded-lg">
                    <h3 class="text-lg font-bold mb-2">Product Quality & Manufacture</h3>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="flex space-x-4">
                        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg">Buy Car</button>
                        <button class="px-4 py-2 bg-transparent border-2 border-white hover:bg-white hover:text-black rounded-lg">Learn More</button>
                    </div>
                </div>
    
                <div class="w-64 bg-gray-700 text-white p-4 rounded-lg">
                    <img src="images/manufacture.jpg" alt="Product Image" class="mb-4 rounded-lg">
                    <h3 class="text-lg font-bold mb-2">Product Quality & Manufacture</h3>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="flex space-x-4">
                        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg">Buy Car</button>
                        <button class="px-4 py-2 bg-transparent border-2 border-white hover:bg-white hover:text-black rounded-lg">Learn More</button>
                    </div>
                </div>
    
                <div class="w-64 bg-gray-800 text-white p-4 rounded-lg">
                    <img src="images/manufacture.jpg" alt="Product Image" class="mb-4 rounded-lg">
                    <h3 class="text-lg font-bold mb-2">Product Quality & Manufacture</h3>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="flex space-x-4">
                        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg">Buy Car</button>
                        <button class="px-4 py-2 bg-transparent border-2 border-white hover:bg-white hover:text-black rounded-lg">Learn More</button>
                    </div>
                </div>
            </div>
    
            <button class="absolute right-0 z-30 p-2 bg-gray-700 text-white rounded-full hover:bg-gray-800 focus:outline-none">
                &gt;
            </button>
        </div>
    
    </section>

    <section id="events" class="py-16 bg-gray-500 px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Events</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 shadow-lg rounded-md hover:shadow-xl transition">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Electric Vehicle Workshop</h3>
                <p class="text-gray-800 mb-4">A comprehensive workshop focusing on the latest electric vehicle technologies.</p>
                <a href="#" class="text-blue-500 hover:underline">Read More</a>
            </div>
            <div class="bg-white p-6 shadow-lg rounded-md hover:shadow-xl transition">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Hydrogen Fuel Cell Technology</h3>
                <p class="text-gray-800 mb-4">Learn about the future of hydrogen fuel cell vehicles and their role in sustainable transportation.</p>
                <a href="#" class="text-blue-500 hover:underline">Read More</a>
            </div>
            <div class="bg-white p-6 shadow-lg rounded-md hover:shadow-xl transition">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Autonomous Driving Seminar</h3>
                <p class="text-gray-800 mb-4">Discover the innovations driving the autonomous vehicle revolution.</p>
                <a href="#" class="text-blue-500 hover:underline">Read More</a>
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 bg-gray-900 text-white">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold">Discover how we are</h2>
            <h2 class="text-4xl font-bold text-blue-400">Changing Automotive Innovation</h2>
        </div>
        <form class="max-w-2xl mx-auto space-y-6">
            <div class="relative">
                <input type="email" class="w-full p-4 bg-gray-700 border border-gray-600 rounded-lg placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Example@gmail.com">
                <button type="submit" class="absolute right-2 top-2 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Submit</button>
            </div>
        </form>
    </section>
    
    <footer class="py-8 bg-gray-800 text-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold">Augusta.Co</h2>
                <p class="text-xl">Changing The World</p>
                <p class="text-xl">Automotive Company</p>
                <a href="mailto:AugistCo@gmail.com" class="text-blue-400 hover:underline">AugistCo@gmail.com</a>
            </div>
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#"><img src="images/facebook.png" alt="Facebook" class="h-8"></a>
                <a href="#"><img src="images/twitter.png" alt="Twitter" class="h-8"></a>
                <a href="#"><img src="images/instagram.png" alt="Instagram" class="h-8"></a>
                <a href="#"><img src="images/youtube.png" alt="YouTube" class="h-8"></a>
            </div>
            <div class="grid grid-cols-3 gap-6">
                <div>
                    <h3 class="font-bold">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Car</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Latest Model</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Technology</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold">FAQ</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Pricing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Innovation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Payment</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Warranty</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Customer Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Sponsorship</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-left">Delivery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
</div>
@endsection
