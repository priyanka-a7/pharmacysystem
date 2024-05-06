@extends('layouts.app')

@section('content')
<h1>Remove Inventory Item</h1>
<p>Are you sure you want to remove this item?</p>
<ul>
    <li><strong>Item Name:</strong> {{ $item->item_name }}</li>
    <li><strong>Description:</strong> {{ $item->description }}</li>
    <li><strong>Quantity:</strong> {{ $item->quantity }}</li>
    <li><strong>Price:</strong> {{ $item->price }}</li>
    <li><strong>Expiry Date:</strong> {{ $item->expiry_date }}</li>
    <li><strong>Manufacturer:</strong> {{ $item->manufacturer }}</li>
</ul>
<form action="{{ route('inventory.destroy', $item->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Yes, Remove</button>
</form>
@endsection