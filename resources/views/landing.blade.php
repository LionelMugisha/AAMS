@extends('layouts.app')
@section('title', 'AAMS')
@section('content')
    <div class="md:h-96 h-96 md:w-full" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)">      
        <nav class="border-gray-200 px-2 sm:px-4 py-2.5">
            <div class="container flex flex-wrap md:justify-evenly justify-between items-center mx-auto">
                <a href="/" class="flex items-center">
                    <span class="self-center text-xs md:text-xl lg:mr-16 ml-3 font-semibold whitespace-nowrap dark:text-white">M CLUB & RESORTS</span>
                </a>
                <div class="flex justify-evenly items-center">
                    <div> 
                        <p style="font-family: 'Roboto';"
                        class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">info@m.rw
                        </p>
                    </div>
                    <div> 
                        <p style="font-family: 'Roboto';"
                        class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">+250 789 064 557
                        </p>
                    </div>
                    <div> 
                        <button data-collapse-toggle="navbar-default" type="button" class="md:mr-3 inline-flex items-center p-2 lg:ml-10 text-sm text-gray-200 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-200 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="md:w-6 w-4 md:h-6 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="lg:pt-60 lg:px-52 md:pt-80 pt-20 md:px-20 px-6">
            <p class="lg:text-4xl md:text-2xl text-md font-bold tracking-tighter mb-2 text-white">
                M CLUB & RESORTS
            </p>
            <p class="lg:text-lg md:text-md text-xs mb-8 font-light tracking-widest text-gray-200">
                Dreaming of sunsets and refreshing breezes...
            </p>
            <a href='#booknow'>
                <button class="bg-white md:text-lg text-sm font-bold md:py-4 py-2 px-6 md:px-8 rounded-lg shadow-lg uppercase tracking-widest">
                    Book Now
                </button>
            </a>
        </div>
    </div>
@endsection

