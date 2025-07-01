<!DOCTYPE html>
<html lang="es">

<?php
include('head.php')
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Administracion</title>
    <style>
    .sidebar {
        transition: left 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        left: -300px;
    }
    .sidebar.open {
        left: 0 !important;
    }
    @media (min-width: 768px) {
        .sidebar {
            left: 0 !important;
        }
        .sidebar.closed {
            left: 0 !important;
        }
        .sidebar.open {
            left: 0 !important;
        }
    }
</style>
</head>

<body>
    <header class="bg-gray-800 text-white p-3">
        <h1 class="text-2xl text-center md:ml-25 ">Bienvenido Administrador</h1>
    </header>
    <!-- Botón menú solo visible en móvil -->
    
    <span class="absolute text-white text-4xl top-2 left-4 cursor-pointer" onclick="opensidebar()">
        <i class="bi bi-list px-2 rounded-md"></i>
    </span>

    <!-- Sidebar -->

    <div
        class="sidebar closed md:open fixed top-0 bottom-0 left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900 z-50
        transition-all duration-300 ease-in-out">

        <div class="p-2.5 mt-1 flex items-center text-white">
            <h2 class="font-bold text-gray-200 text-lg ml-3">Inventario</h2>
            <i class="bi bi-x ml-36 cursor-pointer lg:hidden md:hidden text-lg" onclick="closesidebar()"></i>
        </div>

        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
            <i class="bi bi-search text-sm"></i>
            <input type="text" placeholder="Buscar..." class=" text-sm ml-4 w-full bg-transparent focus:online-none">
        </div>

        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-house-door-fill text-lg"></i>
            <span class="text-lg ml-2 text-gray-200">Home</span>
        </div>

        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-people-fill text-lg"></i>
            <span class="text-lg ml-2 text-gray-200">Clientes</span>
        </div>

        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-house-door-fill text-lg"></i>
            <span class="text-lg ml-2 text-gray-200">Gestion de productos</span>
        </div>

        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-person-check text-lg"></i>
            <span class="text-lg ml-2 text-gray-200">Gestion de usuarios</span>
        </div>

        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-journal-text text-lg"></i>
            <span class="text-lg ml-2 text-gray-200">Reportes</span>
        </div>

        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-gear-fill text-lg"></i>
            <span class="text-lg ml-2 text-gray-200">Configuraciones</span>
        </div>

    </div>
    <!-- Dashboard -->
    <main class="bg-gray-100 p-6 lg:ml-[300px] md:ml-[300px] ml-0">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 w-full max-w-lg mx-auto md:max-w-full">
            <!-- Clientes -->
            <a href="#"
                class="bg-teal-600 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-people-fill text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Clientes</div>
                    <div class="text-white text-2xl font-bold">16</div>
                </div>
            </a>
            <!-- Proveedores -->
            <a href="#"
                class="bg-orange-500 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-person-lines-fill text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Proveedores</div>
                    <div class="text-white text-2xl font-bold">10</div>
                </div>
            </a>
            <!-- Productos -->
            <a href="#"
                class="bg-purple-600 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-box-seam text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Productos</div>
                    <div class="text-white text-2xl font-bold">185</div>
                </div>
            </a>
            <!-- Facturas -->
            <a href="#"
                class="bg-slate-500 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-receipt text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Facturas</div>
                    <div class="text-white text-2xl font-bold">1</div>
                </div>
            </a>
            <!-- Existencia total -->
            <a href="#"
                class="bg-indigo-500 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-archive-fill text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Existencia total</div>
                    <div class="text-white text-2xl font-bold">148</div>
                </div>
            </a>
            <!-- Existencia vendida -->
            <a href="#"
                class="bg-pink-500 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-truck text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Existencia vendida</div>
                    <div class="text-white text-2xl font-bold">33</div>
                </div>
            </a>
            <!-- Existencia actual -->
            <a href="#"
                class="bg-blue-500 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-bar-chart-fill text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Existencia actual</div>
                    <div class="text-white text-2xl font-bold">115</div>
                </div>
            </a>
            <!-- Importe vendido -->
            <a href="#"
                class="bg-orange-400 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-cash-coin text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Importe vendido</div>
                    <div class="text-white text-2xl font-bold">$ 413</div>
                </div>
            </a>
            <!-- Importe pagado -->
            <a href="#"
                class="bg-green-600 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-currency-dollar text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Importe pagado</div>
                    <div class="text-white text-2xl font-bold">$ 413</div>
                </div>
            </a>
            <!-- Importe restante -->
            <a href="#"
                class="bg-red-500 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-cash-stack text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Importe restante</div>
                    <div class="text-white text-2xl font-bold">$ 0</div>
                </div>
            </a>
            <!-- Beneficio bruto -->
            <a href="#"
                class="bg-amber-900 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-wallet2 text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Beneficio bruto</div>
                    <div class="text-white text-2xl font-bold">$ 89</div>
                </div>
            </a>
            <!-- Beneficio neto -->
            <a href="#"
                class="bg-sky-400 rounded shadow flex items-center p-4 hover:transition duration-200 ease-in-out hover:scale-105">
                <i class="bi bi-graph-up-arrow text-3xl text-white mr-4"></i>
                <div>
                    <div class="text-white text-sm">Beneficio neto</div>
                    <div class="text-white text-2xl font-bold">$ 89</div>
                </div>
            </a>
        </div>
    </main>

    <script>
    function opensidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.remove('closed');
        sidebar.classList.add('open');
    }

    function closesidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.remove('open');
        sidebar.classList.add('closed');
    }
</script>
</body>

</html>