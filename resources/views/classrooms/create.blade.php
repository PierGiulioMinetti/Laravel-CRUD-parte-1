@extends('layouts.main')

@section('contenuto')
    <h1>
        CREATE NEW CLASS
    </h1>
    <form action="" method="POST">
        @csrf
        @method('POST')
        
        <div class="form-group">
            <label for="name">Classroom name</label>
            <input class="form-control" type="text" name="name">
        </div>
        
        <div class="form-group">
            <label for="name">Classroom description</label>
            <textarea class="form-control" type="text" name="description"> </textarea>
        </div>
        <div class="form-group">
            
            <input class="btn btn-primary" type="submit" value="Create"> 
        </div>
    </form>
@endsection