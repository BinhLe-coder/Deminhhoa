@extends('layout')

@section('name','Manage')

@section('main-content')
        @if (count($students)<=0)
            <p style="text-align:center;">NO RECORD</p>
        @else
                <table class="table mt-3  text-left">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col" class="pr-5">Birthday</th>
                            <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                        <tr>
                            <td>{!! $student->id !!}</td>
                            <td>{!! $student->fullname !!}</td>
                            <td class="pr-5 text-right">{!! $student->birthday !!}</td>
                            <td>{!! $student->address !!}</td>
                            <td><a href="{!! $student->id !!}/edit"
                                class="btn btn-success">Edit</a>
                                <a href="{!! $student->id !!}/delete"  class="btn btn-danger">Delete</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No students found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
        @endif
@endsection