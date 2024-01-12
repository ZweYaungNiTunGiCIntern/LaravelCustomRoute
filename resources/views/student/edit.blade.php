@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow">
                    <div class="card-body m-3">
                        <div class="">
                            <form action="{{route('student.update', $student->id)}}" method="post">
                            @csrf
                            @method('PUT')

                                <div class="mb-3 mt-3">
                                    <label  class="form-label">Name</label>
                                    <input type="text" name = "name" class="form-control" value="{{ $student->name }}">

                                    @error('name')
                                        <div class="text-danger">* {{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Roll Number</label>
                                    <input type="text" name = "rollnumber"  class="form-control" value="{{ $student->rollnumber }}">

                                    @error('rollnumber')
                                        <div class="text-danger">* {{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Total mark</label>
                                    <input type="text" name = "totalmark"  class="form-control" value="{{ $student->totalmark }}">

                                    @error('size')
                                        <div class="text-danger">* {{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Level</label>
                                    <input type="text" name = "level"  class="form-control" value="{{ $student->level }}">

                                    @error('level')
                                        <div class="text-danger">* {{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-4">
                                    <a href="{{ route('student.index') }}" class="btn btn-outline-dark">Back</a>
                                    <button class="btn btn-outline-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
