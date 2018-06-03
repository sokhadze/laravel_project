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
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">პოსტები</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>დამატების თარიღი</th>
                            <th>სახელი</th>
                            <th>გვარი</th>
                            <th>სათაური</th>
                            <th>პროფესია</th>
                            <th>გამოქვეყნებული</th>
                            {{--<th>როლი</th>--}}
                        </tr>
                        <tbody>
                        @foreach($records as $record)
                            <tr>
                                <td>{{ $record->created_at->format('d.m.Y H:m:s') }}</td>
                                <td>{{ $record->user->name }}</td>
                                <td>{{ $record->user->lastname }}</td>
                                <td>{{ $record->title }}</td>
                                <td>{{ $record->profession }}</td>
                                <td>{{ $record->published }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.edit', $record->id) }}" class="btn btn-default">Edit</a>
                                    <button data-id="{{ $record->id }}" class="btn btn-default delete">Delete</button>
                                </td>
                                {{--<td></td>--}}
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@stop
@section('footer')
    <script>
        $(".delete").click(function () {
            $this = $(this);
            var id = $this.attr('data-id');
            $.ajax({
                url: '{{ route('admin.posts.destroy', '/') }}/' + id,
                method: "POST",
                data: {
                    _method: "delete"
                },
                success: function () {
                    $this.closest('tr').remove();
                }
            })
        });
    </script>
@stop