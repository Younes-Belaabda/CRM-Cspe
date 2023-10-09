<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <<link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Accueil | CALL</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <livewire:styles/>
    @yield('styles')
</head>

<body class="font-sans">
    <div id="main">
        <div class="flex flex-no-wrap">
            <div class="w-64 z-40 fixed bg-gray-900 shadow md:h-full flex-col justify-between transition duration-150 ease-in-out"
                id="nav">
                <button aria-label="toggle sidebar" id="openSideBar"
                    class="md:hidden h-10 w-10 bg-gray-900 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white"
                    onclick="sidebarHandler(true)">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <button aria-label="Close sidebar" id="closeSideBar"
                    class="hidden h-10 w-10 bg-gray-900 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white"
                    onclick="sidebarHandler(false)">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div style="height: 100vh" class="w-64 absolute md:relative bg-violet-100 shadow md:h-full flex-col flex">
                    <div class="my-12 w-52 justify-center mx-auto flex items-center">
                        <img src="{{ asset('images/logo-transparent.png') }}" alt="Venom logo">
                    </div>
                    <div class="px-8 font-semibold">
                        <ul>
                            <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center mb-6">
                                <a href="/" class="flex items-center">
                                    <i class="fa-solid fa-house w-4"></i>
                                    <span class="text-lg ml-4">Accueil</span>
                                </a>
                            </li>
                            {{-- <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center mb-6">
                                <a href="{{ route('documents') }}" class="flex items-center">
                                    <i class="fa-solid fa-folder"></i>
                                    <span class="text-lg ml-4">Mes documents</span>
                                </a>
                            </li> --}}
                            <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center">
                                <button aria-label="toggle starkMenu" id="stark-menu-button"
                                    class="menu-button h-7 w-full flex items-center rounded-tr rounded-br justify-between cursor-pointer text-white"
                                    onclick="menuHandler('stark')">
                                    <p class="flex items-center">
                                        <i class="fa-solid fa-file-contract w-4"></i>
                                        <span class="text-lg ml-4">CSPE</span>
                                    </p>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </li>
                            <div id="stark-menu-item" class="menu-item mb-6">
                                <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center my-2">
                                    <a href="{{ route('agent.contrat.all') }}" class="flex items-center">
                                        <span class="text-sm ml-8">Mes Contrats</span>
                                    </a>
                                </li>
                                <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center my-2">
                                    <a href="{{ route('agent.contrat.allplus') }}" class="flex items-center">
                                        <span class="text-sm ml-8">Mes Contrats PLUS</span>
                                    </a>
                                </li>
                                <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center my-2">
                                    <a href="{{ route('agent.contrat.create') }}" class="flex items-center">
                                        <span class="text-sm ml-8">Nouveau Contrat</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                    <div class="flex h-full w-full justify-between px-8 text-white items-end mb-6">
                        <a onclick="form_logout()" href="javascript:void();" class="cursor-pointer flex items-center">
                            <i class="fa-solid fa-power-off w-4"></i>
                            <span class="text-lg ml-4">Déconnexion</span>
                        </a>
                        <form id="form-logout" style="display:hidden" action="{{ route('logout') }}" method="post">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const closeNotificationModal = function() {
                document.querySelector('.notification-modal')?.classList.add('hide');
                setTimeout(function() {
                    document.querySelector('.notification-modal')?.remove();
                }, 500);
            }

            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    closeNotificationModal();
                }, 8000);
            });
        </script>
        <script>
            let sideBar = document.getElementById("nav");
            let openSidebar = document.getElementById("openSideBar");
            let closeSidebar = document.getElementById("closeSideBar");
            if (window.screen.width < 768) {
                sideBar.style.transform = "translateX(-260px)";
            }

            function sidebarHandler(flag) {
                if (flag) {
                    sideBar.style.transform = "translateX(0px)";
                    openSidebar.classList.add("hidden");
                    closeSidebar.classList.remove("hidden");
                } else {
                    sideBar.style.transform = "translateX(-260px)";
                    closeSidebar.classList.add("hidden");
                    openSidebar.classList.remove("hidden");
                }
            }

            function menuHandler(menuItemId) {
                document.getElementById(`${menuItemId}-menu-item`).classList.toggle("opened");
                document.getElementById(`${menuItemId}-menu-button`).classList.toggle("opened");
            }
        </script>
        @yield('body')
        <script>
            const events = [];
        </script>
    </div>
    <livewire:scripts/>
    @yield('scripts')
    <script>
        function form_logout(){
            document.getElementById('form-logout').submit();
        }
    </script>
</body>

</html>
