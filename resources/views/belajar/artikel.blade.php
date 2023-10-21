@extends('layout.master')

@section('title')
     Artikel
@endsection

@section('breadcrumb')
    @parent
    <li class="active"> Artikel</li>
@endsection

@section('content')

    <table class="table table-stiped table-bordered">
        <thead> 
            <th width="5%">No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th width="15%"><i class="fa fa-cog"></i></th>
        </thead>
        <tbody></tbody>
    </table>
@endsection
