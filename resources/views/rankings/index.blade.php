@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" }}>Home</a></li>
        <li class="breadcrumb-item">Standen</li>
    </ol>
@stop

@section('body')
    @foreach($pools as $pool)
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                {{ $pool->pool }}
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead>
                    <tr>
                        <th>Rang</th>
                        <th>Team</th>
                        <th>w</th>
                        <th>p</th>
                        <th>sv</th>
                        <th>st</th>
                        <th>s</th>
                        <th>str.p</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- Define ranking --}}
                    @php($rank = 1)
                    @foreach($pool->rankings as $ranking)
                        {{-- Render the ranking and data of each Ranking model --}}
                        <tr>
                            <td>{{ $rank }}</td>
                            <td>{{ $ranking->team }}</td>
                            <td>{{ $ranking->w }}</td>
                            <td>{{ $ranking->p }}</td>
                            <td>{{ $ranking->sv }}</td>
                            <td>{{ $ranking->st }}</td>
                            <td>{{ $ranking->computeS() }}</td>
                            <td>{{ $ranking->str_p }}</td>
                        </tr>
                        {{-- increase ranking number for next Ranking model --}}
                        @php($rank++)
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endforeach
@stop
