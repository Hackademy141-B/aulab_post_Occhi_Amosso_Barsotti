<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Tag</th>
            <th scope="col">Q.ta articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{ $metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>
            @if ($metaType == 'tags')
            <td>
                
                
                <form action="{{route('admin.editTag', ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control pt-2 w-50 d-inline">
                    <button type="submit" class="btn btn-dark text-white"><i class="bi bi-arrow-clockwise"></i></button>
                </form>
            </td>
            <td>
                
                <form action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                   
                    <button type="submit" class="btn btn-danger text-white"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>
            @else
            <td>
                
                <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-dark text-white"><i class="bi bi-arrow-clockwise"></i></button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                   
                    <button type="submit" class="btn btn-danger text-white"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
            
        
    </tbody>
</table>
