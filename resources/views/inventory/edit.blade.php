<style>
form {
    border-radius: 5px;
    padding: 20px;
}

input[type=text],
select,
textarea {
    width: 75%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

input[type=number],
input[type=date] {
    width: 75%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

button {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

button:hover {
    background-color: #45a049;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
</style>

@extends('layouts.app')

@section('content')
<h3>Edit Inventory Item</h3>
<form action="{{ route('inventory.update', ['inventoryId' => $inventory->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-25">
            <label for="item_name">Item Name:</label>
        </div>
        <div class="col-75">
            <input type="text" id="item_name" name="item_name" class="form-control" value="{{ $inventory->item_name }}">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="description">Description:</label>
        </div>
        <div class="col-75">
            <textarea id="description" name="description" class="form-control">{{ $inventory->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="quantity">Quantity:</label>
        </div>
        <div class="col-75">
            <input type="number" id="quantity" name="quantity" class="form-control" value="{{ $inventory->quantity }}">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="price">Price:</label>
        </div>
        <div class="col-75">
            <input type="number" id="price" name="price" class="form-control" value="{{ $inventory->price }}">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="expiry_date">Expiry Date:</label>
        </div>
        <div class="col-75">
            <input type="date" id="expiry_date" name="expiry_date" class="form-control"
                value="{{ $inventory->expiry_date }}">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="manufacturer">Manufacturer:</label>
        </div>
        <div class="col-75">
            <input type="text" id="manufacturer" name="manufacturer" class="form-control"
                value="{{ $inventory->manufacturer }}">
        </div>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary">Update Item</button>
</form>
@endsection