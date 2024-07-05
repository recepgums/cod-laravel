<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Orders List</h1>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>City ID</th>
            <th>District ID</th>
            <th>Neighborhood ID</th>
            <th>Address</th>
            <th>Products</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->city?->name }}</td>
                <td>{{ $order->district?->name }}</td>
                <td>{{ $order->neighborhood?->name }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->products }}</td>
                <td>{{ $order->total_price }}</td>
                <td>{{ $order->is_done ? 'Completed' : 'Pending' }}</td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous" defer></script>
</body>
</html>
