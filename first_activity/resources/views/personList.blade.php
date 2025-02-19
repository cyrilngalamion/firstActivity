
@extends('base')
@section('title', 'Person List')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($persons as $key => $data)
        <tr> 
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $data->name }}</td>
            <td>{{ $data->age }}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>
