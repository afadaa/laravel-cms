<!-- Tittle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tittle', 'Judul:') !!}
    {!! Form::text('tittle', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Menu:') !!}
    <select name="parent_id" id="status" class="form-control" required>
        <option value="" selected disabled>Pilih Menu</option>
        @foreach ($parent as $menu)
            <option value="{{$menu->id}}">{{$menu->tittle}}</option>
        @endforeach
            <option value="">Parent</option>
    </select>
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12">
    {!! Form::label('desc', 'Deskripsi:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control', 'id'=> 'my-editor','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <select name="status" id="status" class="form-control" required>
        <option value="" selected disabled>Pilih Status</option>
        <option value="active">Aktif</option>
        <option value="inactive">Tidak Aktif</option>
    </select>
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
