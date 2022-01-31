
  <main>
    <p>F5 pour voir la réponse à ta question !!</p>
    <H2>
      <?php 
        
        $indexMotAleatoire = array_rand($listAnswers, 1);
        echo $listAnswers[$indexMotAleatoire][0];
        
      ?>

    </H2>
  </main>