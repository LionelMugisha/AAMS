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
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn font-bold text-xs md:text-xl md:mr-10 mr-4 text-gray-100">Register As</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="{{ url('membersignup') }}">Member</a>
                            <a href="{{ url('alumnisignup') }}">Alumni</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mx-auto">
        <div class="flex justify-center my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url('images/back.jpg')"
                >
                </div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    {!! Toastr::message() !!}
                    <h3 class="pt-4 text-2xl text-center">Create an Alumni Account!</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST" action="{{ route('alumni.registration') }}">
                    @csrf    
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                                Full Name
                            </label>
                            <input
                                class="w-full px-3 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                />
                                @error('name')
                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-1 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                    Email
                                </label>
                                <input
                                    class="w-full px-7 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="email"
                                    name="email"
                                    type="email"
                                    value="{{ old('email') }}"
                                />
                                @error('email')
                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:ml-1">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="telephone">
                                    Phone Number
                                </label>
                                <input
                                    class="w-full px-7 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="telephone"
                                    name="telephone"
                                    type="text"
                                    value="{{ old('telephone') }}"
                                />
                                @error('telephone')
                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-1 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="faculty">
                                    Faculty
                                </label>
                                <input
                                    class="w-full px-7 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="faculty"
                                    name="faculty"
                                    type="text"
                                    value="{{ old('faculty') }}"
                                />
                                @error('faculty')
                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:ml-1">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="department">
                                    Department
                                </label>
                                <input
                                    class="w-full px-7 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="department"
                                    name="department"
                                    type="text"
                                    value="{{ old('department') }}"
                                />
                                @error('department')
                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-1 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="yearofgraduation">
                                    Year of Graduation
                                </label>
                                <input
                                    class="w-full px-7 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="yearofgraduation"
                                    name="yearofgraduation"
                                    type="text"
                                    value="{{ old('yearofgraduation') }}"
                                />
                                @error('yearofgraduation')
                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4 md:mr-1 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="SchoolId">
                                    School ID
                                </label>
                                <input
                                    class="w-full px-7 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="school_id"
                                    name="school_id"
                                    type="text"
                                    value="{{ old('school_id') }}"
                                />
                                @error('school_id')
                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
                                Address 
                            </label>
                            <input
                                class="w-full px-3 py-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="address"
                                name="address"
                                type="text"
                                value="{{ old('address') }}"
                            >
                            @error('address')
                                <p class="text-red-500 py-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-1 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="employment_status">
                                        Employment_Status 
                                    </label>
                                    <select name="employment_status" value="{{ old('employment_status') }}" class="w-full px-3 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                        <option selected>Choose your employment status:</option>
                                        <option value="employed">Employed</option>
                                        <option value="unemployed">Unemployed</option>
                                    </select>
                                    @error('employment')
                                        <p class="text-red-500 py-1">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="mb-4 md:mr-1 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="employment">
                                    Company Name 
                                </label>
                                <input
                                    class="w-full px-3 py-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="employment"
                                    name="employment"
                                    type="text"
                                    value="{{ old('employment') }}"
                                >
                                <span class="text-xs mb-3 font-bold">If employed, which company. If not, type no.</span>
                                @error('employment')
                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-1 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                    Password
                                </label>
                                <input
                                    class="w-full px-7 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password"
                                    type="password"
                                    name="password"
                                    placeholder="******************"
                                    value="{{ old('password') }}"
                                />
                                @error('password')
                                    <p class="text-red-500 py-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:ml-1">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="password_confirmation">
                                    Confirm Password
                                </label>
                                <input
                                    class="w-full px-7 py-3 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    placeholder="******************"
                                />
                            </div>
                        </div>
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-indigo-500 rounded-full hover:bg-indigo-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Create Account
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-indigo-500 align-baseline hover:text-indigo-800"
                                href="{{ url('login') }}"
                            >
                                Already have an account? Login!
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
@endsection

