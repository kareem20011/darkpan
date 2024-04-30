@extends('admin.layouts.side')
@section('admin.content')


<div class="container-fluid pt-4 px-4">
    @if(Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
    @endif
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-4">Color Create</h6>
        <form method="post" action="{{ route('admin.colors.update', $color->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input name="title" value="{{ $color->title }}" placeholder="Enter color title" type="text" class="form-control" id="title">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="row">


                <fieldset class="row col-6 mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="1" {{ $color->status === '1'? 'checked' : '' }}>
                            <label class="form-check-lael" for="gridRadios2">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="0" {{ $color->status === '0'? 'checked' : '' }}>
                            <label class="form-check-label" for="gridRadios1">
                                Disable
                            </label>
                        </div>
                    </div>
                </fieldset>

            </div>

            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>


@endsection