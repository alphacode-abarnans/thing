<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Thing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl mb-4 font-bold">Edit Thing</h1>

        <form action="{{ route('things.update', $thing->id) }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block mb-1 font-bold">Name</label>
                <input type="text" name="name" value="{{ $thing->name }}" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-bold">Expiry Date</label>
                <input type="date" name="expiry_date" value="{{ $thing->expiry_date }}" class="w-full border rounded p-2" required>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                <a href="{{ route('things.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
            </div>
        </form>
    </div>

</body>
</html>
