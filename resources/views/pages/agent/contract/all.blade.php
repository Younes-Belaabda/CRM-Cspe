@extends('layouts.master')

@section('body')
    <div class="bg-gray-700 text-gray-300 p-6 relative md:ml-64 min-h-screen overflow-x-hidden">
        <a href="{{ route('agent.contrat.create') }}">
            <button
                class="md:absolute right-12 top-10 w-auto py-2 px-4 block ml-auto md:ml-0 mr-0 md:mr-5 rounded-md shadow-lg border border-transparent text-md font-bold rounded-sm text-white bg-red-900 hover:bg-red-800 focus:ring-offset-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-900">
                <i class="fa-solid fa-plus"></i> Nouveau Contrat
            </button>
        </a>
        <div class="text-3xl">{{ Auth::user()->name }}</div>
        <div>&#187; Mes contrats</div>
        <form name="search_form" method="post" class="flex flex-row items-stretch h-12 my-2 md:my-5">
            <input type="text" id="search_form_search" name="search_form[search]"
                placeholder="Rechercher un contrat ou un groupe de contrats..." class="w-full rounded-l-md px-4" />
            <button type="submit" id="search_form_submit" name="search_form[submit]"
                class="font-medium rounded-r-md px-4 text-white bg-red-900 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-900">Rechercher</button>
            <input type="hidden" id="search_form__token" name="search_form[_token]"
                value="a4c11.ZNwbm7e7rADicHb__yWjBmd0HogFLcTUwb6QqHNdAF4.L-V-6PPkmnSTQyyciHf6fwY-VMJaHL2dkf_dmQRvcQo8qmL65tfmb4EaBQ" />
        </form>
        {{-- <div class="flex flex-col">
            <p>Trier par :</p>
            <ul class="list-none flex gap-4 flex-wrap flex-row mt-2 space-y-0 justify-start">
                <li class="flex justify-center items-center">
                    <a
                        class="sortable"href="/salesman/stark/contracts?sort=c.num_contrat&amp;direction=desc&amp;page=1"title="N° Contrat">
                        <p
                            class="bg-red-800 py-2 px-4 shadow-lg border border-transparent text-sm font-bold rounded-md text-white hover:bg-red-900 focus:ring-offset-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-800">
                            N° Contrat
                        </p>
                    </a>

                </li>
                <li class="flex justify-center items-center">
                    <a
                        class="desc"href="/salesman/stark/contracts?sort=c.created&amp;direction=asc&amp;page=1"title="Date">
                        <p
                            class="bg-red-900 py-2 px-4 shadow-lg border border-transparent text-sm font-bold rounded-md text-white hover:bg-red-900 focus:ring-offset-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-800">
                            Date
                        </p>
                    </a>

                </li>
                <li class="flex justify-center items-center">
                    <a
                        class="sortable"href="/salesman/stark/contracts?sort=c.status&amp;direction=desc&amp;page=1"title="Status">
                        <p
                            class="bg-red-800 py-2 px-4 shadow-lg border border-transparent text-sm font-bold rounded-md text-white hover:bg-red-900 focus:ring-offset-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-800">
                            Status
                        </p>
                    </a>

                </li>
            </ul>
        </div> --}}
        <ul class="list w-full text-white flex flex-wrap justify-around">
            @foreach ($contrats as $contrat)
                <li class="m-5">
                    <div class="contract-item relative bg-gray-600 py-6 px-6 rounded-md w-50 my-4 shadow-lg">
                        <div>
                            <p class="text-xl font-semibold">
                                Contrat <span class="list-numcontract">{{ $contrat->rum }}</span>
                            </p>
                            <p class="mb-5 text-sm">
                                Contrat CSPE</p>
                            <div class="flex align-baseline items-center space-x-2 text-sm">
                                <i class="fas fa-user"></i>
                                <p>
                                    {{ $contrat->genre }}. {{ $contrat->nom }} <span
                                        class="list-nom">{{ $contrat->prenom }}</span>
                                </p>
                            </div>
                            <div class="flex align-baseline space-x-2 text-sm my-3">
                                <i class="far fa-calendar-alt"></i>
                                <p>Fait le <span class="list-datecontract timestamp"
                                        data-timestamp="1678875851">{{ $contrat->created_at->format('d/m/Y') }}</span>
                                </p>
                            </div>
                            <div class="h-px mt-5 bg-gray-300"></div>
                            <div>
                                <div class="mt-2 w-full text-center">
                                    <div class="my-5 text-base font-semibold uppercase">
                                        <p class="list-status text-yellow-600">{{ $contrat->status }}</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-1">
                                    <a href="{{ route('cspe' , ['contrat' => $contrat , 'doc' => 1]) }}" target="_blank">
                                        <button
                                            class="mt-2 w-full py-2 px-10 border border-transparent text-sm font-medium rounded-sm text-white bg-gray-800 hover:bg-gray-700 focus:ring-offset-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                            <i class="fa-solid fa-envelope"></i> Document 1
                                        </button>
                                    </a>
                                    <a href="{{ route('cspe' , ['contrat' => $contrat , 'doc' => 2]) }}" target="_blank">
                                        <button
                                            class="mt-2 w-full py-2 px-10 border border-transparent text-sm font-medium rounded-sm text-white bg-gray-800 hover:bg-gray-700 focus:ring-offset-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                            <i class="fa-solid fa-envelope"></i> Document 2
                                        </button>
                                    </a>

                                    <a href="{{ route('signature' , ['contrat' => $contrat]) }}" target="_blank">
                                        <button
                                            class="mt-2 w-full py-2 px-10 border border-transparent text-sm font-medium rounded-sm text-white bg-gray-800 hover:bg-gray-700 focus:ring-offset-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                            <i class="fa-solid fa-signature"></i> Signature
                                        </button>
                                    </a>
                                    <a href="{{ route('signer' , ['contrat' => $contrat]) }}" target="_blank">
                                        <button
                                            class="mt-2 w-full py-2 px-10 border border-transparent text-sm font-medium rounded-sm text-white bg-gray-800 hover:bg-gray-700 focus:ring-offset-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                            <i class="fa-solid fa-check"></i> Signer
                                        </button>
                                    </a>
                                    <button
                                        class="detail_button mt-2 w-full py-2 px-10 border border-transparent text-sm font-medium rounded-sm text-white bg-gray-800 hover:bg-gray-700 focus:ring-offset-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                        data-value="contrat{{ $contrat->id }}">
                                        <i class="fa-solid fa-circle-info"></i> Détails
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contrat_details w-screen h-screen z-50 hidden fixed m-0 left-0 top-0"
                        id="contrat{{ $contrat->id }}">
                        <div class="w-full h-full bg-black bg-opacity-75 flex flex-col justify-center">
                            <div class="py-3 min-w-1/2 sm:mx-auto">
                                <div class="bg-gray-700 min-w-1xl pl-10 flex flex-col rounded-md shadow-lg p-5">
                                    <div class="px-12 py-5">
                                        <h2 class="text-3xl font-semibold">
                                            Contrat <span class="list-numcontract">{{ $contrat->rum }}</span>
                                        </h2>
                                        <p class="text-sm w-full text-center">
                                            Contrat CSPE</p>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="fas fa-info-circle dtp w-4 leading-5 text-yellow-600"></i>
                                        <p class="list-status text-yellow-600 uppercase">{{ $contrat->status }}</p>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="far fa-calendar-alt dtp w-4 leading-5"></i>
                                        <p>Fait le {{ $contrat->created_at->format('d/m/Y') }}</p>
                                    </div>
                                    <div class="h-0.5 bg-gray-300 w-1/2 mx-auto my-5"></div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="fas fa-user dtp w-4 leading-5"></i>
                                        <p> {{ $contrat->genre }}.
                                            {{ $contrat->nom }} {{ $contrat->prenom }}</p>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="fas fa-calendar-day dtp w-4 leading-5"></i>
                                        <p>Né le {{ $contrat->date->format('d/m/Y') }}</p>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="fas fa-map-marker-alt dtp w-4 leading-5"></i>
                                        <p>{{ $contrat->adresse }}</p>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="fas fa-envelope dtp2 w-4 leading-5"></i>
                                        <p>{{ $contrat->zipcode }} {{ $contrat->ville }}</p>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="far fa-flag dtp2 w-4 leading-5"></i>
                                        <p>{{ $contrat->pays }}</p>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="fas fa-mobile-alt dtp w-4 leading-5"></i>
                                        <a class="hover:text-red-500"
                                            href="tel:{{ $contrat->mobile }}">{{ $contrat->mobile }}</a>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="fas fa-at dtp w-4 leading-5"></i>
                                        <a class="hover:text-red-500"
                                            href="mailto:{{ $contrat->mail }}">{{ $contrat->mail }}</a>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="fas fa-at dtp w-4 leading-5"></i>
                                        <a class="hover:text-red-500"
                                            href="javascript:void(0);">{{ $contrat->iban }}</a>
                                    </div>
                                    <div class="flex space-x-2 text-sm my-1">
                                        <i class="fas fa-at dtp w-4 leading-5"></i>
                                        <a class="hover:text-red-500"
                                            href="javascript:void(0);">{{ $contrat->bic }}</a>
                                    </div>
                                    <div class="h-0.5 bg-gray-300 w-1/2 mx-auto my-5"></div>
                                    <div class="h-20 flex items-center justify-center">
                                        <a href="javascript:void(0);"
                                            class="back-button py-2 px-10 rounded-md shadow-lg border border-transparent text-sm font-bold rounded-sm text-white bg-red-900 hover:bg-red-800 focus:ring-offset-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-900">Retour</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {{ $contrats->links('vendor.pagination.simple-tailwind') }}
    </div>
    <script>
        let button_details = document.querySelectorAll('.detail_button')
        let add_audio_file_button = document.querySelectorAll('.add_audio_file_button')
        let closemodal = document.querySelectorAll('.modal-close')

        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', closeModal)
        }

        button_details.forEach((button) => {
            button.addEventListener('click', (e) => {
                let numcont = e.target.getAttribute('data-value')
                document.getElementById(numcont).style.display = 'block'
                document.querySelectorAll('.back-button').forEach(back => {
                    back.addEventListener('click', () => {
                        document.getElementById(numcont).style.display = 'none'
                    })
                })
            })
        })

        add_audio_file_button.forEach((button) => {
            button.addEventListener('click', (e) => {
                let numcont = e.target.getAttribute('data-value')
                document.getElementsByClassName('audioContractId')[0].value = numcont
                document.getElementById("audio-file-upload").style.display = 'block'
                document.getElementById("audio-file-upload").querySelector('.back-button').addEventListener(
                    'click', (e) => {
                        document.getElementById("audio-file-upload").style.display = 'none'
                    })
            })
        })

        function closeModal() {
            const modal = document.querySelector('.notification')
            modal.classList.add('hidden')
        }
    </script>
@endsection
