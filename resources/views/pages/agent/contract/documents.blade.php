@extends('layouts.master')

@section('body')
    <div id="documents-list" class="bg-gray-700 text-gray-300 p-6 relative md:ml-64 min-h-screen overflow-x-hidden">
        <h1 class="order-1 text-3xl font-extrabold tracking-tight">&#187; Mes documents</h1>
        <input
            class="search row-start-1 w-full py-2 px-3 placeholder-gray-500 text-gray-500 rounded-sm border border-solid border-gray-300 focus:border-gray-900 outline-none my-3"
            placeholder="Rechercher un document" /><br>
        <p>Nombre de résultats : <span id="nb_contracts"></span></p>
        <div class="justify-center flex-col items-center flex mt-80">
            <i class="fas fa-file-signature fa-7x mb-4"></i>
            <h2 class="text-center font-bold text-2xl mt-12">Aucun document disponible.</h2>
        </div>
    </div>
    <script>
        var options = {
            valueNames: [
                'list-document'
            ],
            page: 15,
            pagination: true
        };

        let contractsList = new List('documents-list', options);

        pagination()

        function pagination() {
            let linkPage = document.querySelectorAll('.page')
            linkPage.forEach((page) => {
                page.setAttribute('class',
                    'page py-2 px-4 mx-2 border border-transparent text-sm font-medium rounded-sm text-white bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500'
                    )
            })

            let linkPageActive = document.querySelectorAll('.active.page')
            linkPageActive.forEach((pageActive) => {
                pageActive.setAttribute('class', 'active.page bg-red-500')
            })
        }
        contractsList.on('updated', () => {
            updateNbContracts(contractsList.visibleItems.length)
        })

        updateNbContracts(contractsList.visibleItems.length)

        function updateNbContracts(nbContracts) {
            document.querySelector('#nb_contracts').innerHTML = nbContracts
        }
    </script>
    </div>
@endsection
