@extends('layouts.app')

@section('content')
<h3>Inventory List</h3>
<a href="{{ route('inventory.create') }}">Add New Item</a>
<table style="width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Expiry Date</th>
            <th>Manufacturer</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inventory as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->item_name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->expiry_date }}</td>
            <td>{{ $item->manufacturer }}</td>
            <td>
                <a href="{{ route('inventory.edit',$item->id) }}">Edit</a>
                <form action="{{ route('inventory.destroy', ['inventoryId' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection