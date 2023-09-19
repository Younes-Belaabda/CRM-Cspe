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
                            value="{{ old('nom') }}" />
                        @error('nom')
                            <livewire:errors.field-error :message="$errors->first('nom')" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1">
                        <livewire:fields.label1 for="prenom" title="Prénom" :is_required="true" />
                        <input type="text" id="prenom" name="prenom" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1 @error('prenom') border-red-500 @enderror"
                            value="{{ old('prenom') }}" />
                        @error('prenom')
                            <livewire:errors.field-error :message="$errors->first('prenom')" />
                        @enderror
                    </div>
                    <div class="grid md:grid-cols-6 lg:gap-8 md:col-span-8 col-span-3 grid-cols-1 gap-2 mt-6 relative">
                        <label class="md:absolute md:-top-7 block text-lg">Date de naissance</label>
                        <div class="md:col-span-2 col-span-1">
                            <select id="bday" name="bday" required="required"
                                class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                                value="{{ old('bday') }}">
                                <option value="" selected="selected">Jour</option>
                                <option @selected(old('bday') == 1) value="1">1</option>
                                <option @selected(old('bday') == 2) value="2">2</option>
                                <option @selected(old('bday') == 3) value="3">3</option>
                                <option @selected(old('bday') == 4) value="4">4</option>
                                <option @selected(old('bday') == 5) value="5">5</option>
                                <option @selected(old('bday') == 6) value="6">6</option>
                                <option @selected(old('bday') == 7) value="7">7</option>
                                <option @selected(old('bday') == 8) value="8">8</option>
                                <option @selected(old('bday') == 9) value="9">9</option>
                                <option @selected(old('bday') == 10) value="10">10</option>
                                <option @selected(old('bday') == 11) value="11">11</option>
                                <option @selected(old('bday') == 12) value="12">12</option>
                                <option @selected(old('bday') == 13) value="13">13</option>
                                <option @selected(old('bday') == 14) value="14">14</option>
                                <option @selected(old('bday') == 15) value="15">15</option>
                                <option @selected(old('bday') == 16) value="16">16</option>
                                <option @selected(old('bday') == 17) value="17">17</option>
                                <option @selected(old('bday') == 18) value="18">18</option>
                                <option @selected(old('bday') == 19) value="19">19</option>
                                <option @selected(old('bday') == 20) value="20">20</option>
                                <option @selected(old('bday') == 21) value="21">21</option>
                                <option @selected(old('bday') == 22) value="22">22</option>
                                <option @selected(old('bday') == 23) value="23">23</option>
                                <option @selected(old('bday') == 24) value="24">24</option>
                                <option @selected(old('bday') == 25) value="25">25</option>
                                <option @selected(old('bday') == 26) value="26">26</option>
                                <option @selected(old('bday') == 27) value="27">27</option>
                                <option @selected(old('bday') == 28) value="28">28</option>
                                <option @selected(old('bday') == 29) value="29">29</option>
                                <option @selected(old('bday') == 30) value="30">30</option>
                                <option @selected(old('bday') == 31) value="31">31</option>
                            </select>
                            @error('bday')
                                <livewire:errors.field-error :message="$errors->first('bday')" />
                            @enderror
                        </div>
                        <div class="md:col-span-2 col-span-1">
                            <select id="bmonth" name="bmonth" required="required"
                                class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1">
                                <option value="" selected="selected">Mois</option>
                                <option value="1" @selected(old('bmonth') == 1)>janv.</option>
                                <option value="2" @selected(old('bmonth') == 2)>févr.</option>
                                <option value="3" @selected(old('bmonth') == 3)>mars</option>
                                <option value="4" @selected(old('bmonth') == 4)>avr.</option>
                                <option value="5" @selected(old('bmonth') == 5)>mai</option>
                                <option value="6" @selected(old('bmonth') == 6)>juin</option>
                                <option value="7" @selected(old('bmonth') == 7)>juil.</option>
                                <option value="8" @selected(old('bmonth') == 8)>août</option>
                                <option value="9" @selected(old('bmonth') == 9)>sept.</option>
                                <option value="10" @selected(old('bmonth') == 10)>oct.</option>
                                <option value="11" @selected(old('bmonth') == 11)>nov.</option>
                                <option value="12" @selected(old('bmonth') == 12)>déc.</option>
                            </select>
                            @error('bmonth')
                                <livewire:errors.field-error :message="$errors->first('bmonth')" />
                            @enderror
                        </div>
                        <div class="md:col-span-2 col-span-1">
                            <select id="byear" name="byear" required="required"
                                class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1">
                                <option value="" selected="selected">Année</option>
                                <option value="2005" @selected(old('byear') == 2005)>2005</option>
                                <option value="2004" @selected(old('byear') == 2004)>2004</option>
                                <option value="2003" @selected(old('byear') == 2003)>2003</option>
                                <option value="2002" @selected(old('byear') == 2002)>2002</option>
                                <option value="2001" @selected(old('byear') == 2001)>2001</option>
                                <option value="2000" @selected(old('byear') == 2000)>2000</option>
                                <option value="1999" @selected(old('byear') == 1999)>1999</option>
                                <option value="1998" @selected(old('byear') == 1998)>1998</option>
                                <option value="1997" @selected(old('byear') == 1997)>1997</option>
                                <option value="1996" @selected(old('byear') == 1996)>1996</option>
                                <option value="1995" @selected(old('byear') == 1995)>1995</option>
                                <option value="1994" @selected(old('byear') == 1994)>1994</option>
                                <option value="1993" @selected(old('byear') == 1993)>1993</option>
                                <option value="1992" @selected(old('byear') == 1992)>1992</option>
                                <option value="1991" @selected(old('byear') == 1991)>1991</option>
                                <option value="1990" @selected(old('byear') == 1990)>1990</option>
                                <option value="1989" @selected(old('byear') == 1989)>1989</option>
                                <option value="1988" @selected(old('byear') == 1988)>1988</option>
                                <option value="1987" @selected(old('byear') == 1987)>1987</option>
                                <option value="1986" @selected(old('byear') == 1986)>1986</option>
                                <option value="1985" @selected(old('byear') == 1985)>1985</option>
                                <option value="1984" @selected(old('byear') == 1984)>1984</option>
                                <option value="1983" @selected(old('byear') == 1983)>1983</option>
                                <option value="1982" @selected(old('byear') == 1982)>1982</option>
                                <option value="1981" @selected(old('byear') == 1981)>1981</option>
                                <option value="1980" @selected(old('byear') == 1980)>1980</option>
                                <option value="1979" @selected(old('byear') == 1979)>1979</option>
                                <option value="1978" @selected(old('byear') == 1978)>1978</option>
                                <option value="1977" @selected(old('byear') == 1977)>1977</option>
                                <option value="1976" @selected(old('byear') == 1976)>1976</option>
                                <option value="1975" @selected(old('byear') == 1975)>1975</option>
                                <option value="1974" @selected(old('byear') == 1974)>1974</option>
                                <option value="1973" @selected(old('byear') == 1973)>1973</option>
                                <option value="1972" @selected(old('byear') == 1972)>1972</option>
                                <option value="1971" @selected(old('byear') == 1971)>1971</option>
                                <option value="1970" @selected(old('byear') == 1970)>1970</option>
                                <option value="1969" @selected(old('byear') == 1969)>1969</option>
                                <option value="1968" @selected(old('byear') == 1968)>1968</option>
                                <option value="1967" @selected(old('byear') == 1967)>1967</option>
                                <option value="1966" @selected(old('byear') == 1966)>1966</option>
                                <option value="1965" @selected(old('byear') == 1965)>1965</option>
                                <option value="1964" @selected(old('byear') == 1964)>1964</option>
                                <option value="1963" @selected(old('byear') == 1963)>1963</option>
                                <option value="1962" @selected(old('byear') == 1962)>1962</option>
                                <option value="1961" @selected(old('byear') == 1961)>1961</option>
                                <option value="1960" @selected(old('byear') == 1960)>1960</option>
                                <option value="1959" @selected(old('byear') == 1959)>1959</option>
                                <option value="1958" @selected(old('byear') == 1958)>1958</option>
                                <option value="1957" @selected(old('byear') == 1957)>1957</option>
                                <option value="1956" @selected(old('byear') == 1956)>1956</option>
                                <option value="1955" @selected(old('byear') == 1955)>1955</option>
                                <option value="1954" @selected(old('byear') == 1954)>1954</option>
                                <option value="1953" @selected(old('byear') == 1953)>1953</option>
                                <option value="1952" @selected(old('byear') == 1952)>1952</option>
                                <option value="1951" @selected(old('byear') == 1951)>1951</option>
                                <option value="1950" @selected(old('byear') == 1950)>1950</option>
                                <option value="1949" @selected(old('byear') == 1949)>1949</option>
                                <option value="1948" @selected(old('byear') == 1948)>1948</option>
                            </select>
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
                            value="{{ old('adresse') }}" />
                        @error('adresse')
                            <livewire:errors.field-error :message="$errors->first('adresse')" />
                        @enderror
                    </div>
                    <div class="md:col-span-2 col-span-1">
                        <livewire:fields.label1 for="zipcode" title="Code Postal" :is_required="true" />
                        <input type="text" id="zipcode" name="zipcode" required="required" autocomplete="off"
                            class="zipcode phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ old('zipcode') }}" />
                        @error('zipcode')
                            <livewire:errors.field-error :message="$errors->first('zipcode')" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1 self-end md:self-baseline">
                        <livewire:fields.label1 for="ville" title="Ville" :is_required="true" />
                        <input type="text" id="ville" name="ville" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ old('ville') }}" />
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
                            value="{{ old('mobile') }}" />
                        @error('mobile')
                            <livewire:errors.field-error :message="$errors->first('mobile')" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1 self-end md:self-baseline">
                        <label class="block text-lg" for="phone">Téléphone
                            (Optionel)</label>
                        <input type="tel" id="phone" name="phone" autocomplete="off"
                            class="mobile2 phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1" />
                    </div>
                    <div class="md:col-span-4 col-span-1 self-end md:self-baseline">
                        <label class="block text-lg required" for="mail">Mail</label>
                        <input type="email" id="mail" name="mail" required="required" autocomplete="off"
                            class="phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ old('mail') }}" />
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
                            value="{{ old('iban') }}" />
                        @error('iban')
                            <livewire:errors.field-error :message="$errors->first('iban')" />
                        @enderror
                    </div>
                    <div class="md:col-span-3 col-span-1">
                        <label class="block text-lg required" for="bic">BIC</label>
                        <input type="text" id="bic" name="bic" required="required" autocomplete="off"
                            class="bic phone w-full py-2 px-3 placeholder-gray-700 bg-gray-500 rounded-sm border border-solid border-gray-900 focus:ring-offset-gray-700 focus:border-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 outline-none my-1"
                            value="{{ old('bic') }}" />
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
