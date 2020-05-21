<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Categorias</h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            @foreach($categories as $category)
            <li class="list-group-item">
                <span class="badge">{{ $category->count()}}</span>
                {{$category->name}}
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Tags</h3>
    </div>
    <div class="panel-body">
        @foreach($tags as $tag)
            <span class="label label-default">{{$tag->name}}</span>
        @endforeach
    </div>
</div>
