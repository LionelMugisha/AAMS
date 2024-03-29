<x-maindashboard>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Profile
        </h2>

        {!! Toastr::message() !!}

        <!-- New Form -->

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form action="{{ route('alumni.update-profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Name</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="name" value="{{ $user->name }}" />
                    @error('name')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="email" name="email" value="{{ $user->email }}" />
                    @error('email')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Telephone</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="telephone" value="{{ $user->telephone }}" />
                    @error('telephone')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Company Name</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="employment" value="{{ $user->employment }}"  />
                    @error('employment')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Employment_status</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="employment_status" value="{{ $user->employment_status }}" />
                    @error('employment_status')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Faculty</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="faculty" value="{{ $user->faculty }}" />
                    @error('faculty')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Department</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="department" value="{{ $user->department }}" />
                    @error('department')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Year of Graduation</span>
                    <input class="hidden block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="yearofgraduation" value="{{ $user->yearofgraduation }}"  />
                    @error('yearofgraduation')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">School ID</span>
                    <input class="hidden block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="school_id"  value="{{ $user->school_id }}" />
                    @error('school_id')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Address</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="address" value="{{ $user->address }}" />
                    @error('address')
                        <p class="text-red-600 dark:text-red-400 py-1">{{ $message }}</p>
                    @enderror
                </label>
                <button
                    type="submit"
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Update Profile
                </button>
            </form>
        </div>
    </div>

</x-maindashboard>