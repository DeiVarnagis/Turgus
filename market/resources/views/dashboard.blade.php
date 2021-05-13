<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <table class="text-left w-full">
                        <thead class="bg-black flex text-white w-full">
                            <tr class="flex w-full mb-4">
                                <th class="w-2/4 p-4">Name</th>
                                <th class="w-2/4 p-4">Price</th>
                            </tr>
                        </thead>
                        <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
                            @foreach ($data as $item)
                            <tr class="flex w-full mb-4">
                                <td class="w-2/4 p-4">{{$item->name}}</td>
                                <td class="w-2/4 p-4">{{$item->price}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
