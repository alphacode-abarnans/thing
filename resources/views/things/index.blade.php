<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Things List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl mb-4 font-bold">Things List</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Name</th>
                    <th class="border p-2">Expiry Date</th>
                    <th class="border p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($things as $thing)
                <tr class="text-center">
                    <td class="border p-2">{{ $thing->name }}</td>
                    <td class="border p-2">{{ $thing->expiry_date }}</td>
                    <td class="border p-2 flex justify-center gap-2">
                        <a href="{{ route('things.edit', $thing->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Update</a>

                        <form action="{{ route('things.destroy', $thing->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
