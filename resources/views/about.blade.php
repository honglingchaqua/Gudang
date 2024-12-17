@extends('layouts.app')  

@section('content')  
<div class="max-w-2xl mx-auto">  
    <h1 class="text-4xl font-bold mb-6 text-center">About Us</h1>  
    
    <div class="bg-white p-8 rounded-lg shadow-md">  
        <p class="text-gray-700 mb-4">  
            We are a passionate team dedicated to creating amazing web applications.  
        </p>  
        
        <div class="grid md:grid-cols-2 gap-4">  
            <div>  
                <h2 class="text-2xl font-semibold mb-3">Our Mission</h2>  
                <p class="text-gray-600">  
                    To deliver high-quality, innovative solutions that solve real-world problems.  
                </p>  
            </div>  
            <div>  
                <h2 class="text-2xl font-semibold mb-3">Our Vision</h2>  
                <p class="text-gray-600">  
                    To be a leading technology partner that empowers businesses.  
                </p>  
            </div>  
        </div>  
    </div>  
</div>  
@endsection  