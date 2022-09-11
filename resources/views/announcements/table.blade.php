<div class="table-responsive">
    <table class="table" id="announcements-table">
        <thead>
        <tr>
            <th>Tittle</th>
            <th>Desc</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($announcements as $announcement)
            <tr>
                <td>{{ $announcement->tittle }}</td>
                <td>{!! Str::limit($announcement->desc, 300) !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['announcements.destroy', $announcement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('announcements.show', [$announcement->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('announcements.edit', [$announcement->id]) }}"
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
