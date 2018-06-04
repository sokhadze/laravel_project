@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    {{--<section class="content-header">--}}
    {{--<h1>--}}
    {{--მომხმარებლები--}}
    {{--<small>it all starts here</small>--}}
    {{--</h1>--}}
    {{--<ol class="breadcrumb">--}}
    {{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
    {{--<li><a href="#">Examples</a></li>--}}
    {{--<li class="active">Blank page</li>--}}
    {{--</ol>--}}
    {{--</section>--}}

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">პოსტის რედაქტირება</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('admin.posts.put', $post->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">სათაური</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">აღწერა</label>
                            <textarea name="description" class="form-control">{{ $post->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">სურათი</label><br>
                            <img src="/storage/images/{{ $post->image }}" style="height: 100px;">
                            <input type="file" class="form-control" name="image">
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label for="exampleInputPassword1">მომხმარებლის ტიპი</label>--}}
                            {{--<select class="form-control" name="role">--}}
                                {{--<option value="user" @if($post->role === 'user') selected="selected" @endif>მომხმარებელი</option>--}}
                                {{--<option value="poster" @if($post->role === 'poster') selected="selected" @endif>პოსტერი</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="exampleInputFile">File input</label>--}}
                            {{--<input type="file" id="exampleInputFile">--}}

                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                        {{--</div>--}}
                        <input type="hidden" name="published" value="0">
                        <div class="checkbox">
                            <label>
                                <input name="published" type="checkbox" value="1" @if($post->published) checked @endif> გამოქვეყნებული
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">რედაქტირება</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@stop
@section('footer')

@stop