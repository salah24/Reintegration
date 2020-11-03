

    <div class="container" id="printableArea">
        <div class="row">
            <style>
p{
    display: inline;
    float:right;
    clear: right;
}

            </style>
       
        <img  width="100%" height="200px" src="{{asset('images/entete.png')}}">

                <div class="card" style="margin-left: 40px;margin-right:40px" >
                    <div class="card-body">
    
    
                        <div class="col-md-4">
                            Num d'inscription: <b>{{$reintegration->matricule}}</b><p>رقم التسجيل</p>
                        </div>
    
                            <div class="col-md-4">
                                Nom et Prénom : <b>{{$reintegration->nom}}{{$reintegration->prenom}}</b><p> اللقب والاسم</p>
                            </div>
    
                            <div class="col-md-4">
                                Date de naissance: <b>{{$reintegration->date_naiss}}</b><p> :تاريخ الميلاد  </p>
                            </div>
    
                            <div class="col-md-4">
                                Lieu de naissance: <b>{{$reintegration->lieu_naiss}}</b><p> :مكان الميلاد </p>
                                </div>
                            <div class="col-md-4">
                            Nationalité : <b>{{$reintegration->nationalite}}</b><p> :الجنسية</p>
      
                            </div>
                            <div class="col-md-4">
                                Adress: <b>{{$reintegration->adress}}</b><p>: العنوان  </p>
                            </div>
                            <div class="col-md-4">
                                Email(obligatoire) : <b>{{$reintegration->email_reintg}}</b><p> : البريد الإلكتروني  </p>
                            </div>
    
                            <div class="col-md-4">
                                Téléphone(obligatoire) : <b>{{$reintegration->tel}}</b><p> :  الهاتف  </p> 
                            </div> 
                            <div class="col-md-6">
                                Faculté: <b>{{$reintegration->libelle_fac}}</b> <p></p>: الكلية 
                            </div>
                            <div class="col-md-4">
                                Département: <b>{{$reintegration->libelle_dept}}</b><p> : القسم </p>
                            </div>   
                            <div class="col-md-4">
                            Cycle: <b>{{$reintegration->cycle}}</b><p> : الطور </p>
                            </div>      
                            <div class="col-md-4">
                                Année d'étude: <b>{{$reintegration->annee_etud}}</b><p>: سنة الدراسة</p>
                            </div>
                            <div class="col-md-4">
                                Domaine: <b>{{$reintegration->libelle_dom}}</b><p> : ميدان التكوين</p>  
                            </div>
                            <div class="col-md-4">
                                Filiere: <b>{{$reintegration->libelle_fil}}</b><p>: شعبة التكوين</p>
                            </div>
                            <div class="col-md-4">
                                Spécialité: <b>{{$reintegration->libelle_specia}}</b><p>:اختصاص </p>
                            </div>
                            <div class="col-md-4">
                                Année de premiere inscription à l'université: <b>{{$reintegration->annee_inscrip}}</b><p>:سنة أول تسجيل بالجامعة </p> 
                            </div>
                            <div class="col-md-4">
                                Année d'abandon des études: <b>{{$reintegration->annee_abond}}</b><p>:  سنة التخلي عن الدراسة </p> 
                            </div>
                            
                            <div class="col-md-4">
                                Motif d'abandon des études: <b>{{$reintegration->motif_abond}}</b><p>:سبب التخلي عن الدراسة  </p>
                            </div>
    
    
                        <br>
                        <p> <b></b></p>
                        <table class="table table-bordered">
    
    
                            <thead>
                                <tr>
                                    <th style="width: 30%" class="align-middle">
                                        <p align="left">راي رئيس القسم</p>
                                    </th>
                                    <th style="width: 30%" class="align-middle">
                                        <p align="center">رأي عميد الكلية  </p>
                                    </th>
    
    
                                    <th style="width:40%" class="align-middle">
                                        <p align="right">رأي نائب مدير الجامعة المكلف بالتكوين العالي  في الطورين الأول والثاني والتكوين المتواصل 
                                                                          والشهادات وكذا التكوين العالي في التدرج</p>
                                    </th>
                                </tr>
                            </thead>
    
    
                            <tbody>
                                <tr class="align-middle">
                                    <td><br><br><br>></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br><br>
                        <thead>
                                <tr>
                                    <th style="width: 30%" class="align-middle">
                                        <p align="left">: ..........................قالمة، في</p>
                                    </th>
                                    <th style="width: 30%" class="align-middle">
                                        <p align="left">  ...........................إمضاء المعني  </p>
                                    </th>
                                    </tr>
    
                                    </thead>
    
                        <br><br><br>
                        <div class="row">
                            <div style="width:100%" class="align-middle"align="right">
                            <b>: ملاحظات</b>
                            <br>
                            <b>المادة 34 من القرار رقم 711 المؤرخ في 03 نوفمبر 2011 التي تنص على ما يلي: في حالة التخلي عن الدراسة او الإقصاء، لا يرخص للطالب بإعادة-</b>
                            <br>
                            <b> .الإدماج إلا مرة واحدة خلال مساره الدراسي وذلك بعد دراسة ملفه من قبل الهيئات المعنية وحسب توفر الأماكن البيداغوجية </b>
                            <br>
                            <b>: يجب أن يرفق هذا الطلب بالوثائق الأتية </b> 
                            <br>
                            <b> ،طلب خطي-</b>
                            <br>
                            <b> ، آخر شهادة تسجيل بالجامعة-</b> 
                            <br>
                            <b> .مبرر التخلي عن الدراسة (في تقديم ملف طبي، على المعني التقدم به للمصادقة عليه من طرف طبيب الجامعة) -</b>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
   
       
    
        <!-- The Modal -->
      
    
    
    
    
    
    
    
    
    