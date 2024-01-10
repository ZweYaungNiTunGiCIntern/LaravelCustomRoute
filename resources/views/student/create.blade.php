@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow">
                    <div class="card-body m-3">
                        <div class="">
                            <form action="{{route('student.store')}}" method="post">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <label  class="form-label">Name <small class="danger">*</small></label>
                                    <input type="text" name = "name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">

                                    @error('name')
                                        <div class="text-danger">* {{ $message }} </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Roll Number <small class="danger">*</small></label>
                                    <input type="text" name = "rollnumber"  class="form-control @error('Roll number') is-invalid @enderror" value="{{ old('rollnumber') }}">

                                    @error('rollnumber')
                                        <div class="text-danger">* {{ $message }} </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Total mark <small class="danger">*</small></label>
                                    <input type="text" name = "totalmark"  class="form-control @error('Total Mark') is-invalid @enderror" value="{{ old('rollnumber') }}">

                                    @error('rollnumber')
                                    <div class="text-danger">* {{ $message }} </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Level<small class="danger">*</small></label>
                                    <input type="text" name = "level"  class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}">

                                    @error('level')
                                    <div class="text-danger">* {{ $message }} </div>
                                    @enderror

                                </div>
                                <div class="mb-4">
                                    <a href="{{ route('student.index') }}" class="btn btn-outline-dark">Back</a>
                                    <button class="btn btn-outline-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
