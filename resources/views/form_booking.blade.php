@extends('layouts.app')
@section('content')
    {{-- <form action="{{route('booking.store')}}" method="POST">
        @csrf
        <select name="hotel" id="">
            @foreach ($hotels as $hotel)
            <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                
            @endforeach
        </select>
        <input type="text" placeholder="tanggal checkin hotel" onfocus="(this.type='date')" name="checkin_date"/>
        <button type="submit">buat</button>
    </form> --}}

    <form action="<?php @$edit!=null? printf(route('booking.update',$edit->id)) : printf(route('booking.store'))?>" method="POST" style="margin:10px">
    {{-- <form action="{{route('booking.store')}}" method="POST" style="margin:10px"> --}}
        @csrf
        <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="hotel">
            <option selected>Pilih Nama Hotel</option>
            @foreach ($hotels as $hotel)
                @if (@$edit->hotel->id == $hotel->id)
                    <option value="{{$hotel->id}}" selected>{{$hotel->name}}</option>
                @else
                    <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                @endif
            @endforeach
            </select>
            <label for="floatingSelect">Nama Hotel</label>
        </div>
        <br>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" placeholder="Check In Date" onfocus="this.showPicker()" name="checkin_date" value="{{@$edit->checkin_date}}"/>
            <label for="floatingInput">Check In Date</label>
        </div>
        <button type="submit" class="btn btn-secondary btn-lg" style="float: right;">Tambahkan</button>
        <button type="submit" class="btn btn-secondary btn-lg" style="float: left"><a href="{{route('booking.index')}}" style="text-decoration: none; color: white">Back</a></button>
        <div style="text-align: center"><button type="submit" class="btn btn-secondary btn-lg"><a href="{{route('home')}}" style="text-decoration: none; color: white">Home</a></button></div>
    </form>
@endsection