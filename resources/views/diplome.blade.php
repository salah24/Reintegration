<x-app-layout>
    <x-slot name="header">
        

    </x-slot>
<style>
    label{
        font-family: 'Amiri', serif;
    }
</style>

<div class="continer">
    <div class="row">
            <form class=" col-offset-2 col-md-8 ml-5 mt-5" style="margin-left: 300px !important"  action="{{route('diplome.store')}}" method="post">
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
                    <label for="diplom" class="pull-right">الشهادة المتحصل عليها<i class="text-danger">*</i></label>
                    <input type="text" class="form-control" name="diplom"  required>
                    </div>
                <div class="form-group">
                    <label for="annee" class="pull-right">سنة الحصول عليها<i class="text-danger">*</i></label>
                    <input type="text" class="form-control" name="annee"  required>
                    </div>
                    <div class="form-group">
                        <label for="univ" class="pull-right">المؤسسة الصادرة منها<i class="text-danger">*</i></label>
                        <input type="text" class="form-control" name="univ"  required>
                        </div>
                                   
            <div class="form-group">
                <label for="specialite" class="pull-right">التخصص المرغوب<i class="text-danger">*</i></label>
                <input type="text" class="form-control" name="specialite"  required>
                </div>
                <button class="btn btn-primary pull-right" style=" font-family: 'Amiri', serif;">إرسال</button>
            
            </form>
</div>
</div>



</x-app-layout>
