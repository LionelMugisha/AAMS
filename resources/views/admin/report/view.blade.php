<x-maindashboard>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List of all alumni
        </h2>
        <div class="mb-2 flex justify-end items-center">
            <a href="{{ route('export_alumni_pdf') }}">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-light py-2 px-2 rounded-md">
                    Generate PDF
                </button>
            </a>
        </div>

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap" id="myTable">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Name/Email</th>
                            <th class="px-4 py-3">Faculty/Department</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Year of Graduation</th>
                            <th class="px-4 py-3">employment Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($alumni as $grad)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $grad->name }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $grad->email }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $grad->faculty }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $grad->department }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    {{ $grad->status }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $grad->yearofgraduation }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $grad->employment_status }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List of unemployed alumni
        </h2>
        <div class="mb-2 flex justify-end items-center">
            <a href="{{ route('export_unemployed_alumni_pdf') }}">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-light py-2 px-2 rounded-md">
                    Generate PDF
                </button>
            </a>
        </div>

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap" id="myTable">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Name/Email</th>
                            <th class="px-4 py-3">Faculty/Department</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Year of Graduation</th>
                            <th class="px-4 py-3">employment Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($alumnis as $grad)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $grad->name }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $grad->email }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $grad->faculty }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $grad->department }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    {{ $grad->status }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $grad->yearofgraduation }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $grad->employment_status }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List of employed alumni
        </h2>
        <div class="mb-2 flex justify-end items-center">
            <a href="{{ route('export_employed_alumni_pdf') }}">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-light py-2 px-2 rounded-md">
                    Generate PDF
                </button>
            </a>
        </div>

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap" id="myTable">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Name/Email</th>
                            <th class="px-4 py-3">Faculty/Department</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Year of Graduation</th>
                            <th class="px-4 py-3">employment Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($alumn as $grad)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $grad->name }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $grad->email }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $grad->faculty }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $grad->department }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    {{ $grad->status }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $grad->yearofgraduation }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $grad->employment_status }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List of all members
        </h2>
        <div class="mb-2 flex justify-end items-center">
            <a href="{{ route('export_members_pdf') }}">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-light py-2 px-2 rounded-md">
                    Generate PDF
                </button>
            </a>
        </div>

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap" id="myTable">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Telephone</th>
                            <th class="px-4 py-3">Employment</th>
                            <th class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 mb-6">
                        @foreach($member as $person)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        {{ $person->name }}
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $person->email }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $person->telephone }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $person->employment }}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    {{ $person->status }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-maindashboard>