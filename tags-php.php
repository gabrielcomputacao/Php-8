
<h1>Primeira tag</h1>

<?php

    echo "Primeiro codigo php <h2> PHP 8 </h2>";

    $nomeCompleto = 'gabriel henrique';

    $nome = 'gabriel';
    $completo = 'henrique';

    echo $nomeCompleto;
    echo '<br/>';
    echo $nome . ' ' . $completo;
    echo '<br/>';
    $nome = 'estela';

    echo $nome . ' ' . $completo;

    // CONTANTES
    echo '<br/>';
    define('CURSO', 'php');

    echo CURSO;

?>

<p>usando tag curta  <?= " <h3> tag curta em ação, nao precisa colocar echo pois a tag curta abrevia </h3> ";  ?> </p>

