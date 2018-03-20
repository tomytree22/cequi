<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $proyecto->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $proyecto->nombre !!}</p>
</div>

<!-- Idzona Field -->
<div class="form-group">
    {!! Form::label('idZona', 'Idzona:') !!}
    <p>{!! $proyecto->idZona !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $proyecto->descripcion !!}</p>
</div>

<!-- Presupuesto Field -->
<div class="form-group">
    {!! Form::label('presupuesto', 'Presupuesto:') !!}
    <p>{!! $proyecto->presupuesto !!}</p>
</div>

<!-- Fechainicio Field -->
<div class="form-group">
    {!! Form::label('fechaInicio', 'Fechainicio:') !!}
    <p>{!! $proyecto->fechaInicio !!}</p>
</div>

<!-- Fechafin Field -->
<div class="form-group">
    {!! Form::label('fechaFin', 'Fechafin:') !!}
    <p>{!! $proyecto->fechaFin !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $proyecto->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $proyecto->updated_at !!}</p>
</div>

