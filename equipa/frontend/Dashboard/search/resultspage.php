<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Search Results</title>
    <link rel="stylesheet" href="../../../assets/resultpageStyles.css">
</head>
<body>
<h2>Resultados de Pesquisa</h2>

<?php
    session_start();

    // Check if businesses were found and stored in the session
    if (isset($_SESSION['businesses']) && !empty($_SESSION['businesses'])) {
        $businesses = $_SESSION['businesses'];

        echo "<table>";
echo "<tr>
    <th>Nome da Incubadora</th>
    <th>Telefone</th>
    <th>País</th>
    <th>Cidade</th>
    <th>Custo de vida</th>
    <th>Impóstos Locais</th>
    <th>Qualidade de escritórios</th>
    <th>Disponibilidade de Tecnologia</th>
    <th>Capacidade de Expansão</th>
    <th>Tipo de Infraestrutura</th>
    <th>Acessibilidade ao Transporte</th>
    <th>Incentivos Fiscais</th>
    <th>Mensalidade</th>
</tr>";

// Loop through businesses and output each row in the table
foreach ($businesses as $business) {
echo "<tr>";
    echo "<td>" . htmlspecialchars($business['name']) . "</td>";
    echo "<td>" . htmlspecialchars($business['tele']) . "</td>";
    echo "<td>" . htmlspecialchars($business['country']) . "</td>";
    echo "<td>" . htmlspecialchars($business['city']) . "</td>";
    echo "<td>" . htmlspecialchars($business['cost_of_living']) . "</td>";
    echo "<td>" . htmlspecialchars($business['local_taxes']) . "</td>";
    echo "<td>" . htmlspecialchars($business['office_quality'] ?? 'N/A') . "</td>";
    echo "<td>" . htmlspecialchars($business['tech_availability'] ?? 'N/A') . "</td>";
    echo "<td>" . htmlspecialchars($business['expansion_capacity'] ?? 'N/A') . "</td>";
    echo "<td>" . htmlspecialchars($business['infrastructure_type'] ?? 'N/A') . "</td>";
    echo "<td>" . htmlspecialchars($business['transport_mode'] ?? 'N/A') . "</td>";
    echo "<td>" . (htmlspecialchars($business['fiscal_incentives']) ? '<span class="yes">Sim</span>' : '<span class="no">Não</span>') . "</td>";
    echo "<td>" . htmlspecialchars($business['membership_cost'] ?? 'N/A') . "</td>";
    echo "</tr>";
}

echo "</table>";
} else {
echo "<p>Não foram encontradas nenhumas incubadoras com base na sua criteria de pesquisa.</p>";

}
?>

</body>
</html>
