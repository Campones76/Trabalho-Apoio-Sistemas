<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Businesses</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<h1>REMAX DOS NEGÓCIOS</h1>

<form action="searchBusinessesLogic.php" method="GET">
    <!-- Business Name Filter -->
    <label for="business_name">Business Name:</label>
    <input type="text" name="business_name" id="business_name" placeholder="Enter business name">

    <!-- Country Filter -->
    <label for="country">Country:</label>
    <input type="text" name="country" id="country" placeholder="Enter country">

    <!-- City Filter -->
    <label for="city">City:</label>
    <input type="text" name="city" id="city" placeholder="Enter city">

    <!-- Cost of Living Filter -->
    <label for="cost_of_living">Cost of Living (max):</label>
    <input type="number" name="cost_of_living" id="cost_of_living" placeholder="Enter max cost of living" step="0.01">

    <!-- Local Taxes Filter -->
    <label for="local_taxes">Local Taxes (max):</label>
    <input type="number" name="local_taxes" id="local_taxes" placeholder="Enter max local taxes" step="0.01">

    <!-- Infrastructure Filters -->
    <h3>Infrastructure</h3>
    <label for="office_quality">Office Quality:</label>
    <select name="office_quality" id="office_quality">
        <option value="">-- Select --</option>
        <option value="Alto">Alto</option>
        <option value="Médio">Médio</option>
        <option value="Baixo">Baixo</option>
    </select>

    <label for="tech_availability">Tech Availability:</label>
    <select name="tech_availability" id="tech_availability">
        <option value="">-- Select --</option>
        <option value="Disponível">Disponível</option>
        <option value="Indisponível">Indisponível</option>
    </select>

    <label for="expansion_capacity">Expansion Capacity:</label>
    <select name="expansion_capacity" id="expansion_capacity">
        <option value="">-- Select --</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
    </select>

    <label for="infrastructure_type">Infrastructure Type:</label>
    <select name="infrastructure_type" id="infrastructure_type">
        <option value="">-- Select --</option>
        <option value="Escritórios">Escritórios</option>
        <option value="Laboratórios">Laboratórios</option>
        <option value="Espaços de coworking">Espaços de coworking</option>
    </select>

    <!-- Transport Accessibility -->
    <h3>Transport Accessibility</h3>
    <label for="transport_mode">Transport Mode:</label>
    <select name="transport_mode" id="transport_mode">
        <option value="">-- Select --</option>
        <option value="Rodovias">Rodovias</option>
        <option value="Ferrovias">Ferrovias</option>
        <option value="Aeroportos">Aeroportos</option>
    </select>

    <!-- Specializations Filter -->
    <label for="specializations">Specializations (comma-separated):</label>
    <input type="text" name="specializations" id="specializations" placeholder="Enter specializations">

    <!-- Costs and Benefits -->
    <h3>Costs and Benefits</h3>
    <label for="membership_cost">Membership Cost (max):</label>
    <input type="number" name="membership_cost" id="membership_cost" placeholder="Enter max membership cost" step="0.01">

    <label for="fiscal_incentives">Fiscal Incentives:</label>
    <input type="checkbox" name="fiscal_incentives" id="fiscal_incentives">

    <!-- Submit Button -->
    <button type="submit">Search</button>
</form>

</body>
</html>
