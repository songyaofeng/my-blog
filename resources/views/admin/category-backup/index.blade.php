@extends('layouts.admin')

@section('title', '分类列表')

@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/category/index') }}">分类管理</a></li>
        <li class="active">分类列表</li>
    </ul>
    <div style="margin-bottom:10px;">
        <a class="btn btn-success" href="{{ url('admin/category/create') }}">添加分类</a>
    </div>
    <form action="{{ url('admin/category/sort') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-bordered table-striped table-hover table-condensed">
            <tr>
                <th>id</th>
                <th>排序</th>
                <th>分类名</th>
                <th>关键字</th>
                <th>描述</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            @foreach($data as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td width="5%">
                        <input class="form-control" type="text" name="{{ $v->id }}" value="{{ $v->sort }}">
                    </td>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->keywords }}</td>
                    <td>{{ $v->description }}</td>
                    <td>
                        @if(is_null($v->deleted_at))
                            √
                        @else
                            ×
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-success btn-sm"  href="{{ url('admin/category/edit', [$v->id]) }}">编辑</a> |
                        @if(is_null($v->deleted_at))
                            <a class="btn btn-warning btn-sm"  href="javascript:if(confirm('确定要删除吗?')) location='{{ url('admin/category/destroy', [$v->id]) }}'">删除</a>
                        @else
                            <a class="btn btn-info btn-sm"  href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/category/restore', [$v->id]) }}'">恢复</a>
                            |
                            <a class="btn btn-danger btn-sm"  href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/category/forceDelete', [$v->id]) }}'">彻底删除</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td>
                    <input class="btn btn-success" type="submit" value="排序">
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
@endsection
@section('my-js')
    <script>
        $(function(){
            layer.load(layer.open, {shade: 0.3});
            setTimeout(function () {
                layer.closeAll('loading');
            }, 1000);
        });
    </script>
@endsection
