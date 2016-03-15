<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'size' => '3x5']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Image:', ['class' => 'control-label']) !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('url', 'Website URL', ['class' => 'control-label']) !!}
    {!! Form::url('url', old('url'), ['class' => 'form-control']) !!}
</div>