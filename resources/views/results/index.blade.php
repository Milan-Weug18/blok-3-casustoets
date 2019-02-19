@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" }}>Home</a></li>
        <li class="breadcrumb-item">Uitslagen</li>
    </ol>
@stop

@section('body')
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Tijd</th>
                        <th>Klas</th>
                        <th>A</th>
                        <th>B</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $result)
                        <tr>
                            <td>{{ $result->date }}</td>
                            <td>{{ $result->time }}</td>
                            <td>{{ $result->class }}</td>
                            <td>{{ $result->team_a }}</td>
                            <td>{{ $result->team_b }}</td>
                            <td>{{ $result->points_a }}</td>
                            <td>{{ $result->points_b }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
