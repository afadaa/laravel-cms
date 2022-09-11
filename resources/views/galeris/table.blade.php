<div class="table-responsive">
    <table class="table" id="galeris-table">
        <thead>
        <tr>
            <th>Tittle</th>
        <th>Photo</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($galeris as $galeri)
            <tr>
                <td>{{ $galeri->tittle }}</td>
                <td><img src="{{ $galeri->photo }}" alt="" width="20%"></td>
                <td width="120">
                    {!! Form::open(['route' => ['galeris.destroy', $galeri->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('galeris.show', [$galeri->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('galeris.edit', [$galeri->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
