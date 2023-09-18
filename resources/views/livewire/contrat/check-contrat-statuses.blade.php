<div class="bg-gray-700 p-6 relative sm:ml-64 min-h-screen text-gray-300">
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
                <div class="flex justify-between text-sm font-normal p-4 space-x-4 hover:bg-gray-500">
                    <div class="px-2 flex w-1/4 justify-center">
                        <span>{{ $contrat->nom }} {{ $contrat->prenom }}</span>
                    </div>
                    <div class="px-2 flex w-1/4 justify-center">
                        <span>CSPE</span>
                    </div>
                    <div class="px-2 flex w-1/4 justify-center text-yellow-600">
                        <span>{{ $contrat->status }}</span>
                    </div>
                    <div class="px-2 flex w-1/4 justify-center">
                        <span>{{ $contrat->created_at->format('d/m/Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded-md bg-gray-600 shadow-lg overflow-x-scroll mt-5 md:overflow-auto">
        <div class="w-max md:w-auto">
            <div
                class="flex justify-around bg-gray-800 rounded-tl-md rounded-tr-md py-2 px-4 text-white font-bold text-md">
                <div class="px-2 flex w-1/4 justify-center">
                    <span>Contrat enregistré</span>
                </div>
                <div class="px-2 flex w-1/4 justify-center">
                    <span>Email envoyé</span>
                </div>
                <div class="px-2 flex w-1/4 justify-center">
                    <span>Email est consulté</span>
                </div>
                <div class="px-2 flex w-1/4 justify-center">
                    <span>Contrat signé</span>
                </div>
            </div>
            <div class="">
                <div class="flex justify-between text-sm font-normal p-4 space-x-4 hover:bg-gray-500">
                    <div class="px-2 flex w-1/4 justify-center">
                        <div class="w-full bg-yellow-400 rounded-full " style="height: 15px;width:50%">
                        </div>
                    </div>
                    <div class="px-2 flex w-1/4 justify-center">
                        <div class="w-full bg-yellow-400 rounded-full " style="height: 15px;width:50%">
                        </div>
                    </div>
                    <div class="px-2 flex w-1/4 justify-center">
                        @if ($is_email_opened)
                            <div class="w-full bg-yellow-400 rounded-full " style="height: 15px;width:50%">
                            </div>
                        @else
                            <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700"
                                style="height: 15px;width:50%">
                                <div class="bg-gray-600 h-2.5 rounded-full dark:bg-gray-300" style="width: 45%"></div>
                            </div>
                        @endif
                    </div>
                    <div class="px-2 flex w-1/4 justify-center text-yellow-600">
                        @if ($status == 'Validé call')
                            <div class="w-full bg-yellow-400 rounded-full " style="height: 15px;width:50%">
                            </div>
                        @else
                            <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700"
                                style="height: 15px;width:50%">
                                <div class="bg-gray-600 h-2.5 rounded-full dark:bg-gray-300" style="width: 45%"></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
