@extends('layouts.master')

@section('body')
    @foreach ($errors as $error)
        <p>{{ $error }}</p>
    @endforeach
    <div class="bg-gray-800 text-gray-300 p-6 relative md:ml-64">
        <h1 class="order-1 text-3xl font-extrabold tracking-tight mt-2">&#187; Nouveau Contrat</h1>
        <form name="new_stark_contrat_request_form" action="{{ route('agent.contrat.store') }}" method="post" id="newContrat"
            autocomplete="off">
            @csrf
            <div class="container bg-gray-700 shadow overflow-hidden sm:rounded-sm my-5 p-10">
                <h2 class="text-lg font-medium leading-6 my-4">
                    <i class="fa-solid fa-circle-user fa-lg"></i>
                    INFORMATIONS DU NOUVEL ADHÉRENT
                </h2>
                <div class="grid lg:grid-cols-10 lg:gap-8 gap-2">
                    <div class="md:col-span-2 col-span-1">
                        <livewire:fields.label1 for="genre" title="Genre" :is_required="true" />
                        <select id="genre" name="genre" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1 @error('genre') border-red-500 @enderror">
                            <option value="M">M</option>
                            <option value="Mme">Mme</option>
                        </select>
                        @error('genre')
                            <livewire:errors.field-error :message="$errors->first('genre')" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1">
                        <livewire:fields.label1 for="nom" title="Nom" :is_required="true" />
                        <input type="text" id="nom" name="nom" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1 @error('nom') border-red-500 @enderror"
                            value="{{ $contrat[0] }}" />
                        @error('nom')
                            <livewire:errors.field-error :message="$errors->first('nom')" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1">
                        <livewire:fields.label1 for="prenom" title="Prénom" :is_required="true" />
                        <input type="text" id="prenom" name="prenom" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1 @error('prenom') border-red-500 @enderror"
                            value="{{ $contrat[1] }}" />
                        @error('prenom')
                            <livewire:errors.field-error :message="$errors->first('prenom')" />
                        @enderror
                    </div>
                    <div class="grid md:grid-cols-6 lg:gap-8 md:col-span-8 col-span-3 grid-cols-1 gap-2 mt-6 relative">
                        <label class="md:absolute md:-top-7 block text-lg">Date de naissance</label>
                        <div class="md:col-span-2 col-span-1">
                            <input type="text" id="bday" name="bday" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1 @error('prenom') border-red-500 @enderror"
                            value="{{ explode('/' , $contrat[6])[0] }}" />
                            @error('bday')
                                <livewire:errors.field-error :message="$errors->first('bday')" />
                            @enderror
                        </div>
                        <div class="md:col-span-2 col-span-1">
                            <input type="text" id="bmonth" name="bmonth" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1 @error('prenom') border-red-500 @enderror"
                            value="{{ explode('/' , $contrat[6])[1] }}" />
                            @error('bmonth')
                                <livewire:errors.field-error :message="$errors->first('bmonth')" />
                            @enderror
                        </div>
                        <div class="md:col-span-2 col-span-1">
                            <input type="text" id="byear" name="byear" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1 @error('prenom') border-red-500 @enderror"
                            value="{{ explode('/' , $contrat[6])[2] }}" />
                            @error('byear')
                                <livewire:errors.field-error :message="$errors->first('byear')" />
                            @enderror
                        </div>
                        {{-- @error('date')
                            <livewire:errors.field-error message="Error" />
                        @enderror --}}
                    </div>
                    <div class="col-span-4 mg:col-span-3 col-span-1">
                        <livewire:fields.label1 for="adresse" title="Adresse" :is_required="true" />
                        <input type="text" id="adresse" name="adresse" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ $contrat[2] }}" />
                        @error('adresse')
                            <livewire:errors.field-error :message="$errors->first('adresse')" />
                        @enderror
                    </div>
                    <div class="md:col-span-2 col-span-1">
                        <livewire:fields.label1 for="zipcode" title="Code Postal" :is_required="true" />
                        <input type="text" id="zipcode" name="zipcode" required="required" autocomplete="off"
                            class="zipcode phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ $contrat[3] }}" />
                        @error('zipcode')
                            <livewire:errors.field-error :message="$errors->first('zipcode')" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1 self-end md:self-baseline">
                        <livewire:fields.label1 for="ville" title="Ville" :is_required="true" />
                        <input type="text" id="ville" name="ville" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ $contrat[4] }}" />
                        @error('ville')
                            <livewire:errors.field-error :message="$errors->first('ville')" />
                        @enderror
                    </div>
                    <div class="col-span-4 lg:col-span-3 col-span-1 ">
                        <livewire:fields.label1 for="pays" title="Pays" :is_required="true" />
                        <select id="pays" name="pays" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1">
                            <option value="France">France</option>
                        </select>
                        @error('pays')
                            <livewire:errors.field-error message="Error" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1 self-end md:self-baseline">
                        <label class="block text-lg required" for="mobile">Mobile</label>
                        <input type="tel" id="mobile" name="mobile" required="required" autocomplete="off"
                            class="mobile phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ $contrat[5] }}" />
                        @error('mobile')
                            <livewire:errors.field-error :message="$errors->first('mobile')" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1 self-end md:self-baseline">
                        <label class="block text-lg" for="phone">Téléphone
                            (Optionel)</label>
                        <input type="tel" id="phone" name="phone" autocomplete="off"
                            class="mobile2 phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1" value="{{ $contrat[5] }}" />
                    </div>
                    <div class="md:col-span-4 col-span-1 self-end md:self-baseline">
                        <label class="block text-lg required" for="mail">Mail</label>
                        <input type="email" id="mail" name="mail" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ $contrat[7] }}" />
                        @error('mail')
                            <livewire:errors.field-error :message="$errors->first('mail')" />
                        @enderror
                    </div>
                </div>
                <h2 class="text-lg font-medium leading-6 mt-12 mb-4">
                    <i class="fa-solid fa-credit-card fa-lg"></i>
                    MANDAT DE PRÉLÉVEMENT
                </h2>
                <div class="grid md:grid-cols-6 md:gap-6 grid-cols-1 gap-2">
                    <div class="md:col-span-3 col-span-1">
                        <label class="block text-lg required" for="iban">IBAN</label>
                        <input type="text" id="iban" name="iban" required="required" autocomplete="off"
                            class="iban phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ $contrat[8] }}" />
                        @error('iban')
                            <livewire:errors.field-error :message="$errors->first('iban')" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1">
                        <label class="block text-lg required" for="bic">BIC</label>
                        <input type="text" id="bic" name="bic" required="required" autocomplete="off"
                            class="bic phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ $contrat[9] }}" />
                        @error('bic')
                            <livewire:errors.field-error :message="$errors->first('bic')" />
                        @enderror
                    </div>
                </div>
                <h2 class="text-lg font-medium leading-6 mt-12 mb-4">
                    <i class="fa-solid fa-repeat fa-lg"></i>
                    TYPE DE CONTRAT
                </h2>
                <div class="">
                    <select name="type" class="w-full md:col-span-12 col-span-1 py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1">
                        <option value="cspe">cspe</option>
                        <option value="cspe-plus">cspe plus</option>
                    </select>
                    {{-- <input type="text" id="bic" name="bic" required="required" autocomplete="off"
                        class="bic phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                        value="{{ old('bic') }}" />
                    @error('bic')
                        <livewire:errors.field-error :message="$errors->first('bic')" />
                    @enderror --}}
                </div>
            </div>

            <div class="text-center w-full md:w-auto">
                <button type="submit" id="save" name="save" autocomplete="off"
                    class="py-2 px-10 border border-transparent text-xl font-medium rounded-sm text-white bg-gray-700 hover:bg-gray-600 focus:ring-offset-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">
                    Valider le contrat
                </button>
            </div>
        </form>
    </div>

    <script>
        var cleaveIban = new Cleave('.iban', {
            blocks: [4, 4, 4, 4, 4, 4, 3],
            uppercase: true,
        });

        var cleavePhone = new Cleave('.mobile2', {
            blocks: [2, 2, 2, 2, 2],
            numericOnly: true,
        });
        var cleaveMobile = new Cleave('.mobile', {
            blocks: [2, 2, 2, 2, 2],
            numericOnly: true,
        });
        var cleaveBic = new Cleave('.bic', {
            blocks: [11],
            uppercase: true,
        });
        var cleaveZipcode = new Cleave('.zipcode', {
            blocks: [5],
            numericOnly: true,
        });
    </script>
    </div>
@endsection
