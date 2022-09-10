<div class="table-responsive">
    <table class="table" id="pengumumen-table">
        <thead>
        <tr>
            <th>Tittle</th>
        <th>Desc</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pengumumen as $pengumuman)
            <tr>
                <td>{{ $pengumuman->tittle }}</td>
            <td>{{ $pengumuman->desc }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pengumumen.destroy', $pengumuman->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pengumumen.show', [$pengumuman->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pengumumen.edit', [$pengumuman->id]) }}"
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
