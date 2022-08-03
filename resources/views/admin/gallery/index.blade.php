@extends('admin.layouts.app')

@section('contents')

<div id="main" class="main-content flex-1 bg-white mt-12 md:mt-2">
    <div class="flex flex-col mt-12">
        <div class="w-full p-6">
            <div class="flex justify-start items-center">
                <h1 class="font-bold text-5xl tracking-widest ml-20">Gallery</h1>
            </div>
        </div>
        <div class="flex justify-start items-center ml-24 mt-5">
            <a href="{{ route('admin.gallery.create') }}">
                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create</button>
            </a>    
        </div>
        <div class="overflow-x-auto w-full relative shadow-md sm:rounded-xl ml-24 mt-5">
            <table class="w-full text-sm text-left text-white" id="myTable">
                <thead class="text-xs text-white font-bold uppercase bg-gray-700">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Picture
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800">
                    @foreach($gallery as $item)
                        <tr class="border-b ">
                            <th scope="row" class="py-4 px-6 font-medium text-white font-semibold whitespace-nowrap dark:text-white">
                               {{ $item->id }}
                            </th>
                            <td class="py-4 px-6">
                                <img src="{{ asset('uploads/gallery/'.$item->picture) }}" class="w-12 h-12" alt="image" />
                            </td>
                            <td class="flex py-4 px-12 text-right">
                                <form action="{{ url('admin/gallery/delete-gallery/'.$item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
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
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

@endsection