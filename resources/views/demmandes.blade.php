<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Demmandes') }}
        </h2>

    </x-slot>

    <div class="py-12 container">
        @if(Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
               @endif

        <form class="container" method="post" action="{{route('reintegration.store')}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nom<i class="text-danger">*</i></label>
                <input type="text" class="form-control" name="nom"  required>
                </div>
            </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="Prenom">Prénom<i class="text-danger">*</i></label>
                        <input type="text" class="form-control" name="prenom" required>
              </div>
            </div>
        </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="num_inscription">Numéro d'inscription(Matricule)<i
                                    class="text-danger">*</i></label>
                        <input type="text" id="matricule" name="matricule"
                               onblur="getSuggestion(this.value)" class="form-control"

                               required>
                        <div id="suggestion"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputBirthday">Date de naissance<i
                                    class="text-danger">*</i></label>
                        <input type="date" name="date_naiss" class="form-control" id="InputBirthday"
                               max="<?php
                               $age = 18;
                               $date = date("Y-m-d");
                               $valid_date = strtotime($date) - $age * 31536000;
                               echo date('Y-m-d', $valid_date); ?>" required>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputBirthday">Lieu de naissance<i
                            class="text-danger">*</i></label>
                        <input type="text" name="lieu_naiss" class="form-control"
                               placeholder="Lieu de naissance(Comm,Wil,Code postal)"
                               required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputBirthday">Nationnalité<i
                            class="text-danger">*</i></label>
                        <select class="custom-select" name="nationalite" required>
                        <option value="" selected="selected">Nationnalité</option>
                            <option value="Algérienne"> Algérienne</option>
                            <option value="Angolaise"> Angolaise</option>
                            <option value="Bahreinienne"> Bahreinienne</option>
                            <option value="Béninoise"> Béninoise</option>
                            <option value="Bissau-Guinéenne"> Bissau-Guinéenne</option>
                            <option value="Bosnienne"> Bosnienne</option>
                            <option value="Botswanaise"> Botswanaise</option>
                            <option value="Burkinabée"> Burkinabée</option>
                            <option value="Burundaise"> Burundaise</option>
                            <option value="Camerounaise"> Camerounaise</option>
                            <option value="Cap-verdienne"> Cap-verdienne</option>
                            <option value="CAFCentrafricaine"> CAFCentrafricaine</option>
                            <option value="Chinoise"> Chinoise</option>
                            <option value="Comorienne"> (Comores)</option>
                            <option value="Congolaise-Brazzaville"> (Congolaise-Brazzaville)</option>
                            <option value="Congolaise-Kinshasa"> (Congolaise-Kinshasa)</option>
                            <option value="Cubaine"> Cubaine</option>
                            <option value="Djiboutienne">Djiboutienne</option>
                            <option value="Égyptienne"> Égyptienne</option>
                            <option value="Émirienne"> Émirienne</option>
                            <option value="Équato-guineenne"> Équato-guineenne</option>
                            <option value="Équatorienne"> Équatorienne</option>
                            <option value="Érythréenne"> Érythréenne</option>
                            <option value="Éthiopienne">Éthiopienne</option>
                            <option value="Française"> Française</option>
                            <option value="Gabonaise"> Gabonaise</option>
                            <option value="Gambienne"> Gambienne</option>
                            <option value="Ghanéenne"> Ghanéenne</option>
                            <option value="Guatémaltèque"> Guatémaltèque</option>
                            <option value="Guinéenne"> Guinéenne</option>
                            <option value="Guyanienne"> Guyanienne</option>
                            <option value="Irakienne"> Irakienne</option>
                            <option value="Iranienne"> Iranienne</option>
                            <option value="Ivoirienne"> Ivoirienne</option>
                            <option value="Jordanienne"> Jordanienne</option>
                            <option value="Kenyane"> Kenyane</option>
                            <option value="Koweïtienne"> Koweïtienne</option>
                            <option value="Libanaise"> Libanaise</option>
                            <option value="Libérienne"> Libérienne</option>
                            <option value="Libyenne"> Libyenne</option>
                            <option value="Malawienne"> Malawienne</option>
                            <option value="Malgache"> Malgache</option>
                            <option value="Maliennes"> Maliennes</option>
                            <option value="Marocaine"> Marocaine</option>
                            <option value="Marshallaise"> Marshallaise</option>
                            <option value="Mauricienne">Mauricienne</option>
                            <option value="Mauritanienne"> Mauritanienne</option>
                            <option value="Mozambicaine"> Mozambicaine</option>
                            <option value="Namibienne"> Namibienne</option>
                            <option value="Nigériane"> Nigériane</option>
                            <option value="Nigérienne"> Nigérienne</option>
                            <option value="Omanaise"> Omanaise</option>
                            <option value="Ougandaise"> Ougandaise</option>
                            <option value="Palestinienne"> Palestinienne</option>
                            <option value="Qatarienne"> Qatarienne</option>
                            <option value="Rwandaise">Rwandaise</option>
                            <option value="Salvadorienne"> Salvadorienne</option>
                            <option value="Saoudienne"> Saoudienne</option>
                            <option value="Sénégalaise"> Sénégalaise</option>
                            <option value="Seychelloise"> Seychelloise</option>
                            <option value="Somalienne"> Somalienne</option>
                            <option value="Soudanaise"> Soudanaise</option>
                            <option value="Sud-Africaine"> Sud-Africaine</option>
                            <option value="Sud-Soudanaise"> Sud-Soudanaise</option>
                            <option value="Syrienne"> Syrienne</option>
                            <option value="Tanzanienne"> Tanzanienne</option>
                            <option value="Tchadienne"> Tchadienne</option>
                            <option value="Togolaise"> Togolaise</option>
                            <option value="Tunisienne"> Tunisienne</option>
                            <option value="Turque"> Turque</option>
                            <option value="Yéménite"> Yéménite</option>
                            <option value="Zambienne"> Zambienne</option>
                            <option value="Zimbabwéenne"> Zimbabwéenne</option>
                        </select>

                    </div>
                </div>
            </div>
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="InputBirthday">Adresse<i
                            class="text-danger">*</i></label>
                        <input type="text" id="Adresse" name="adresse"
                               class="form-control" placeholder="Adresse"
                               required>
                    </div>



                    <div class="form-group col-md-6">
                        <label for="InputBirthday">Email<i
                            class="text-danger">*</i></label>
                        <input type="email" name="email_reintg" class="form-control" id="email_reintg" required
                               placeholder="Email" >
                    </div>

             </div>

                           <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="InputBirthday">Télephone<i
                            class="text-danger">*</i></label>
                        <input type="text" name="tel" class="form-control"
                               placeholder="Télephone" id="telephone"
                               required>
                    </div>
                </div>

                    <div class="form-group col-md-4">
                      <label for="InputBirthday">Annee d'etude<i
                    class="text-danger">*</i></label>

                        <input type="year" name="annee_etud" class="form-control" required >
                        <input type="hidden" name="id_user" value="{{Auth()->user()->id}}" class="form-control" required >

                    </div>
<div class="form-group col-md-4">
                          <label for="InputBirthday">Cycle<i
                        class="text-danger">*</i></label>
                          <input type="text" name="cycle" class="form-control"required placeholder="Année">
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="InputBirthday">Domaine<i
                                class="text-danger">*</i></label>

                                <select name="domaine" id="form-control" class="form-control">
                                  @foreach ($domain as $item)
                                    <option value="{{$item->abbreviation_dom}}" >{{$item->libelle_dom}}</option>

                                   @endforeach

                                </select>



                        </div>
                    </div>

                        <div class="form-group col-md-12">
                          <label for="InputBirthday">Departement<i
                        class="text-danger">*</i></label>

                        <select name="dept" id="form-control" class="form-control">
                            @foreach ($dept as $item)
                              <option value="{{$item->abbreviation_dept}}" >{{$item->libelle_dept}}</option>

                             @endforeach

                          </select>

                        </div>


                         <div class="form-group col-md-12">
                              <label for="InputBirthday">Faculte<i class="text-danger">*</i></label>
                              <select name="fac" id="form-control" id="faculte" class="form-control">
                                @foreach ($faculte as $item)
                                  <option value="{{$item->abbreviation_fac}}">{{$item->libelle_fac}}</option>

                                 @endforeach

                              </select>




                        </div>



                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="InputBirthday">Filiere<i
                                    class="text-danger">*</i></label>
                                    <select name="fil" id="form-control" class="form-control">
                                        @foreach ($filiere as $item)
                                          <option value="{{$item->abbreviation_fil}}">{{$item->libelle_fil}}</option>

                                         @endforeach

                                      </select>

                            </div>
                        </div>

                            <div class="form-group col-md-12">
                              <label for="InputBirthday">Specialite<i
                            class="text-danger">*</i></label>
                            <select name="specialite" id="form-control" class="form-control">
                                @foreach ($specialite as $item)
                                  <option value="{{$item->abbreviation_sp}}">{{$item->libelle_specia}}</option>

                                 @endforeach

                              </select>

                            </div>



                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputBirthday">Année de premiere inscription à l'université<i
                            class="text-danger">*</i></label>
                        <input  name="annee_inscrip" class="form-control"
                                id="annee_inscrip"
                               required>
                    </div>
                </div>

                    <div class="form-group col-md-6">
                      <label for="InputBirthday">Année d'abandon des études<i
                    class="text-danger">*</i></label>

                        <input  name="annee_abond" class="form-control" required >
                    </div>


<div class="form-group col-md-12">
                          <label for="InputBirthday">Motif d'abandon des études<i class="text-danger">*</i></label>
                          <textarea type="text" name="motif_abond" rows="5" class="form-control"  required></textarea>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit">Ajouter</button>
          </form>
        </div>



</x-app-layout>
