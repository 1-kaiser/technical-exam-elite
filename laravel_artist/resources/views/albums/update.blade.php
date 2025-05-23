<x-layout>
    <div class="max-w-lg mx-auto p-6 bg-white rounded shadow mt-6">
        <h1 class="text-2xl font-bold mb-4">Edit Album</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('albums.update', $album) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            @if ($album->image)
                <div class="mb-4">
                    <p class="mb-1">Current Cover:</p>
                    <img src="{{ asset('storage/' . $album->image) }}" class="w-40 h-40 object-cover rounded">
                </div>
            @endif

            <div class="mb-4 flex" id="previewContainer" style="display:none;">
                <p class="mb-1">New Preview:</p>
                <img id="preview" class="w-40 h-40 object-cover rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Album Cover</label>
                <input type="file" name="image" accept="image/*"
                    class="w-full border px-3 py-1 bg-slate-200 rounded" onchange="previewImage(event)">
            </div>


            <div class="mb-4">
                <label for="name" class="block font-semibold mb-1">Album Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $album->name) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="yearr" class="block font-semibold mb-1">Album Year</label>
                <input type="text" name="year" id="year" value="{{ old('year', $album->year) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="sales" class="block font-semibold mb-1">Sales</label>
                <input type="text" name="sales" id="sales" value="{{ old('sales', $album->sales) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">
                    Cancel
                </a>

                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 cursor-pointer">
                    Update Album
                </button>
            </div>
        </form>
    </div>
</x-layout>

<script>
    function previewImage(event) {
        const output = document.getElementById('preview');
        const container = document.getElementById('previewContainer');
        output.src = URL.createObjectURL(event.target.files[0]);
        container.style.display = 'block';
    }
</script>
