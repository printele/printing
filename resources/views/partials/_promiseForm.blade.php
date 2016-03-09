<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'size' => '3x5']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Image:', ['class' => 'control-label']) !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>