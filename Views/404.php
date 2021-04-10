<!-- Loading screen -->
<main aria-labelledby="pageTitle" class="flex items-center justify-center h-screen bg-gray-100">
    <div class="p-4 space-y-4">
        <div class="flex flex-col items-start space-y-3 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-3">
            <p class="font-semibold text-red-500 text-9xl ">404</p>
            <div class="space-y-2">
                <h1 id="pageTitle" class="flex items-center space-x-2">
                    <svg aria-hidden="true" class="w-6 h-6 text-red-500 " xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <span class="text-xl font-medium text-gray-600 sm:text-2xl ">
                            Oups! La page que vous recherché n'a pas été trouvée.
                        </span>
                </h1>
                <p class="text-base font-normal text-gray-600 ">
                    La page que vous recherchez n'éxiste pas.
                </p>
                <p class="text-base font-normal text-gray-600 ">
                    You devriez retourner sur la
                    <a href="/" class="text-blue-600 hover:underline ">Page d'accueil</a> ou essayer d'utiliser ce
                    formulaire de recherche.
                </p>
            </div>
        </div>
        <form action="#" method="POST">
            <div class="flex items-center justify-center">
                <label for="search"></label>
                <input id="search" type="text" name="search" placeholder="What are you looking for?"
                       class="w-full px-4 py-2 rounded-l-md focus:outline-none focus:ring focus:ring-blue-400 "/>
                <button class="p-2 text-white rounded-r-md bg-blue-500  hover:bg-blue-600  focus:outline-none focus:ring focus:ring-primary-light ">
                    <span class="sr-only">Rechercher</span>
                    <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</main>
<script type="text/javascript" src="../public/src/script/404.js"></script>