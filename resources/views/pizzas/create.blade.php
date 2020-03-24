@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="POST">
        <label for="name">Your name: </label>
        <input type="text" id="name" name="name">
        
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="Marghuerita">Marghuerita</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="Veg Supreme">Veg Supreme</option>
            <option value="Volcano">Volcano</option>
        </select>

        <label for="base">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="Cheesy Crust">Cheesy Crust</option>
            <option value="Garlic Crust">Garlic Crust</option>
            <option value="Thin & Crispy">Thin & Crispy</option>
            <option value="Thick">Thick</option>
        </select>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection