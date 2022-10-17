@extends('layout')

@section('name','Edit')

@section('main-content')
        @if (!$student)
        @else
        <div class="container">
            <form method="POST">
                @csrf
                @method('put')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$student->fullname}}">
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{$student->birthday}}">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$student->address}}">
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
           </div>
        @endif
@endsection