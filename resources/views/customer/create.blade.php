@extends('layouts.app')

@section('content')
<style>
form {
    border-radius: 5px;
    padding: 20px;
}

input[type=text],
input[type=email],
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
    background-color: #daf4ff;
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
<h3>Add New Customer</h3>
<div>
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-25">
                <label for="name">Name:</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                <p>{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email:</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                <p>{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="address">Address:</label>
            </div>
            <div class="col-75">
                <input type="text" id="address" name="address" value="{{ old('address') }}">
                @error('address')
                <p>{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="phone_number">Phone Number:</label>
            </div>
            <div class="col-75">
                <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                @error('phone_number')
                <p>{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="medical_history">Medical History:</label>
            </div>
            <div class="col-75">
                <textarea id="medical_history" name="medical_history">{{ old('medical_history') }}</textarea>
                @error('medical_history')
                <p>{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <button type="submit">Add Customer</button>
        </div>
    </form>
</div>
@endsection