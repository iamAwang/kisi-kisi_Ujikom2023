@extends('layouts.app')
@section('content')
    <form action="#" method="POST" style="margin:10px">
        @csrf
        <h3>Identitas Trigonometri</h3>
        <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="identitas">
            <option selected>&frac12;</option>
            <option value="#"></option>
            </select>
            <label for="floatingSelect">Nama Hotel</label>
        </div>
        <br>
        <button type="submit" class="btn btn-secondary btn-lg" style="float: right;">Tambahkan</button>
        <button type="submit" class="btn btn-secondary btn-lg" style="float: left"><a href="{{route('booking.index')}}" style="text-decoration: none; color: white">Back</a></button>
        <div style="text-align: center"><button type="submit" class="btn btn-secondary btn-lg"><a href="{{route('home')}}" style="text-decoration: none; color: white">Home</a></button></div>
    </form>
@endsection