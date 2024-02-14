@extends('admin.base')
@section('main_content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.post.import_data') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="file">Choose Excel File</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Import</button>
        </form>
    </div>
@endsection
