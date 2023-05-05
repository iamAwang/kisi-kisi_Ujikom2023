@extends('layouts.app')
@section('content')
    <div class="m-5">
        {{-- <a href="/hotel"> --}}
        {{-- <a href="{{route('hotel.create')}}">Hotel</a> --}}

        <a class="btn btn-primary" href="{{route('hotel.create')}}" style="margin-bottom: 25px">Tambah Hotel +</a>
        <a class="btn btn-primary" href="{{route('home')}}" style="margin-bottom: 25px">Home</a>
        <table class="table table-bordered">    
            <thead style="text-align: center">
                <tr>
                    <th>No</th>
                    <th>Nama Hotel</th>
                    <th>Alamat Hotel</th>
                    <th colspan="2">Aksi</th>
                    {{-- colspan biar ada 2 kolom dalam satu kolom header --}}
                </tr>
            </thead>
            <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($hotels as $hotel)
            <tr style="text-align: center">
                <td>{{$no}}</td>
                <td>{{$hotel->name}}</td>
                <td>{{$hotel->address}}</td>
                <td>
                    {{-- <span class="badge text-bg-warning"><a href="{{route('hotel.edit',Auth::user()->id)}}">Edit</a></span> --}}
                    {{-- <span class="badge text-bg-warning"><a href="{{route('hotel.edit',[$hotel->id])}}" style="text-decoration: none; color:white">Edit</a></span></td> kurung siku dalam [$hotel->id] untuk 2 parameter misal [$hotel->id, $user->id] --}}
                    <span class="badge text-bg-warning"><a href="{{route('hotel.edit',[$hotel->id])}}" style="text-decoration: none; color:white">Edit</a></span></td>
                    <td><form action="{{route('hotel.delete',$hotel->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this hotel?')">
                        @csrf
                        <button type="submit" class="badge text-bg-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
            </tbody>
        </table>
        {{-- {{$hotels->Links()}} --}}
        {{$hotels->withQueryString()->Links()}}
        {{-- untuk previous dan next --}}
    </div>
@endsection