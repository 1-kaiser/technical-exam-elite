<x-layout>
    <div class="max-w-7xl mx-auto p-6">

        <div class="flex justify-between">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-2 rounded cursor-pointer">Logout</button>
            </form>
        </div>

        <form method="GET" class="mt-20 mb-6 flex justify-end">
            <input type="text" name="search" placeholder="Search artist..." value="{{ request('search') }}"
                class="px-4 py-2 border rounded w-full sm:w-1/4">
        </form>

        @if ($topArtist)
            <div class="mb-8 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded">
                <strong>Top Artist:</strong> {{ $topArtist->name }} — {{ $topArtist->albums->sum('sales') }} total
                combined
                sales
            </div>
        @endif

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($artists as $artist)
                <div class="bg-white p-5 rounded-xl shadow-md">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $artist->name }}</h2>
                    <p class="text-gray-600 text-sm mb-2">Code: {{ $artist->code }}</p>

                    <div class="text-sm text-gray-700 mb-2">
                        <strong>Total Albums:</strong> {{ $artist->albums->count() }}<br>
                        <strong>Total Combined Album Sales:</strong> {{ $artist->albums->sum('sales') }}
                    </div>

                    <div class="text-sm text-gray-800 font-semibold mb-2">Albums:</div>
                    <ul class="text-sm text-gray-600 space-y-1 max-h-32 overflow-y-auto">
                        @forelse($artist->albums as $album)
                            <li>🎵 {{ $album->name }} ({{ $album->year }}) - {{ $album->sales }} sold</li>
                        @empty
                            <li class="text-gray-400">No albums.</li>
                        @endforelse
                    </ul>

                    <div class="mt-4 flex flex-wrap justify-center gap-2">
                        <a href="{{ route('artists.show', $artist) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-3 py-2 rounded">
                            View Artist
                        </a>
                        <a href="{{ route('albums.show', $artist) }}"
                            class="bg-green-500 hover:bg-green-600 text-white text-sm px-3 py-2 rounded">
                            View Albums
                        </a>
                    </div>
                </div>
            @empty
                <p class="col-span-full text-center text-gray-500">No artists found.</p>
            @endforelse
        </div>

        <div class="mt-8 flex justify-end">
            {{ $artists->withQueryString()->links() }}
        </div>

    </div>
</x-layout>
