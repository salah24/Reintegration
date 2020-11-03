<x-app-layout>
    <x-slot name="header">
       

    </x-slot>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if(Session::has('success'))
<div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
       @endif



    </x-app-layout>