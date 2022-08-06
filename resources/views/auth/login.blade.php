@extends('layouts.app')
@section('title', 'AAMS')
@section('content')
    <div class="h-full w-full bg-gradient-to-r from-indigo-500 to-indigo-500">      
        <nav class="border-gray-200 px-2">
            <div class="container flex justify-evenly justify-between items-center mx-auto">
                <a href="/" class="flex items-center mr-20">
                    <img src="images/logo2.png" alt="" class="w-64 h-36" />
                </a>
                <div class="flex justify-evenly items-center">
                    <div> 
                        <a href="/" style="font-family: 'Roboto';"
                        class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">Home
                        </a>
                    </div>
                    <div> 
                        <a href="{{ url('login') }}" style="font-family: 'Roboto';"
                        class="font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">Login
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container relative flex flex-col justify-center min-h-screen overflow-hidden -mt-16">
        <div
            class="w-full p-6 m-auto bg-white border-t border-indigo-600 rounded shadow-lg shadow-indigo-800/50 lg:max-w-2xl">
            <h1 class="text-3xl font-semibold text-center text-indigo-700">Login</h1>
            <h1 class="text-lg font-light text-center text-indigo-700">
                Login to your dashboard to access your information
            </h1>

            <form class="mt-6">
                <div>
                    <label for="email" class="block text-sm text-gray-800">Email</label>
                    <input type="email"
                        class="block w-full px-4 py-2 mt-2 text-indigo-700 bg-white border rounded-md focus:border-indigo-400 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <div class="mt-4">
                    <div>
                        <label for="password" class="block text-sm text-gray-800">Password</label>
                        <input type="password"
                            class="block w-full px-4 py-2 mt-2 text-indigo-700 bg-white border rounded-md focus:border-indigo-400 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    </div>
                    <div class="mt-6">
                        <button
                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">
                            Login
                        </button>
                    </div>
            </form>
            <p class="mt-8 text-xs font-light text-center text-gray-700"> Don't have an account? <a href="#"
                    class="font-medium text-indigo-600 hover:underline">Sign up</a></p>
        </div>
    </div>
@endsection

