<x-app-layout>
    <x-slot name="slot">
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <span class="text-2xl font-extrabold mr-5">Galery Lot Lelang</span>
            </div>
        </div>
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-5 md:mt-0 md:col-span-2 flex">
                    <div class="shadow-md bg-white py-5 px-4 pr-10 border">
                        <ul>
                            @foreach ($categories as $categorie)
                                <li>
                                    <label for="{{ $categorie->slug }}">
                                        <x-jet-checkbox id="{{ $categorie->slug }}" name="categories" />
                                        <span class="capitalize">{{ $categorie->name }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        {{ __("HERE IS CARD") }}
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
