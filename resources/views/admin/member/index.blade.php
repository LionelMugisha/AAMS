<x-maindashboard>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List of Members
        </h2>
        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap" id="myTable">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email/Telephone</th>
                            <th class="px-4 py-3">Employment</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Created at</th>
                            <th class="px-4 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($member as $person)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        {{ $person->name }}
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $person->email }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $person->telephone }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $person->employment }}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <form action="{{ url('admin/updatemember_status/'.$person->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="{{$person->status == 'active'? 'px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100':'px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100'}}">
                                            {{ $person->status }}
                                        </button>
                                    </form>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $person->created_at }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <button type="submit" class="font-bold py-2 px-4 rounded">
                                        <a href="{{ url('admin/member/view-member/'.$person->id) }}">View</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-maindashboard>