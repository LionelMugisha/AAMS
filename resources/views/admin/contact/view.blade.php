<x-maindashboard>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List of inquiries placed
        </h2>

        {!! Toastr::message() !!}

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap" id="myTable">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Message</th>
                            <th class="px-4 py-3">Created At</th>
                            <th class="px-4 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($info as $infos)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    {{ $infos->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $infos->email }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $infos->message}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $infos->created_at }}
                                </td>
                                <td class="px-4 py-3 text-sm flex">
                                    <form action="{{ url('admin/inquiry/delete-inquiry/'.$infos->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-black font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-maindashboard>