@extends('layouts.app')

@section('content')
<h1>Customers</h1>
<a href="{{ route('customer.create') }}">Add New Customer</a>
<table style="width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Medical History</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customer as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->phone_number }}</td>
            <td>{{ $customer->medical_history }}</td>
            <td>
                <a href="{{ route('customer.edit', $customer->id) }}">Edit</a>
                <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
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