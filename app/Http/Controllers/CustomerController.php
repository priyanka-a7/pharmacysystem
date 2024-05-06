<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException; // Import the ValidationException class

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all(); // Use plural variable name
        return view('customer.index', compact('customer')); // Fix variable name
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'unique:customer,email'],
                'address' => ['nullable', 'string', 'max:255'],
                'phone_number' => ['nullable', 'string', 'max:20'],
                'medical_history' => ['nullable', 'string'],
            ]);

            Customer::create($validatedData);
            return redirect()->route('customer.index')->with('success', 'Customer created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create customer.');
        }
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        try {
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('customer')->ignore($customer->id),
                ],
                'address' => ['nullable', 'string', 'max:255'],
                'phone_number' => ['nullable', 'string', 'max:20'],
                'medical_history' => ['nullable', 'string'],
            ]);

            $customer->update($validatedData);
            return redirect()->route('customer.index')->with('success', 'Customer updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update customer.');
        }
    }

    public function destroy(Customer $customer)
    {
        try {
            $customer->delete();
            return redirect()->route('customer.index')->with('success', 'Customer deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete customer.');
        }
    }
}
