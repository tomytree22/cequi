<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Idzona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idZona', 'Idzona:') !!}
    {!! Form::select('idZona', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Presupuesto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('presupuesto', 'Presupuesto:') !!}
    {!! Form::text('presupuesto', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaInicio', 'Fechainicio:') !!}
    {!! Form::date('fechaInicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechafin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaFin', 'Fechafin:') !!}
    {!! Form::date('fechaFin', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('proyectos.index') !!}" class="btn btn-default">Cancel</a>
</div>
