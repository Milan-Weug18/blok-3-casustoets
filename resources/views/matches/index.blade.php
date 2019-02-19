@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" }}>Home</a></li>
        <li class="breadcrumb-item">Wedstrijdzchema</li>
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
                        <th>Veld</th>
                        <th>Klas</th>
                        <th>A</th>
                        <th>B</th>
                        <th>Scheids/Teller</th>
                        <th>Klas</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($matches as $match)
                        <tr>
                            <td>{{ $match->date }}</td>
                            <td>{{ $match->time }}</td>
                            <td>{{ $match->playfield }}</td>
                            <td>{{ $match->class }}</td>
                            <td>{{ $match->team_a }}</td>
                            <td>{{ $match->team_b }}</td>
                            <td>{{ $match->team_ref }}</td>
                            <td>{{ $match->class }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
