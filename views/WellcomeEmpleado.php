<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include('head.php')
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Punto de Venta</title>
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-gray-800 text-white p-3">
        <h1 class="text-2xl text-center md:ml-25 ">Bienvenido Empleado</h1>
    </header>
    <!-- Barra superior -->
    <nav class="bg-white border-b border-gray-200 px-4 py-2 flex flex-wrap items-center justify-between">
        <div class="flex items-center space-x-4">
            <button class="md:hidden text-2xl"><i class="bi bi-list"></i></button>
            <span class="font-semibold text-lg">Tablero</span>
            <a href="#" class="text-gray-600 hover:text-blue-600 hidden md:inline">Inventario</a>
            <a href="#" class="text-gray-600 hover:text-blue-600 hidden md:inline">Carga Masiva de Productos</a>
            <a href="#" class="text-gray-600 hover:text-blue-600 hidden md:inline">Categorías</a>
            <a href="#" class="text-gray-600 hover:text-blue-600 hidden md:inline">Ventas</a>
            <a href="#" class="text-gray-600 hover:text-blue-600 hidden md:inline">Reportes</a>
        </div>
        <div>
            <a href="#" class="text-blue-600 hover:underline text-sm">Inicio</a>
            <span class="text-gray-400 mx-1">/</span>
            <span class="text-gray-600 text-sm">Ventas</span>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-2 py-4">
        <h2 class="text-2xl font-bold mb-2">Punto de Venta</h2>
        <div class="flex flex-col lg:flex-row gap-4">
            <!-- Panel principal -->
            <div class="flex-1">
                <label class="block text-gray-700 text-sm mb-1 font-medium" for="buscar-producto">
                    <i class="bi bi-box-seam mr-1"></i> Productos
                </label>
                <input id="buscar-producto" type="text" placeholder="Ingrese el código de barras o el nombre del producto"
                    class="w-full border border-gray-300 rounded px-3 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-400">

                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                    <div class="text-xl font-semibold text-gray-700 mb-2 md:mb-0">
                        Total Venta: <span class="text-blue-700 font-bold">$ 31,50</span>
                    </div>
                    <div class="flex gap-2">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800 flex items-center gap-1">
                            <i class="bi bi-cart-check"></i> Realizar Venta
                        </button>
                        <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 flex items-center gap-1">
                            <i class="bi bi-trash"></i> Vaciar Listado
                        </button>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                    <div class="flex items-center gap-2 mb-2 md:mb-0">
                        <label for="mostrar" class="text-sm">Mostrar</label>
                        <select id="mostrar" class="border border-gray-300 rounded px-2 py-1 text-sm">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                        </select>
                        <span class="text-sm">registros</span>
                    </div>
                    <div>
                        <label for="buscar" class="text-sm mr-1">Buscar:</label>
                        <input id="buscar" type="text" class="border border-gray-300 rounded px-2 py-1 text-sm">
                    </div>
                </div>

                <!-- Tabla de productos -->
                <div class="overflow-x-auto rounded shadow">
                    <table class="min-w-full bg-white text-sm">
                        <thead>
                            <tr class="bg-blue-100 text-gray-700">
                                <th class="py-2 px-3 text-left">Código</th>
                                <th class="py-2 px-3 text-left">Producto</th>
                                <th class="py-2 px-3 text-center">Cantidad</th>
                                <th class="py-2 px-3 text-right">Precio</th>
                                <th class="py-2 px-3 text-right">Total</th>
                                <th class="py-2 px-3 text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2 px-3">7750182002363</td>
                                <td class="py-2 px-3">Fanta 500ml</td>
                                <td class="py-2 px-3 text-center">1 Und(s)</td>
                                <td class="py-2 px-3 text-right">$ 1,80</td>
                                <td class="py-2 px-3 text-right">$ 1,80</td>
                                <td class="py-2 px-3 text-center">
                                    <button class="text-green-600 hover:text-green-800"><i class="bi bi-cart-plus"></i></button>
                                    <button class="text-yellow-600 hover:text-yellow-800 ml-2"><i class="bi bi-pencil"></i></button>
                                    <button class="text-red-600 hover:text-red-800 ml-2"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-3">7501006559019</td>
                                <td class="py-2 px-3">Manteca</td>
                                <td class="py-2 px-3 text-center">1 Und(s)</td>
                                <td class="py-2 px-3 text-right">$ 3,50</td>
                                <td class="py-2 px-3 text-right">$ 3,50</td>
                                <td class="py-2 px-3 text-center">
                                    <button class="text-green-600 hover:text-green-800"><i class="bi bi-cart-plus"></i></button>
                                    <button class="text-yellow-600 hover:text-yellow-800 ml-2"><i class="bi bi-pencil"></i></button>
                                    <button class="text-red-600 hover:text-red-800 ml-2"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <!-- ...más filas según sea necesario... -->
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mt-2 text-xs text-gray-600">
                    <span>Mostrando registros del 1 al 5 de un total de 5 registros</span>
                    <div class="flex items-center gap-2 mt-2 md:mt-0">
                        <span>Anterior</span>
                        <input type="number" value="1" class="w-10 border border-gray-300 rounded px-1 py-0.5 text-center">
                        <span>Siguiente</span>
                    </div>
                </div>
            </div>
            <!-- Panel lateral -->
            <aside class="w-full lg:w-96 bg-white rounded shadow p-4 h-fit lg:ml-4">
                <div class="bg-blue-600 text-white text-lg font-bold rounded-t px-4 py-2 mb-4 text-center">
                    Total Venta: $ 31,50
                </div>
                <form class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700"><i class="bi bi-file-earmark-text"></i> Documento*</label>
                        <select class="w-full border border-gray-300 rounded px-2 py-1">
                            <option>Boleta</option>
                            <option>Factura</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700"><i class="bi bi-credit-card"></i> Tipo Pago*</label>
                        <select class="w-full border border-gray-300 rounded px-2 py-1">
                            <option>Efectivo</option>
                            <option>Tarjeta</option>
                        </select>
                    </div>
                    <div class="flex gap-2">
                        <div class="flex-1">
                            <label class="block text-xs text-gray-600">Serie</label>
                            <input type="text" class="w-full border border-gray-300 rounded px-2 py-1" value="001" readonly>
                        </div>
                        <div class="flex-1">
                            <label class="block text-xs text-gray-600">Nro Venta</label>
                            <input type="text" class="w-full border border-gray-300 rounded px-2 py-1" value="00000023" readonly>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Efectivo recibido</label>
                        <input type="number" class="w-full border border-gray-300 rounded px-2 py-1" placeholder="Cantidad de efectivo recibida">
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="checkbox" id="efectivo-exacto" class="accent-blue-600">
                        <label for="efectivo-exacto" class="text-sm text-gray-700">Efectivo Exacto</label>
                    </div>
                    <div class="mt-2">
                        <div class="text-base font-semibold text-gray-700">Monto Efectivo: <span class="text-black">$ 0,00</span></div>
                        <div class="text-base font-semibold text-red-600">Vuelto: $ 0,00</div>
                    </div>
                    <div class="mt-2 text-xs text-gray-600">
                        <div>SUBTOTAL: <span class="float-right text-black">$ 25,83</span></div>
                        <div>IGV (18%): <span class="float-right text-black">$ 5,67</span></div>
                        <div class="font-bold text-base text-black">TOTAL: <span class="float-right text-blue-700">$ 31,50</span></div>
                    </div>
                </form>
            </aside>
        </div>
    </main>
</body>
</html>
</html>