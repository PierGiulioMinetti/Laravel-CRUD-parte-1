@extends('layouts.main')

@section('contenuto')
    <h1>
        Edit {{$classroom->name}}
    </h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)    
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        
    @endif

    <form action="{{ route('classrooms.store') }}" method="POST">
        @csrf
        @method('DELETE')
        
        <div class="form-group">
            <label for="name">Classroom name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name', $classroom->name) }}">
        </div>
        
        <div class="form-group">
            <label for="name">Classroom description</label>
            <textarea class="form-control" type="text" name="description" > {{ old('name', $classroom->description) }} </textarea>
        </div>
        <div class="form-group">
            
            <input class="btn btn-primary" type="submit" value="Update"> 
        </div>
    </form>
@endsection