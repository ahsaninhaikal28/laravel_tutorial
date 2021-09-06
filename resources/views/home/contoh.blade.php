@extends('layouts.index')

@section('content')
<p>Klik Tombol Di Bawah</p>
<form method="POST" action="{{ url('home/contoh') }}">
    @csrf
    <input type="text" name="nama">
    <button type="submit">SUBMIT</button>
</form>
@endsection