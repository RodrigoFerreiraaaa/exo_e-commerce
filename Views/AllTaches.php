<?php
echo "<div class='hidden'>
  <h1 class='  text-white text-3xl text-center pt-4 w-full'>
                Votre liste de tâches
            </h1>
            <div class='todos-list flex flex-wrap w-10/12'>
            
            ";


foreach ($taches as $tache) {

  echo "<div class='w-1/3 mx-8 my-8 py-4 px-4 border border-solid border-2 border-white pl-12'>

                            <h3 class='text-white'>" . $tache->getName() . "</h3>
                            catégory :" . $tache->getNameCategory() . "</p>
                            </div>
                            </div>";
}
