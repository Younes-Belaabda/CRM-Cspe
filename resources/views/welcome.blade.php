@extends('layouts.master')

@section('body')
    <div class="bg-gray-700 p-6 relative sm:ml-64 min-h-screen text-gray-300">
        <div class="text-3xl">{{ Auth::user()->name }}</div>
        <div>&#187; Tableau de bord</div>
        <div class="max-w-4xl w-auto m-auto p-4">
            <div class="mb-2">
                <p class="px-4 text-sm italic text-center">
                    “ Il faut viser la lune parce qu&#039;au moins, si vous échouez, vous finirez dans les étoiles.
                    ”
                </p>
                <div class="h-3 text-lg text-right"> - Oscar Wilde</div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:space-x-4 justify-center items-center">
            <div class="flex items-center justify-around p-6 bg-gray-600 w-64 rounded-xl space-x-2 mt-4 md:mt-10 shadow-lg">
                <div class="flex flex-row md:flex-col items-center md:items-start">
                    <span class="text-sm font-semibold text-gray-400">Jours d'ancienneté</span>
                    <h1 class="text-2xl font-bold">{{ Auth::user()->created_at->diffInDays(\Carbon\Carbon::now()) }}</h1>
                </div>
                <div class="text-3xl text-red-900">
                    <i class="fa-regular fa-calendar-days"></i>
                </div>
            </div>
            <div class="flex items-center justify-around p-6 bg-gray-600 w-64 rounded-xl space-x-2 mt-4 md:mt-10 shadow-lg">
                <div class="flex flex-row md:flex-col items-center md:items-start">
                    <span class="text-sm font-semibold text-gray-400">Ventes du mois</span>
                    <h1 class="text-2xl font-bold">{{ Auth::user()->contrats->count() }}</h1>
                </div>
                <div class="text-3xl text-red-900">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
            </div>
        </div>
        <h2 class="mb-4 mt-12 text-center text-xl font-bold">Mes derniers contrats réalisés</h2>
        <div class="rounded-md bg-gray-600 shadow-lg overflow-x-scroll md:overflow-auto">
            <div class="w-max md:w-auto">
                <div
                    class="flex justify-around bg-gray-800 rounded-tl-md rounded-tr-md py-2 px-4 text-white font-bold text-md">
                    <div class="px-2 flex w-1/4 justify-center">
                        <span>Client</span>
                    </div>
                    <div class="px-2 flex w-1/4 justify-center">
                        <span>Contrat</span>
                    </div>
                    <div class="px-2 flex w-1/4 justify-center">
                        <span>Statut</span>
                    </div>
                    <div class="px-2 flex w-1/4 justify-center">
                        <span>Date</span>
                    </div>
                </div>
                <div class="">
                    {{-- @dd(Auth::user()->contrats->take(10)) --}}
                    @foreach (Auth::user()->contrats->reverse()->take(10) as $contrat)
                        <div class="flex justify-between text-sm font-normal p-4 space-x-4 hover:bg-gray-500">
                            <div class="px-2 flex w-1/4 justify-center">
                                <span>{{ $contrat->nom }}  {{ $contrat->prenom }}</span>
                            </div>
                            <div class="px-2 flex w-1/4 justify-center">
                                <span>CSPE</span>
                            </div>
                            <div class="px-2 flex w-1/4 justify-center text-yellow-600">
                                <span>{{ $contrat->status }}</span>
                            </div>
                            <div class="px-2 flex w-1/4 justify-center">
                                <span>{{ $contrat->date->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
