<table class="table table-responsive" id="proyectos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Idzona</th>
        <th>Descripcion</th>
        <th>Presupuesto</th>
        <th>Fechainicio</th>
        <th>Fechafin</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($proyectos as $proyecto)
        <tr>
            <td>{!! $proyecto->nombre !!}</td>
            <td>{!! $proyecto->idZona !!}</td>
            <td>{!! $proyecto->descripcion !!}</td>
            <td>{!! $proyecto->presupuesto !!}</td>
            <td>{!! $proyecto->fechaInicio !!}</td>
            <td>{!! $proyecto->fechaFin !!}</td>
            <td>
                {!! Form::open(['route' => ['proyectos.destroy', $proyecto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('proyectos.show', [$proyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('proyectos.edit', [$proyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>