<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Incubadoras</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<h1>Pesquisa de Incubadoras</h1>

<form action="../../../backend/Dashboard/search/searchBusinessesLogic.php" method="GET">
    <!-- Business Name Filter -->
    <!--<label for="business_name">Nome da Empresa:</label>
    <input type="text" name="business_name" id="business_name" placeholder="Introduza o nome da empresa">-->

    <!-- Country Filter -->
    <label for="country">País:</label>
    <input type="text" name="country" id="country" placeholder="Introduzir País">

    <!-- City Filter -->
    <label for="city">Cidade:</label>
    <input type="text" name="city" id="city" placeholder="Introduzir Cidade">

    <!-- Cost of Living Filter -->
    <label for="cost_of_living">Custo de Vida (máx):</label>
    <input type="number" name="cost_of_living" id="cost_of_living" placeholder="Introduza o custo máximo de vida" step="0.01">

    <!-- Local Taxes Filter -->
    <label for="local_taxes">Impostos Locais (máx):</label>
    <input type="number" name="local_taxes" id="local_taxes" placeholder="Introduza o imposto local máximo" step="0.01">

    <!-- Infrastructure Filters -->
    <h3>Infraestrutura</h3>
    <label for="office_quality">Qualidade de Escritório:</label>
    <select name="office_quality" id="office_quality">
        <option value="">-- Selecione --</option>
        <option value="Alto">Alto</option>
        <option value="Médio">Médio</option>
        <option value="Baixo">Baixo</option>
    </select>

    <label for="tech_availability">Disponibilidade de Tecnologia:</label>
    <select name="tech_availability" id="tech_availability">
        <option value="">-- Selecione --</option>
        <option value="Disponível">Disponível</option>
        <option value="Indisponível">Indisponível</option>
    </select>

    <label for="expansion_capacity">Capacidade de Expansão:</label>
    <select name="expansion_capacity" id="expansion_capacity">
        <option value="">-- Selecione --</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
    </select>

    <label for="infrastructure_type">Tipo de Infraestrutura:</label>
    <select name="infrastructure_type" id="infrastructure_type">
        <option value="">-- Selecione --</option>
        <option value="Escritórios">Escritórios</option>
        <option value="Laboratórios">Laboratórios</option>
        <option value="Espaços de coworking">Espaços de coworking</option>
    </select>

    <!-- Transport Accessibility -->
    <h3>Acessibilidade ao Transporte</h3>
    <label for="transport_mode">Modo de Transporte:</label>
    <select name="transport_mode" id="transport_mode">
        <option value="">-- Selecione --</option>
        <option value="Rodovias">Rodovias</option>
        <option value="Ferrovias">Ferrovias</option>
        <option value="Aeroportos">Aeroportos</option>
    </select>

    <!-- Specializations Filter -->
    <label for="specializations">Especializações (separadas por vírgulas):</label>
    <input type="text" name="specializations" id="specializations" placeholder="Introduza as especializações">

    <!-- Costs and Benefits -->
    <h3>Custos e Benefícios</h3>
    <label for="membership_cost">Custo de Adesão (máx):</label>
    <input type="number" name="membership_cost" id="membership_cost" placeholder="Introduza o custo máximo de adesão" step="0.01">

    <label for="fiscal_incentives">Incentivos Fiscais:</label>
    <input type="checkbox" name="fiscal_incentives" id="fiscal_incentives">

    <!-- Submit Button -->
    <button type="submit">Pesquisar</button>
</form>

</body>
</html>
