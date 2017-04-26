@extends('main')

@section('content')
    <div>Total records: {{$totalCount}}</div>
    <div>Clients:</div>
    <ul>
        @foreach($clients as $client)
            {{$client['name']}}
            <ul>
                @foreach($client['projects'] as $projects)
                    <li>{{$projects['name']}}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
@endsection

@section('title', trans('app.clients'))

