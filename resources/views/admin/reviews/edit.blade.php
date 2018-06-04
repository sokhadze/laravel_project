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
                    <h3 class="box-title">Review -ს რედაქტირება</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('admin.reviews.put', $post->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">რეიტინგი</label>
                            <select class="form-control" name="rating">
                                <option @if($post->rating == 1) selected="selected" @endif value="1">1</option>
                                <option @if($post->rating == 2) selected="selected" @endif value="2">2</option>
                                <option @if($post->rating == 3) selected="selected" @endif value="3">3</option>
                                <option @if($post->rating == 4) selected="selected" @endif value="4">4</option>
                                <option  @if($post->rating == 5) selected="selected" @endif value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">განხილვა</label>
                            <textarea name="review" class="form-control">{{ $post->review }}</textarea>
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
                        {{--<input type="hidden" name="published" value="0">--}}
                        {{--<div class="checkbox">--}}
                            {{--<label>--}}
                                {{--<input name="published" type="checkbox" value="1" @if($post->published) checked @endif> გამოქვეყნებული--}}
                            {{--</label>--}}
                        {{--</div>--}}
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
