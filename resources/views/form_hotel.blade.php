@extends('layouts.app')
@section('content')
    {{-- <form action="{{route('hotel.store')}}" method="POST">
        @csrf
        <input type="text" placeholder="nama hotel" name="name"/>
        <input type="text" placeholder="alamat hotel" name="address"/>
        <input type="number" placeholder="rating (1-5)" name="rating"/>
        <button type="submit">tambahkan</button>
    </form> --}}

    {{-- <form action="{{route('hotel.store')}}" method="POST" style="margin:10px"> --}}
    <form action="<?php @$edit!=null? printf(route('hotel.update',[$edit->id])) : printf(route('hotel.store'))?>" method="POST" style="margin:10px">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="nama hotel" name="name" value="<?php if(@$edit!=null) printf($edit->name)?>"/>
            <label for="floatingInput">Nama Hotel</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="alamat hotel" name="address" value="<?php if(@$edit!=null) printf($edit->address)?>"/>
            <label for="floatingInput">Alamat Hotel</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="rating hotel" name="rating" value="<?php if(@$edit!=null) printf($edit->rate)?>"/>
            <label for="floatingInput">Rating Hotel</label>
        </div>
        {{-- value utk memberikan isi, sesuaikan dengan nama kolom di db --}}
        <button type="submit" class="btn btn-secondary btn-lg" style="float: right">Tambahkan</button>
        <button type="submit" class="btn btn-secondary btn-lg" style="float: left"><a href="{{route('hotel.index')}}" style="text-decoration: none; color: white">Back</a></button>
        <div style="text-align: center"><button type="submit" class="btn btn-secondary btn-lg"><a href="{{route('home')}}" style="text-decoration: none; color: white">Home</a></button></div>
    </form>
@endsection