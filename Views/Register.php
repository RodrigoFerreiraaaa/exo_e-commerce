<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 formRegister">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">S'inscrire</h2>
    </div>

    <?php

    ?>
    <form class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm" method="POST" action="../Controllers/traitementRegister.php">
        <div class="space-y-6">
            <div>
                <label for="adresseMail" class="block text-sm font-medium leading-6 text-white">Adresse Mail</label>
                <div class="mt-2">
                    <input id="adresseMail" name="adresseMail" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 indent-3 email">
                </div>
            </div>

            <div>

                <label for="motDePasse" class="block text-sm font-medium leading-6 text-white">Mot De Passe</label>
                <div class="mt-2">
                    <input id="motDePasse" name="motDePasse" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 indent-3 password">
                </div>
            </div>
            <div>

                <label for="confirmMotDePasse" class="block text-sm font-medium leading-6 text-white">Confirmer Votre Mot De Passe</label>
                <div class="mt-2">
                    <input id="confirmMotDePasse" name="confirmMotDePasse" type="password" autocomplete="confrim-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 indent-3 password">
                </div>
            </div>
            <div>
                <label for="Prenom" class="block text-sm font-medium leading-6 text-white">Prenom</label>
                <div class="mt-2">
                    <input id="Prenom" name="Prenom" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 indent-3 firstName">
                </div>
            </div>
            <div>
                <label for="Nom" class="block text-sm font-medium leading-6 text-white">Nom</label>
                <div class="mt-2">
                    <input id="Nom" name="Nom" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 indent-3 lastName">
                </div>
            </div>

            <div>
                <button onclick="handleRegister()" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">S'inscrire</button>
            </div>
        </div>

    </form>
</div>