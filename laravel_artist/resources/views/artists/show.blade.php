<x-layout>
    <div class="max-w-3xl mx-auto p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Artist Details</h1>

        <p><strong>Code:</strong> {{ $artist->code }}</p>
        <p><strong>Name:</strong> {{ $artist->name }}</p>

        <div class="flex justify-between">
            <div class="flex gap-3 items-center mt-4">
                <a href="{{ route('artists.edit', $artist) }}"
                    class=" inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Edit Artist
                </a>
                <form action="{{ route('artists.destroy', $artist) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this artist?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 cursor-pointer">Delete</button>
                </form>
            </div>

            <a href="{{ url()->previous() }}"
                class="mt-4 ml-2 inline-block bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">
                Back
            </a>
        </div>
    </div>
</x-layout>
