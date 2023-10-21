@extends('layout.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">Artikel</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th width=40%>Judul</th>
                            <th>Deskripsi</th>
                        </tr>
                        @foreach ($data_artikel as $item)
                            <tr>
                                <td>{{ $item['judul'] }}</td>
                                <td>{{ $item['deskripsi'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection