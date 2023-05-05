@extends('layouts.app')
@section('content')
    <div class="m-5">
        {{-- <a href="/hotel"> --}}
        <a class="btn btn-primary" href="{{route('booking.create')}}" style="margin-bottom: 25px">Tambah Booking +</a>
        <a class="btn btn-primary" href="{{route('home')}}" style="margin-bottom: 25px">Home</a>
        <table class="table table-bordered">
            <thead>
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Nama Hotel</th>
                    <th>Tanggal Checkin</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    // $no=1;
                    $no = $bookings ->firstItem() // supaya saat ganti slide paginate lanjut nomornya tidak ulang dari 1 lagi
                @endphp
                @foreach ($bookings as $booking)
                    <tr style="text-align: center">
                        <td>{{$no}}</td>
                        <td>{{$booking->hotel->name}}</td>
                        <td>{{$booking->checkin_date}}</td>
                        <td><span class="badge text-bg-warning"><a href="{{route('booking.edit',$booking->id)}}" style="text-decoration: none; color: white">Edit</a></span></td>
                        <td><form action="{{route('booking.delete',$booking->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this booking?')">
                            @csrf
                            <button type="submit" class="badge text-bg-danger">Delete</button>
                        </form></td>
                    </tr>
                @php
                    $no++;  
                @endphp
                @endforeach
            </tbody>
        </table>
        {{$bookings->Links()}}
    </div>
@endsection