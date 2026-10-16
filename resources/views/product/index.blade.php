@extends('layouts.app')
@section('title', 'Товари')
@section('content')
    <h1>Каталог комп'ютерної техніки</h1>
    <p><a href="{{ route('product.create') }}">Додати новий товар</a></p>

    <form method="GET" action="{{ route('product.index') }}">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Пошук...">
        <button type="submit">Шукати</button>
    </form><br>

    <table border="1" cellpadding="8">
        <tr><th>#</th><th>Назва</th><th>Ціна</th><th>Кількість</th><th>Дії</th></tr>
        @foreach ($products as $i => $product)
            <tr>
                <td>{{ $products->firstItem() + $i }}</td>
                <td><a href="{{ route('product.show', $product) }}">{{ $product->name }}</a></td>
                <td>{{ $product->price }} грн</td>
                <td>{{ $product->quantity }}</td>
                <td><a href="{{ route('product.edit', $product) }}">Редагувати</a></td>
            </tr>
        @endforeach
    </table>
    <br>
    {{ $products->links() }}
@endsection
