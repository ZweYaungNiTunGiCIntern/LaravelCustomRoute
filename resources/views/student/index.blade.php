@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <div class="mb-3">
                        <a href="{{ route('student.create') }}" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <table class="table">

                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Roll Number</th>
                            <th scope="col">Total Mark</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($students as $student)
                            <tr>
                                <th scope="row">{{ $student->id}}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->rollnumber }}</td>
                                <td>{{ $student->totalmark }}</td>
                                <td>{{ $student->level }}</td>
                                <td>
                                    <div class="d-flex justify-content-center" >
                                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-outline-warning">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="{{ route('student.show', $student->id) }}" class="btn btn-outline-info">
                                            <i class="fas fa-info"></i>
                                        </a>

                                        <div>
                                            <form method="post" action = "{{ route('student.destroy', $student->id) }}" class="d-inline-block">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
