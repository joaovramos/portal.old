<?php
/**
 * Created by PhpStorm.
 * User: joao.ramos
 * Date: 11/10/2016
 * Time: 11:44
 */
?>

@extends('template.principal')

@section('content')

    <table class="table">


            <div class="col-md-3 col-sm-6 hero-feature">

                <thead>
                <tr>
                    <th>Empresa</th>
                    <th>CNPJ</th>

                </tr>
                </thead>
                @foreach($empresas as $empresa)
                <tbody>
                <tr>
                    <td>{{ $empresa->nome }}</td>
                    <td>{{ $empresa->cnpj }}</td>
                    <a href="#"><td class="glyphicon glyphicon-search"></td></a>
                    <a href="#"><td class="glyphicon glyphicon-remove"></td></a>
                </tr>
                </tbody>

            </div>

        @endforeach
    </table>

@endsection