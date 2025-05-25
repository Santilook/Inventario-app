<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Página de inicio de sesión segura para acceder a la aplicación de inventario. Inicia sesión o regístrate para gestionar tus productos fácilmente." />
    <meta name="keywords" content="login, inicio de sesión, inventario, registrar, usuario, contraseña" />
    <meta name="author" content="Tu Empresa" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://tusitio.com/pruebas.html" />
    <link href="/model/output.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Iniciar sesión | Inventario App</title>
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-[#7F7FD5] via-[#86A8E7] to-[#91EAE4]">
    <main class="w-full px-4 flex justify-center font-bold">
        <section
            class="flex flex-col lg:flex-row w-full max-w-full md:max-w-6xl bg-white/20 backdrop-blur-md rounded-xl overflow-hidden shadow-lg"
            aria-label="Sección de inicio de sesión">

            <!-- Imagen -->
            <div class="hidden sm:block w-full lg:w-full">
                <img src="./model/img/cajeros.jpg"
                    alt="Ilustración de inicio de sesión para la aplicación de inventario"
                    class="w-full h-80 object-cover lg:h-full lg:w-full" loading="lazy" />
            </div>

            <!-- Formulario -->
            <div class="w-full flex items-center justify-center p-8">
                <div class="w-full max-w-md">
                    <svg class="mx-auto h-35 w-35 mb-6 drop-shadow-xl/25" aria-hidden="true" focusable="false">
                        <use xlink:href="./model/iconos.min.svg#user"></use>
                    </svg>
                    <form class="space-y-4" method="POST" action="../invantario_app/controller/AccessUsers.php" autocomplete="on"
                        aria-label="Formulario de inicio de sesión">

                        <!-- input correo -->
                        <div class="relative">
                            <label for="usuario" class="sr-only"></label>
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5">
                                    <use xlink:href="./model/iconos.min.svg#email"></use>
                                </svg>
                            </span>
                            <input type="text" id="Email" name="Usuario" placeholder="Email" required
                                class="w-full pl-10 p-2 border border-gray-300 rounded" autocomplete="username" />
                        </div>

                        <!-- input contraseña -->
                        <div class="relative">
                        <label for="contraseña" class="sr-only">Contraseña</label>
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5">
                                <use xlink:href="./model/iconos.min.svg#key"></use>
                            </svg>
                        </span>
                        <input type="password" id="contraseña" name="Contraseña" placeholder="Contraseña" required
                            class="w-full pl-10 p-2 border border-gray-300 rounded" autocomplete="current-password" />
                        </div>

                        <label class="text-sm flex items-center gap-2 text-white">
                            <input type="checkbox" name="recordar" id="recordar" />
                            Recordar usuario
                        </label>
                        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600">
                            Iniciar sesión
                        </button>
                    </form>
                    <p class="mt-4 text-center lg:text-lg text-sm text-white">
                        ¿Olvidaste tu contraseña?
                        <a href="/registro" class="text-blue-500 hover:underline" rel="nofollow">Recuperar</a>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- Estructura de datos JSON-LD para SEO -->
    <script type="application/ld+json"></script>
</body>

</html>