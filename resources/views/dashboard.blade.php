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
         <div class="card-header center card_fs"><a class="lien font" href="{{route('demmandes')}}">طلب إعادة إدماج<br><br> </a></div>
        
         <div class="card-body">
          <i class=" fa fa-share" style="font-size: 60px;margin-left: 80px"></i> 

         </div>
       </div>
       <div class="card text-white bg-danger mb-3 col-md-4 mr-5 opacité" style="max-width: 18rem;">
         <div class="card-header center card_fs "><a class="lien font" href="{{route('diplome')}}">طلب تسجيل للتحضير لشهادة ليسانس ثانية</a></div>

         <div class="card-body">
          <i class="fa fa-graduation-cap" style="font-size: 60px;margin-left: 70px"></i>
           <h5 class="card-title cart_count_fs center">@php

           @endphp</h5>

         </div>
       </div>
       <div class="card bg-primary  mb-3 col-md-4 mr opacité" style="max-width: 18rem;">
         <div class="card-header center card_fs "><a class="lien font" href="{{route('bac')}}">طلب تسجيل ببكالوريا جديدة قبل 2020 </a></div>
        
         <div class="card-body">
          <i class="fa fa-university" style="font-size: 60px;margin-left: 70px;color:#fff"></i>
           <h5 class="card-title cart_count_fs center">@php

         @endphp</h5>

         </div>
       </div>
    


     </div></div>    </x-app-layout>
