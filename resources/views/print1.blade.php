<x-app-layout>
    <x-slot name="header">
       
<style>

    .center{
        display: inline-flex;
        margin: auto !important;
    }
</style>
    </x-slot>
    <div class="container"><div class="row">
        
        <div class="col-md-12 ">
            <img src="{{asset('images/merci.jpg')}}" width="600px%" height="300px" class="mt-5 mb-5" style="margin: auto">
            <a class="btn btn-success form-control mb-5" href="{{route('print')}}" style="margin:auto !important"><i class="fa fa-print mr-3" style="font-size: 20px"></i>Imprimer la formulaire </a>

         </div>
</div>

    </div>
</x-app-layout>