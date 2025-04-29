<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Thing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl mb-4 font-bold">Add Thing</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('things.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 font-bold">Name</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-bold">Expiry Date</label>
                <input type="date" name="expiry_date" class="w-full border rounded p-2" required>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                <a href="{{ route('things.index') }}" class="bg-green-500 text-white px-4 py-2 rounded">View</a>
            </div>
        </form>
    </div>

</body>
</html>
