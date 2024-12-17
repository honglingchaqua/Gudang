<nav class="bg-white shadow-md py-4">  
    <div class="container mx-auto relative flex justify-between items-center">  
        <div class="text-2xl font-bold text-gray-800">  
            Inventory  
        </div>  
        
        <ul class="absolute left-1/2 transform -translate-x-1/2 flex space-x-4 md:space-x-6">  
            <li><a href="{{ route('home') }}" class="text-sm md:text-base text-gray-600 hover:text-gray-900">Home</a></li>  
            <li><a href="{{ route('about') }}" class="text-sm md:text-base text-gray-600 hover:text-gray-900">About</a></li>  
            <li><a href="#" class="text-sm md:text-base text-gray-600 hover:text-gray-900">Services</a></li>  
            <li><a href="#" class="text-sm md:text-base text-gray-600 hover:text-gray-900">Contact</a></li>  
        </ul>  

        <div>  
            {{-- Login button or other content --}}  
        </div>  
    </div>  
</nav>