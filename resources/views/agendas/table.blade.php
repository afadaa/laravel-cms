<div class="table-responsive">
    <table class="table" id="agendas-table">
        <thead>
        <tr>
            <th>Tittle</th>
        <th>Desc</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($agendas as $agenda)
            <tr>
                <td>{{ $agenda->tittle }}</td>
            <td>{{ $agenda->desc }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['agendas.destroy', $agenda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('agendas.show', [$agenda->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('agendas.edit', [$agenda->id]) }}"
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
