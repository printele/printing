<div class="form-group">
    {!! Form::label('name', 'Product Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control flat-ui', 'placeholder' => 'Flyers']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Product Image:', ['class' => 'control-label']) !!}
    {!! Form::file('image', ['class' => 'form-control flat-ui']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Product Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', old('description'), ['class' => 'form-control flat-ui',
    'placeholder' => 'Summary of services provided', 'size' => '3x5']) !!}
</div>
<div class="form-group"></div>