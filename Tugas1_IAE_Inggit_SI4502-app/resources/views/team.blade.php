@extends('layout.main')

@section('title', 'TEAM | INGGIT')

@section('content')

<div class="container">
    <br>
        
            <div class="table-responsive">
            <table class="table-striped table">
                <thead>
                <tr>
                    <th>TEAM</th>
                    <th>COUNTRY</th>
                    <th>FOUNDED</th>
                    <th>BADGE</th>
                </tr>

                </thead>
                <tbody>
                    @foreach ($teamdata as $team)
                    <tr>
                        <td>{{$team['team_name']}}</td>
                        <td>{{$team['team_country']}}</td>
                        <td>{{$team['team_founded']}}</td>
                        <td class="text-start"><img src="{{$team['team_badge']}}" alt="Logo" width="25px">{{$team['team_name']}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            </div>
    </div>
    @include('layout.footer')
@endsection
