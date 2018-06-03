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
                    <h3 class="box-title">მომხმარებლის რედაქტირება</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('admin.users.put', $user->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">სახელი</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">გვარი</label>
                            <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ელექტრონული ფოსტა</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">დაბადების თარიღი</label>
                            <input type="date" class="form-control" name="birthdate" value="{{ $user->birthday }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">მომხმარებლის ტიპი</label>
                            <select class="form-control" name="role">
                                <option value="user" @if($user->role === 'user') selected="selected" @endif>მომხმარებელი</option>
                                <option value="poster" @if($user->role === 'poster') selected="selected" @endif>პოსტერი</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">პაროლი</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="exampleInputFile">File input</label>--}}
                            {{--<input type="file" id="exampleInputFile">--}}

                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                        {{--</div>--}}
                        {{--<div class="checkbox">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox"> Check me out--}}
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