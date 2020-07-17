@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Operation</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($hospitals) && $hospitals->count()>0)
                @foreach($hospitals as $hospital)
                    <tr>
                        <th scope="row">{{$hospital->name}}</th>
                        <td>{{$hospital->name}}</td>
                        <td><a href="{{route('show.Doctors',$hospital->id)}}" type="button" class="btn btn-primary">Show Doctors</a>
                            <a href="{{route('Hospital.Delete',$hospital->id)}}" type="button" class="btn btn-danger">Delete Hospital</a>
                        </td>

                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    @stop