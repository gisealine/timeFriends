@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('article.store') }}" id="new-form" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="title">标题</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   value="{{ old('title') }}" placeholder="标题" required>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <label for="markdown">类容</label>
                        <textarea id="markdown" name="markdown">{!! htmlspecialchars(old('markdown')) !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">提交</button>
                </form>
            </div>
        </div>
    </div>
@endsection
