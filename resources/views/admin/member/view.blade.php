<x-maindashboard>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            View in Details Member Information
        </h2>
        <div class="mb-2 flex justify-end items-center">
            <a href="{{ route('admin.member') }}">
                <span class="">Return</span>
            </a>
        </div>

        {!! Toastr::message() !!}

        <!-- New Form -->

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $member->name }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $member->email }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Telephone</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $member->telephone }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Employment</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="text" value="{{ $member->employment }}" />
            </label>
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Status</span>
                <form action="{{ url('admin/updatemember_status/'.$member->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="{{$member->status == 'active'? 'px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100':'px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100'}}">
                        {{ $member->status }}
                    </button>
                </form>
            </label>
            <form action="{{ url('admin/member/delete-member/'.$member->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                    Delete
                </button>
            </form>
        </div>
    </div>

</x-maindashboard>