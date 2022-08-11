@extends('layouts.app')

<div class="bg-white font-sans leading-normal tracking-normal mt-12">
    <header>
        <!--Nav-->
        <nav aria-label="menu nav" class="bg-indigo-500 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

            <div class="flex flex-wrap items-center">
                <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                    <a href="#" aria-label="Home">
                        <img src="/images/logo2.png" alt="logo" class="h-20 w-32" />
                    </a>
                </div>
                <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                    <a href="#" aria-label="Home">
                        <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
                    </a>
                </div>

                <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <li class="flex-1 md:flex-none md:mr-3">
                            <div class="relative inline-block">
                                <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, Admin <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                                <div id="myDropdown" class="dropdownlist absolute bg-indigo-600 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                    <div class="flex justify-between items-center">
                                        <a href="#" class="p-2 text-white text-sm no-underline hover:no-underline block">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>

    <main>
        <div class="flex flex-col md:flex-row">
            <nav aria-label="alternative nav">
                <div class="bg-indigo-500 shadow-xl h-20 fixed bottom-0 md:relative md:h-screen z-10 w-full md:w-48 content-center">
                    <div class="md:mt-20 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                        @can('admin')
                        <x-adminsidebar />
                        @elsecan('member')
                        <x-membersidebar />
                        @elsecan('alumni')
                        <x-alumnisidebar />
                        @endcan
                    </div>
                </div>
            </nav>
            <section>
               {{ $slot }}
            </section>
        </div>
    </main>

    <script>
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>

</div>

