<x-maindashboard>

<div id="main" class="main-content flex-1 bg-white mt-12 md:mt-2">
    <div class="flex flex-col mt-12">
        <div class="w-full p-6">
            <div class="flex justify-start items-center">
                <h1 class="font-bold text-5xl tracking-widest ml-20">Create Event</h1>
            </div>
        </div>
        <div class="flex justify-start items-center ml-24 mt-1">
            <a href="{{ route('admin.event') }}">
                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Return Back</button>
            </a>    
        </div>
        <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-2 px-12 lg:px-24 shadow-8xl mb-24">
            <form action="{{ route('admin.event.save') }}" method="POST" enctype="multipart/form-data">
                @if(session('status'))
                    <h1 class="text-green-800">{{ session('status') }}</h1>
                @endif

                @csrf
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                                Detail
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-2 px-4 mb-3" 
                            name="details" type="text">
                        </div>
                    </div>    
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
                                Date of Event
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-2 px-4 mb-3" 
                            name="dateHappening" type="date">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                                Time of Event
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-2 px-4 mb-3" 
                            name="timeHappening" type="time">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                                Upload the picture
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-3 mb-3" 
                            name="picture" type="file">
                        </div>
                    </div>    
                    <div class="-mx-3 md:flex mt-2">
                        <div class="md:w-full px-3">
                            <button type="submit" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                                Save Event
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</x-maindashboard>