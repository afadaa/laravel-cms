<!-- Tittle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tittle', 'Tittle:') !!}
    {!! Form::text('tittle', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <select name="status" id="" class="form-control">
        <option value="" selected disabled>Pilih Status</option>
        <option value="Active">Aktif</option>
        <option value="Inactive">Tidak Aktif</option>
    </select>
</div>

<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Thumbnail:') !!}
    {!! Form::file('thumbnail', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
