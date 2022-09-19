@extends('layouts.app')
@section('title', 'AAMS')
@section('content')
<div class="h-96 w-full bg-gradient-to-r from-indigo-500 to-indigo-500">
    <nav class="border-gray-200 px-2">
        <div class="container flex justify-evenly justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <img src="images/logo2.png" alt="" class="w-64 h-42" />
            </a>
            <div class="flex justify-evenly items-center">
                <div>
                    <a href="#" style="font-family: 'Roboto';" class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">Home
                    </a>
                </div>
                <div>
                    <a href="#gallery" style="font-family: 'Roboto';" class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">Gallery
                    </a>
                </div>
                <div>
                    <a href="#aboutus" style="font-family: 'Roboto';" class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">About Us
                    </a>
                </div>
                <div>
                    <a href="{{ url('/login') }}" style="font-family: 'Roboto';" class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">Login
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="px-80 ml-10 py-36 mb-5">
        <p class="text-3xl font-bold tracking-tighter mb-2 text-white">
            Welcome to Auca Alumni Management System
        </p>
        <div class="border border-2 w-48 ml-48 border-blue-300 mt-4"></div>
    </div>
</div>
<!-- <section class="py-16 bg-gray-50" style="background-color:white;" id="upcomingevents">
    <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <p class="text-3xl font-bold tracking-widest mb-2 text-black mt-5 text-center">Upcoming Events</p>
        <div class="flex flex-wrap items-center -mx-3">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full mt-3">

            </div>            
        </div>
    </div>
</section> -->
<section class="py-16 bg-gray-50" style="background-color:white;" id="gallery">
    <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <p class="text-3xl font-bold tracking-widest mb-2 text-black mt-5 text-center">Gallery</p>
        <div class="flex flex-wrap items-center -mx-3">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full mt-3">
                @foreach($gallery as $item)
                <div class="overflow-hidden rounded-lg shadow-lg cursor-pointer">
                    <img class="object-cover w-full h-64" src="{{ asset('uploads/gallery/'.$item->picture) }}" alt="Flower and sky" />
                </div>
                @endforeach
            </div>            
        </div>
    </div>
</section>
<section class="py-20 bg-gray-50" style="background-color:white;" id="aboutus">
    <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <p class="text-3xl font-bold tracking-widest mb-2 text-black mt-5 text-center">About Us</p>
        <div class="flex justify-between items-center -mx-3">
            <div>
                <p class="tracking-wider">
                    We are having a lot of university students who are graduating from <br> different
                    universities across the country and the number of unemployed <br> graduates is becoming 
                    high every year; and other graduates are getting jobs from different fields of their 
                    studies. <br> We believe in supporting our graduates and facilitates them to find jobs.
                </p>
            </div>
            <div class="border border-2 border-white shadow-lg ml-6 mr-6">
            {!! Toastr::message() !!}
                <div class="flex items-center justify-center">
                    <div class="bg-white px-5 py-2">
                        <h3 class="text-medium font-normal mt-4 text-indigo-700 text-center">Get in Touch!</h3>
                        <h3 class="text-sm font-light mt-2 text-gray-700">
                            Have an inquiry or some feedback for us?
                            &nbsp;
                            Fill out the form below to contact our team.
                        </h3>
                        <form method="POST" action="{{ route('save') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-4">
                                <div>
                                    <label class="block text-sm font-light" for="Name">Name<label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="w-full px-1 py-1 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                            @error('name')
                                                <p class="text-red-500 py-1">{{ $message }}</p>
                                            @enderror
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm font-light" for="email">Email<br><label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="w-full px-1 py-1 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                                @error('email')
                                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                                @enderror
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm font-light">Message<label>
                                        <textarea id="message" value="{{ old('message') }}" rows="4" name="message" class="block p-2.5 w-full text-sm border rounded-md text-black bg-white focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder="Your message..."></textarea>
                                        @error('message')
                                            <p class="text-red-500 py-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                <div class="flex">
                                    <button type="submit" class="w-full px-6 py-2 mt-4 font-semibold text-white bg-blue-300 rounded-lg hover:bg-blue-900">
                                        Get in Touch</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>
<section class="py-20 bg-gray-50 mt-3" style="background-color:white;" id="Footer">
    <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="font-bold tracking-wider text-xs md:text-base text-black  text-center">
            Copyright © 2022 <span>Auca Alumni Management System.</span> All rights reserved.
        </div>
    </div>
</section>

@endsection