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
                        <a href="#" style="font-family: 'Roboto';"
                        class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">Home
                        </a>
                    </div>
                    <div> 
                        <a href="#gallery" style="font-family: 'Roboto';"
                        class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">Gallery
                        </a>
                    </div>
                    <div> 
                        <a href="#aboutus" style="font-family: 'Roboto';"
                        class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">About Us
                        </a>
                    </div>
                    <div> 
                        <a href="{{ url('/login') }}" style="font-family: 'Roboto';"
                        class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">Login
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
    <div class="h-96 w-full" style="background-color:white;" id="upcomingevents">
        <div class="flex flex-col justify-center items-center">
            <p class="text-3xl font-bold tracking-widest mb-2 text-black mt-5">Upcoming Events</p>
            <div class="border border-2 w-48 ml-18 border-blue-300 mt-1"></div>
        </div>
    </div>
    <div class="h-96 w-full" style="background-color:white;" id="gallery">
        <div class="flex flex-col justify-center items-center">
            <p class="text-3xl font-bold tracking-widest mb-2 text-black mt-5">Gallery</p>
            <div class="border border-2 w-48 ml-18 border-blue-300 mt-1"></div>
        </div>
    </div>
    <div class="h-96 w-full" style="background-color:white;" id="aboutus">
        <div class="flex flex-col justify-center items-center">
            <p class="text-3xl font-bold tracking-widest mb-2 text-black mt-5">About Us</p>
            <div class="border border-2 w-48 ml-18 border-blue-300 mt-1"></div>
        </div>
    </div>
    <div class="w-full" style="background-color:white;" id="footer">
        <div class="container mx-auto px-6 py-6">
            <div class="font-bold tracking-wider text-xs md:text-base text-black  text-center">
                Copyright © 2022 <span>Auca Alumni Management System.</span> All rights reserved.
            </div>
        </div>
    </div>
@endsection

