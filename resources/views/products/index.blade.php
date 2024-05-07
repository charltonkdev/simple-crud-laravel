@extends ('master')
    <div class="container mx-auto p-4">
        <h1 class="font-['Poppins'] text-2xl font-bold mb-4">Product</h1>
        
        <div class="mb-4">
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                Add New Product
            </a>
        </div>
        
        @if(session()->has('success'))
            <div class="bg-green-100 text-green-800 p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded-lg p-4">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr>
                        <th class="border-b p-2">ID</th>
                        <th class="border-b p-2">Name</th>
                        <th class="border-b p-2">Qty</th>
                        <th class="border-b p-2">Price</th>
                        <th class="border-b p-2">Description</th>
                        <th class="border-b p-2">Edit</th>
                        <th class="border-b p-2">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="p-2">{{ $product->id }}</td>
                        <td class="p-2">{{ $product->name }}</td>
                        <td class="p-2">{{ $product->qty }}</td>
                        <td class="p-2">{{ $product->price }}</td>
                        <td class="p-2">{{ $product->description }}</td>
                        <td class="p-2">
                            <a href="{{ route('product.edit', ['product' => $product]) }}"
                               class="text-blue-500 hover:text-blue-700 transition">
                                Edit
                            </a>
                        </td>
                        <td class="p-2">
                            <form method="post" action="{{route('product.delete', ['product' => $product])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete"
                                       class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition" />
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>