<?php
if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
    $notas = array(
        floatval($_POST['nota1']),
        floatval($_POST['nota2']),
        floatval($_POST['nota3'])
    );
}

$media = array_sum($notas) / count($notas);

for ($i = 0; $i < 3; $i++) {
    echo "NOTA = " . $notas[$i] . "<br>";
}

if ($media >= 6) {
    echo "Média = $media: Aprovado";
} else {
    echo "Média = $media: Reprovado";
}
?>
