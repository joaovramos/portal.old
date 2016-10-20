<?php
/**
 * Created by PhpStorm.
 * User: ramos
 * Date: 20/10/2016
 * Time: 00:02
 */
?>

@extends('template.principal')

    @section('pageName')

        <h1>Setores</h1>

    @endsection


    @section('content')

        <table class="table">


            <div class="col-md-3 col-sm-6 hero-feature">

                <thead>
                <tr>
                    <th>Setor</th>
                    <th>Empresa</th>

                </tr>
                </thead>
                @foreach($setores as $setor)
                    <tbody>
                    <tr>
                        <td>{{ $setor->nome }}</td>
                        <td>{{ $setor->id_empresa }}</td>
                        <td><a href="{{ action('SetorController@show', $setor) }}"><span class="glyphicon glyphicon-search"></span></a></td>
                        <td><a href="{{ action('SetorController@edit', $setor) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a href="{{ action('SetorController@destroy', $setor) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                    </tbody>
            @endforeach

            <!--<button href="{{ route('setor.create') }}" type="submit" class="btn btn-default">Adicionar</button>-->
                <button type="button" onclick="window.location='{{ route("setor.create") }}'">Adicinar</button>

            </div>

        </table>

    @endsection