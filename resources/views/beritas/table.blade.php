<div class="table-responsive">
    <table class="table" id="beritas-table">
        <thead>
        <tr>
            <th>Tittle</th>
            <th>Thumbnail</th>
            <th>Desc</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($beritas as $berita)
            <tr>
                <td>{{ $berita->tittle }}</td>
                <td><img @if (is_null($berita->photo)) src="/assets/img/elements/no-image.png" @else src="{{ $berita->photo }}" @endif alt="thumbnail" width="70%"> </td>
                <td>{{ Str::limit($berita->desc, 500) }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['beritas.destroy', $berita->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('beritas.show', [$berita->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('beritas.edit', [$berita->id]) }}"
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
