<x-maindashboard>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List of Job Opportunities
        </h2>
        <div class="mb-2 flex justify-end items-center">
            <a href="{{ route('admin.opportunities.create') }}">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-light py-2 px-2 rounded-md">
                    Create
                </button>
            </a>
        </div>

        {!! Toastr::message() !!}

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap" id="myTable">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Details</th>
                            <th class="px-4 py-3">Picture</th>
                            <th class="px-4 py-3">Posted By</th>
                            <th class="px-4 py-3">Created At</th>
                            <th colspan="2" class="px-4 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($opportunities as $opportunity)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    {{ $opportunity->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $opportunity->description }}
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-md" src="{{ asset('uploads/post/'.$opportunity->picture) }}" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $opportunity->user->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $opportunity->created_at }}
                                </td>
                                <td class="px-4 py-3 text-sm flex">
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white font-bold py-2 px-4 rounded">
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

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</x-maindashboard>