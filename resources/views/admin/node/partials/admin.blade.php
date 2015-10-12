<a href="{{route('admin.node.toggle', $node->id )}}" class="btn btn-xs btn-default"><i class="fa {{ $node->active? 'fa-eye' : 'fa-eye-slash' }}"></i></a>&nbsp;
<a href="{{route('admin.node.edit', [ 'parent' => $node->id ])}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>&nbsp;
<a href="{{route('admin.element.index', ['node' => $node->id ])}}" class="btn btn-xs btn-info"><i class="fa fa-puzzle-piece"></i></a>&nbsp;
<a href="{{route('admin.node.create', [ 'parent' => $node->id ])}}" class="btn btn-xs btn-success"><i class="fa fa-caret-square-o-right"></i></a>&nbsp;
<a href="{{route('admin.node.create', [ 'parent' => $main->id ])}}" class="btn btn-xs btn-success"><i class="fa fa-caret-square-o-down"></i></a>&nbsp;

{{--<a href="{{route('admin.node.destroy', [ 'parent' => $main->id ])}}"><i class="fa fa-trash-o"></i></a>--}}


{!! Form::open(array('route' => array('admin.node.destroy', $node->id), 'method' => 'delete', 'style' => 'display:inline-block;')) !!}

<button type="submit" class="btn btn-xs btn-danger">
    <i class="fa fa-trash-o"></i>
</button>

{!! Form::close() !!}