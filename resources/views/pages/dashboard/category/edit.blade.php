<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Category &raquo; Create
        </h2>
    </x-slot>
    <div class="py-12">
        < class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            @if ($errors -> any())
            <div class="mb-5" role="alert">
                <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                    There's something wrong!
                </div>
                <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
                    <p>
                        <ul>
                            @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>                                
                            @endforeach
                        </ul>
                    </p>
                </div>
            </div>
                
            @endif
        </div>
            <div>
                <form class="w-full" action="{{ route('dashboard.category.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-ws font-bold mb-2" for="grid-last-name">
                                Name
                            </label>
                            <input value="{{ old('name') ?? $item->name}}" name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="Category Name">
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3 text-right">
                                <button type="submit" class="shadow-lg bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ">
                                    Update Category
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>