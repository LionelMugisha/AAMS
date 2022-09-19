<x-maindashboard>

  @can('admin')
    <div class="container px-6 mx-auto grid">
      <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Dashboard
      </h2>
      <!-- Cards -->
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div class="flex items-center p-3 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Total Active Users
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $active_users }}
            </p>
          </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-3 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Total Pending Users
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $pending_users }}
            </p>
          </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-3 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Total Job Opportunities
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              {{ $total_posts }}
            </p>
          </div>
        </div>
      </div>
    </div>
  @elsecan('member')
    <div class="container px-6 mx-auto grid">
      <h2 class="my-6 text-2xl text-center font-semibold text-gray-700 dark:text-gray-200">
        Events
      </h2>
      <!-- Cards -->
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        @foreach($events as $event)
          <div class="max-w-xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="rounded-t-xl w-full h-16" src="{{ asset('uploads/events/'.$event->picture) }}" alt="">
              </a>
              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->name }}</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->details }}</p>
                  <div class="mt-4">
                    <div class="text-sm">
                      <span>Date: {{ $event->dateHappening }}</span>
                    </div>
                    <div class="text-sm">
                      <span>Starting Hour: {{ $event->timeHappening }}</span>
                    </div>
                    
                  </div>
                  
              </div>
          </div>
        @endforeach
      </div>
    </div>
  @elsecan('alumni')
    <div class="container px-6 mx-auto grid">
      <h2 class="my-6 text-2xl text-center font-semibold text-gray-700 dark:text-gray-200">
        Events
      </h2>
      <!-- Cards -->
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        @foreach($events as $event)
          <div class="max-w-xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="rounded-t-xl w-full h-16" src="{{ asset('uploads/events/'.$event->picture) }}" alt="">
              </a>
              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->name }}</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->details }}</p>
                  <div class="mt-4">
                    <div class="text-sm">
                      <span>Date: {{ $event->dateHappening }}</span>
                    </div>
                    <div class="text-sm">
                      <span>Starting Hour: {{ $event->timeHappening }}</span>
                    </div>
                    
                  </div>
                  
              </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="container px-6 mx-auto grid">
      <h2 class="my-6 text-2xl text-center font-semibold text-gray-700 dark:text-gray-200">
        Job Opportunities
      </h2>
      <!-- Cards -->
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        @foreach($jobs as $job)
          <div class="max-w-xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div>
                  <!-- <img class="rounded-t-xl w-full h-16" src="" alt=""> -->
                  <img class="rounded-t-xl w-full h-16" src="{{ asset('uploads/post/'.$job->picture) }}" alt="Flower and sky" />
              </div>
              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $job->name }}</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $job->description }}</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Read more
                      <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>
        @endforeach
      </div>
    </div>
  @endcan

</x-maindashboard>