<x-layout>
    <div class="max-w-lg mx-auto p-6 bg-white rounded shadow mt-6">
        <h1 class="text-2xl font-bold mb-4">Edit Artist</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('artists.update', $artist) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-4">
                <label for="code" class="block font-semibold mb-1">Artist Code</label>
                <input type="text" name="code" id="code" value="{{ old('code', $artist->code) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="name" class="block font-semibold mb-1">Artist Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $artist->name) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">
                    Cancel
                </a>

                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 cursor-pointer">
                    Update Artist
                </button>
            </div>
        </form>
    </div>
</x-layout>
