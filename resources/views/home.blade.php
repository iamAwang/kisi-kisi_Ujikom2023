@extends('layouts.app')
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
    }
    body {
        min-height: 100vh;
        background-image: linear-gradient(
                rgba(0, 0, 0, 0.6),
                rgba(0, 0, 0, 0.6)
            ),
            url("gambar/hotel2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .article {
        width: 50%;
        margin: auto;
        text-align: center;
        transform: translateY(25vh);
    }
    .article h1 {
        font-size: 36px;
        color: #fff;
        letter-spacing: 1.5px;
        font-weight: 800;
        margin-bottom: 25px;
    }
    .article p {
        font-size: 18px;
        color: #7e7e7e;
        line-height: 1.5;
        margin-bottom: 50px;
    }
    .article .btn {
        color: #fff;
        padding: 10px 20px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        text-decoration: none;
    }
</style>
@section('content')
<body>
    <div class="article">
        <h1>WELCOME</h1>
        <p>
            Hotel | Booking | Pangkalan Bun | Kalimantan Tengah<br />Web &
            Mobile Programming | Enter
        </p>
        <a
            class="btn btn-primary"
            href="{{ route('hotel.index') }}"
            style="margin-bottom: 25px"
            >Hotel</a
        >
        <a
            class="btn btn-primary"
            href="{{ route('hotel.create') }}"
            style="margin-bottom: 25px"
            >Tambah Hotel +</a
        >
        <!-- <br /> -->
        <a
            class="btn btn-primary"
            href="{{ route('booking.index') }}"
            style="margin-bottom: 25px"
            >Booking</a
        >
        <a
            class="btn btn-primary"
            href="{{ route('booking.create') }}"
            style="margin-bottom: 25px"
            >Tambah Booking +</a
        >
    </div>
</body>
@endsection
