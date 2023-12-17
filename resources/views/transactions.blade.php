@extends('layouts.app')

@section('content')
    <h1>Transaction History</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Product</th>
                <th>Quantity Sold</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->sold_at }}</td>
                    <td>{{ $transaction->product->name }}</td>
                    <td>{{ $transaction->quantity_sold }}</td>
                    <td>${{ $transaction->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $transactions->links() }}
@endsection
