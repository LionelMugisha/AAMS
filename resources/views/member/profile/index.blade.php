<x-maindashboard>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Profile
        </h2>

        {!! Toastr::message() !!}

        <!-- New Form -->

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Name</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="name"  />
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="email" name="email"  />
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Telephone</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="telephone"  />
                </label>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Company Name</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    type="text" name="employment"   />
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