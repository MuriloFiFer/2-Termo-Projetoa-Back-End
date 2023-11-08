<?php
// Função para calcular a quantidade de latas necessárias
function calcularLatas($metro) {
    $coberturaPorLata = 18 * 6; // 1 lata cobre 18 * 6 metros quadrados
    $quantidadeLatas = ceil(($metro * 1.1) / $coberturaPorLata);
    return $quantidadeLatas;
}

// Função para calcular a quantidade de galões necessários
function calcularGaloes($metro) {
    $coberturaPorGalao = 3.6 * 6; // 1 galão cobre 3.6 * 6 metros quadrados
    $quantidadeGaloes = ceil(($metro * 1.1) / $coberturaPorGalao);
    return $quantidadeGaloes;
}

// Função para calcular a mistura de latas e galões com menor preço
function calcularMistura($metro) {
    $quantidadeLatas = calcularLatas($metro);
    $quantidadeGaloes = calcularGaloes($metro);

    // Calcula o preço de comprar apenas latas
    $precoApenasLatas = $quantidadeLatas * 80;

    // Calcula o preço de comprar apenas galões
    $precoApenasGaloes = $quantidadeGaloes * 25;

    // Calcula o preço de misturar latas e galões
    $latasNecessarias = $quantidadeLatas;
    $galoesNecessarios = ceil(($metro * 1.1 - $latasNecessarias * 18 * 6) / (3.6 * 6));
    $precoMistura = ($latasNecessarias * 80) + ($galoesNecessarios * 25);

    return [$quantidadeLatas, $quantidadeGaloes, $precoApenasLatas, $precoApenasGaloes, $precoMistura];
}

// Verifica se foi enviado um valor de área via POST
if(isset($_POST['metro'])) {
    $metro_a_pintar = floatval($_POST['metro']);

    // Calcula as quantidades e preços
    list($quantidadeLatas, $quantidadeGaloes, $precoLatas, $precoGaloes, $precoMistura) = calcularMistura($metro_a_pintar);

    // Exibe os resultados
    echo "Quantidade de latas necessárias: $quantidadeLatas<br>";
    echo "Preço das latas: R$" . number_format($precoLatas, 2, '.', '') . "<br>";

    echo "Quantidade de galões necessários: $quantidadeGaloes<br>";
    echo "Preço dos galões: R$" . number_format($precoGaloes, 2, '.', '') . "<br>";

    echo "Quantidade de latas e galões comprados juntos: $quantidadeLatas latas e $quantidadeGaloes galões<br>";
    echo "Preço juntos: R$" . number_format($precoMistura, 2, '.', '');
}
?>

