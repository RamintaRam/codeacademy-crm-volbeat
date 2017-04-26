@extends('main')

@section('content')
    <div>Total records: {{$totalCount}}</div>

    <div>Projects:</div>

    <table style= "text-align: center; background-color: lightblue; border: 1px solid black">
        <tr>
            <th>Project name</th>
            <th> Client name</th>
            <th>Total working on project</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td>  {{$project['name']}}</td>
                <td> {{$project['client']['name']}}</td>
                <td>{{sizeof($project['persons'])}} </td>
            </tr>

        @endforeach
    </table>
@endsection

@section('title', trans('app.projects'))