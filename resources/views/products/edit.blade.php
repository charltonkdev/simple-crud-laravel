@extends('master')
<div class="container mx-auto p-4">
    <h1 class="font-bold text-xl">Edit product</h1>
    <div>@if($errors->any())
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    @endif
    </div>

    <form method="post" action="{{route('product.update', ['product' => $product])}}">
    @csrf
    @method('put')    
        <div class="flex flex-col space-y-4">
            <div class="block items-center">
                <label for="name" class="text-sm font-medium mr-2">Name</label><br/>
                <input type="text" name="name" id="name" placeholder="Name" value="{{ $product->name }}" class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500" />
            </div>
            <div class="block items-center">
                <label for="qty" class="text-sm font-medium mr-2">Qty</label><br/>
                <input type="text" name="qty" id="qty" placeholder="Qty" value="{{ $product->qty }}" class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500" />
            </div>
            <div class="block items-center">
                <label for="price" class="text-sm font-medium mr-2">Price</label><br/>
                <input type="text" name="price" id="price" placeholder="Price" value="{{ $product->price }}" class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500" />
            </div>
            <div class="block items-center">
                <label for="description" class="text-sm font-medium mr-2">Description</label><br/>
                <input type="text" name="description" id="description" placeholder="Description" value="{{ $product->description }}" class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500" />
            </div>
            <div class="items-center">
                <input type="submit" value="Update" class="bg-blue-500 text-white font-medium py-2 px-4 rounded hover:bg-blue-700 cursor-pointer"/>
            </div>
        </div>
    </form>
</div>
