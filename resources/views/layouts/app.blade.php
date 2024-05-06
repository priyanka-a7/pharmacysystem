<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pharmacy Management System</title>
    <style>
    body {
        font-family: "Roboto", sans-serif;
        margin: 0;
    }

    .header {
        background-color: #0098DA;
        padding: 20px;
        color: #fff;
    }

    .row {
        display: flex;
    }

    .sidebar {
        flex: 10%;
        background-color: #daf4ff;
        padding: 20px;
        height: 630px;
    }

    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    }

    .content {
        flex: 90%;
        background-color: white;
        padding: 20px;
    }

    .sidebar a:hover:not(.active) {
        background-color: #0098DA;
        color: white;
    }
    </style>
</head>

<body>
    <div class="header">
        <h2>Pharmacy Management</h2>
    </div>

    <div class="row">
        <div class="sidebar">
            <!-- <a href="{{ route('home') }}">Home</a> -->
            <a href="{{ route('inventory.index') }}">Inventory</a>
            <a href="{{ route('customer.index') }}">Customers</a>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>

</html>