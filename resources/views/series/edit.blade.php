<x-layout title="Editar Análise {!! $serie->id !!}">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" :update="true"/>
</x-layout>
