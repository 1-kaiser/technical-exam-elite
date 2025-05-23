<x-layout>
    <h1 class="text-2xl font-bold mb-4">Albums of {{ $artist->name }}</h1>

    @if ($albums->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($albums as $album)
                <div class="border p-4 rounded shadow">
                    @if ($album->image)
                        <img src="{{ asset('storage/' . $album->image) }}" alt="Cover"
                            class="mt-2 w-full h-48 object-cover rounded" />
                    @endif
                    <div class="mt-4">
                        <h3 class="font-semibold">{{ $album->name }}</h3>
                        <p>Year: {{ $album->year }}</p>
                        <p>Sales: {{ number_format($album->sales) }}</p>
                    </div>


                    <div class="flex flex-wrap gap-2 mt-4">
                        <a href="{{ route('albums.edit', $album) }}"
                            class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</a>
                        <form action="{{ route('albums.destroy', $album) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this artist?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 cursor-pointer">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $albums->links() }}
        </div>
    @else
        <p>No albums found for this artist.</p>
    @endif

    <a href="{{ route('dashboard') }}"
        class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Back to Dashboard</a>
</x-layout>
