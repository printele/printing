<div class="clearfix">
    <div class="col-lg-4">
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
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('formate', 'Format:', ['class' => 'control-label']) !!}
            {!! Form::textarea('formate', old('formate'), ['class' => 'form-control', 'size' => '3x3']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('print', 'Print:', ['class' => 'control-label']) !!}
            {!! Form::textarea('print', old('print'), ['class' => 'form-control', 'size' => '3x3']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('paper', 'Paper:', ['class' => 'control-label']) !!}
            {!! Form::textarea('paper', old('paper'), ['class' => 'form-control', 'size' => '3x3']) !!}
        </div>


    </div>
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('quantity', 'Quantity:', ['class' => 'control-label']) !!}
            {!! Form::textarea('quantity', old('quantity'), ['class' => 'form-control', 'size' => '3x3']) !!}
        </div>
    </div>
</div>
