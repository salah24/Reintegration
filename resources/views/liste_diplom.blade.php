
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste de deplomés inscris') }}
        </h2>

    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(Session::has('success'))
     <div class="alert alert-info">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                   @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                    <thead>
                      <tr>
                        <th class="px-4 py-2">N°</th>
                        <th class="px-4 py-2">Nom</th>
                        <th class="px-4 py-2">Prenom</th>
                        <th class="px-4 py-2">Annee de diplome</th>
                        <th class="px-4 py-2">Univercité</th>
                        <th class="px-4 py-2">Actions</th>
                      </tr>
                      <tr>
                          @php
                              $n =1;
                          @endphp
                          @foreach ($diplom as $item)
                      <td class="px-4 py-2">{{$n++}}</td>
                        <td class="px-4 py-2">{{$item->nom}}</td>
                        <td class="px-4 py-2">{{$item->prenom}}</td>
                        <td class="px-4 py-2">{{$item->annee_obt}}</td>
                        <td class="px-4 py-2">{{$item->univ}}</td>
                        <th class="px-4 py-2"><a href="delete_diplom/{{$item->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></th>

</tr>
                        @endforeach



                    </thead>
                    <tbody>
                    </table>
                    {{$diplom->links()}}
                    </div>
                
                </div>
            
            </div>



</x-app-layout>
