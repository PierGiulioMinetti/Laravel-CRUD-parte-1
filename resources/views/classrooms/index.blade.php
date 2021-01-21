@extends('layouts.main')

@section('contenuto')
    <div class="container mb-5">
        <h1>
            OUR CLASSROOMS
        </h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>    
                    <th></th>    
                    <th></th>    
                </tr>    
            </thead>
            <tbody>
                @foreach ($classrooms as $classroom )
                    <td>{{$classroom->id}}</td>
                    <td>{{$classroom->name}}</td>
                   <td class="text-center" width="100">
                       <a href="{{ route('classrooms.show', $classroom->id) }}" class="btn btn-success"></a>

                   </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection