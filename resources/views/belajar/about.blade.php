@extends('layout.main')
@section('content')

	<h3>Ini halaman About</h3>
	<h1> <?= $name?> </h1>
    <h1>
        <?= $email?>
    </h1>
    <img src="{{asset('gatau/img/bgst.jpg')}}" alt="Hekel" width="200" class="rounded-circle img-thumbnail">

    @endsection