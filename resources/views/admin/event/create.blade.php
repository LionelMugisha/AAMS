<x-maindashboard>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            New Events
        </h2>
        <div class="mb-2 flex justify-end items-center">
            <a href="{{ route('admin.event') }}">
                <span class="">Return</span>
            </a>
        </div>
        <!-- New Form -->

        {!! Toastr::message() !!}

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form action="{{ route('admin.event.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Detail</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="details" value="" />
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Date of Event</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="date" name="dateHappening" value="" />
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Time of Event</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="time" name="timeHappening" value="" />
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Upload the picture</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="file" name="picture" value="" />
                </label>
                <button
                    type="submit"
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Create
                </button>
            </form>
        </div>
    </div>

</x-maindashboard>