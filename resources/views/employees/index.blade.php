@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Empleados</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped employees_table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Fecha Contratacion</th>
                                <th scope="col">Salario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                                <th>{{$employee->first_name}}</th>
                                <td>{{$employee->last_name}}</td>
                                <td>{{$employee->phone_number}}</td>
                                <td>{{$employee->hire_date}}</td>
                                <td>{{$employee->salary}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
