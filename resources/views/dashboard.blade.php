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

 </style>

       <div class="card text-white bg-info mb-3 col-md-4 mr-5 ml-5 opacité ml-2" style="max-width: 18rem;">
         <div class="card-header center card_fs"><a class="lien" href="{{route('demmandes')}}">طلب إعادة إدماج</a> </div>
         <i class="fas fa-user-graduate"></i> 
         <div class="card-body">
         

         </div>
       </div>
       <div class="card text-white bg-danger mb-3 col-md-4 mr-5 opacité" style="max-width: 18rem;">
         <div class="card-header center card_fs "><a class="lien" href="{{route('diplome')}}">طلب تسجيل للتحضير لشهادة ليسانس ثانية</a></div>
         <i class="fas fa-user-graduate"></i>
         <div class="card-body">
           <h5 class="card-title cart_count_fs center">@php

           @endphp</h5>

         </div>
       </div>
       <div class="card bg-primary  mb-3 col-md-4 mr opacité" style="max-width: 18rem;">
         <div class="card-header center card_fs "><a class="lien" href="{{route('bac')}}">طلب تسجيل ببكالوريا جديدة قبل 2020 </a></div>
         <i class="fas fa-user-graduate"></i>
         <div class="card-body">
           <h5 class="card-title cart_count_fs center">@php

         @endphp</h5>

         </div>
       </div>
    


     </div></div>    </x-app-layout>
