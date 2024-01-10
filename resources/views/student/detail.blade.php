@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body shadow">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Roll Number</th>
                                <th scope="col">Total mark</th>
                                <th scope="col">Level</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->rollnumber }}</td>
                                    <td>{{ $student->totalmark }}</td>
                                    <td>{{ $student->level }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mb-4">
                            <a href="{{ route('student.index') }}" class="btn btn-outline-dark">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
