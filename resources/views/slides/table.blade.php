<div class="table-responsive">
    <table class="table" id="slides-table">
        <thead>
        <tr>
            <th>Tittle</th>
        <th>Thumbnail</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($slides as $slide)
            <tr>
                <td>{{ $slide->tittle }}</td>
                <td><img src="{{ $slide->thumbnail }}" alt="" width="20%"></td>
                <td>{{ $slide->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['slides.destroy', $slide->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('slides.show', [$slide->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('slides.edit', [$slide->id]) }}"
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
