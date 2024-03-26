@extends('layout.main')

@section('title', 'EVENT | INGGIT')

@section('content')

<div class="container">
    <br>
        
            <div class="table-responsive">
            <table class="table-striped table">
                <thead>
                <tr>
                    <th>COUNTRY</th>
                    <th>LEAGUE</th>
                    <th>DATE</th>
                    <th>HOME TEAM</th>
                    <th>AWAY TEAM</th>
                    <th>STADIUM</th>
                    <th>YEAR</th>
                    <th>LOGO</th>
                </tr>

                </thead>
                <tbody>
                    @foreach ($eventdata as $event)
                    <tr>
                        <td>{{$event['country_name']}}</td>
                        <td>{{$event['league_name']}}</td>
                        <td>{{$event['match_date']}}</td>
                        <td>{{$event['match_hometeam_name']}}</td>
                        <td>{{$event['match_awayteam_name']}}</td>
                        <td>{{$event['match_stadium']}}</td>
                        <td>{{$event['league_year']}}</td>
                        <td class="text-start"><img src="{{$event['league_logo']}}" alt="Logo" width="25px">{{$event['league_name']}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            </div>
    </div>
    @include('layout.footer')
@endsection
