@extends('FarmerViews\farmerlayout')

@section('content')
<form action="{{ route('calculate') }}" method="POST">

@csrf

<input type:"text" name="operand1" placeholder="Enter the first number" required>

<select name="operator" required>

<option "add">+</option>

<option "subtract">-</option>

<option "multiply">*</option>

<option "divide">/</option>

</select>

<input type:"text" name="operand2"  placeholder="Enter the second number" required>

<button type="submit">Calculate</button>

</form>
@stop