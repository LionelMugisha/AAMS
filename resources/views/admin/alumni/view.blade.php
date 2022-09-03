<x-maindashboard>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            View Personal Alumni Information
        </h2>
        <div class="mb-2 flex justify-end items-center">
            <a href="{{ route('admin.alumni') }}">
                <span class="">Return</span>
            </a>
        </div>

        {!! Toastr::message() !!}

        <!-- New Form -->

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->name }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->email }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Telephone</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->telephone }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">School Id</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->school_id }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Faculty</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->faculty }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Department</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->department }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Year of Graduation</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->yearofgraduation }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Employment Status</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->employment_status }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Employment</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->employment }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Address</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $alumni->address }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Status</span>
                <form action="{{ url('admin/updatealumni_status/'.$alumni->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="{{$alumni->status == 'active'? 'px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100':'px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100'}}">
                        {{ $alumni->status }}
                    </button>
                </form>
            </label>
            <form action="{{ url('admin/alumni/delete-alumni/'.$alumni->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                    Delete
                </button>
            </form>
        </div>
    </div>

</x-maindashboard>