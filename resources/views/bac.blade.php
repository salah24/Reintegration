<x-app-layout>
    <x-slot name="header">
        

    </x-slot>


<div class="continer">
    <div class="row">
            <form class=" col-offset-2 col-md-8 ml-5 mt-5" style="margin-left: 300px !important"  action="{{route('bac.store')}}" method="post">
            @csrf
                <div class="form-group">
                    <label for="nom" class="pull-right">الإســــــم<i class="text-danger">*</i></label>
                    <input type="text" class="form-control" name="nom"  required>
                    </div>
                
                <div class="form-group">
                    <label for="prenom" class="pull-right">اللقـــــب<i class="text-danger">*</i></label>
                    <input type="text" class="form-control" name="prenom"  required>
                    </div>
            
                    <div class="form-group">
                        <label for="filiere" class="pull-right">شعبة البكالوريا<i class="text-danger">*</i></label>
                        <input type="text" class="form-control" name="filiere"  required>
                        </div>
                        
                <div class="form-group">
                    <label for="moyen" class="pull-right">معــدل البكالوريا<i class="text-danger">*</i></label>
                    <input type="text" class="form-control" name="moyen"  required>
                    </div>
                    <div class="form-group">
                        <label for="annee" class="pull-right">سنة الحصول عليها<i class="text-danger">*</i></label>
                        <input type="text" class="form-control" name="annee"  required>
                        </div>
                
                
                
                <div class="form-group">
                    <label for="specialite" class="pull-right">التخصص المرغوب<i class="text-danger">*</i></label>
                    <input type="text" class="form-control" name="specialite"  required>
                    </div>
                    <button class="btn btn-primary pull-right">إرسال</button>
            
            </form>
</div>
</div>



</x-app-layout>
