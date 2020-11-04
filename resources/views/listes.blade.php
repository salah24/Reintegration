<x-app-layout>
    <x-slot name="header"><!--
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">

         </h2> -->

     </x-slot> <div class="container bg-image"><div class="row mt-5">
 <style>
     .center{
         text-align: center;
             }
     .card_fs{
         font-size: 20px;
         opacity: 1 !important;
     }
     .cart_count_fs{
         font-size: 60px
     }
     .bg-image{
         background-image: url('image/univ1.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
         height: 400px;
         width: 100%;
         opacity: 0.8;
         margin-top: -50px;
     }
     .lien{
color: #fff;
text-decoration: none ! 
     }
     .lien:hover{
color:#f5dbdb;
     }
     .opacité{
         opacity: 0.9;
         margin-top: 90px;
     }
     .font{
      font-family: 'Amiri', serif;
      font-size: 30px
     }

 </style>

       <div class="card text-white bg-success  mb-3 col-md-4 mr-5 ml-5 opacité ml-2" style="max-width: 18rem;">
         <div class="card-header center card_fs"><a class="lien font" href="{{route('allReintegration')}}">Liste des integrants </a></div>
        
         <div class="card-body">
             <p class="lead center" style="font-size: 40px">
       @php
           $reintegration = DB::table('reintegration')->count();
           echo $reintegration;
       @endphp
</p>
         </div>
       </div>
       <div class="card text-white bg-danger mb-3 col-md-4 mr-5 opacité" style="max-width: 18rem;">
         <div class="card-header center card_fs "><a class="lien font" href="{{route('liste_diplom')}}">Liste de 2eme Diplome</a></div>

         <div class="card-body">
         
            <p class="lead center" style="font-size: 40px">
                @php
                    $reintegration = DB::table('Bacheliers')->count();
                    echo $reintegration;
                @endphp
         </p>

         </div>
       </div>
       <div class="card bg-primary  mb-3 col-md-4 mr opacité" style="max-width: 18rem;">
         <div class="card-header center card_fs "><a class="lien font" href="{{route('liste_bac')}}">Liste de Bacheliers </a></div>
        
         <div class="card-body">
         
            <p class="lead center" style="font-size: 40px;color:#fff">
                @php
                    $reintegration = DB::table('diploms')->count();
                    echo $reintegration;
                @endphp
         </p>

         </div>
       </div>
    


     </div></div>    </x-app-layout>
