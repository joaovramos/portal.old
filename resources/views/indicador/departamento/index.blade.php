<?php
/**
 * Created by PhpStorm.
 * User: joao.ramos
 * Date: 11/10/2016
 * Time: 11:44
 */
?>

@extends('template.principal')

@section('pageName')

    <h1>Departamento</h1>

@endsection

@section('content')

    <table class="table">


            <div class="col-md-3 col-sm-6 hero-feature">

                <thead>
                <tr>
                    <th>Departamento</th>
                    <th>Empresa</th>

                </tr>
                </thead>
                @foreach($departamentos as $departamento)
                <tbody>
                <tr>
                    <td>{{ $departamento->nome }}</td>
                    <td>{{ $departamento->id_empresa }}</td>
                    <td><a href="{{ action('DepartamentoController@show', $departamento) }}"><span class="glyphicon glyphicon-search"></span></a></td>
                    <td><a href="{{ action('DepartamentoController@edit', $departamento) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td><a href="{{ action('DepartamentoController@destroy', $departamento) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
                </tbody>
            @endforeach

            <!--<button href="{{ route('departamento.create') }}" type="submit" class="btn btn-default">Adicionar</button>-->
                <button type="button" onclick="window.location='{{ route("departamento.create") }}'">Adicinar</button>

            </div>

    </table>

@endsection