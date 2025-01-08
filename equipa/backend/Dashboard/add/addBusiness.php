<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Business</title>
</head>
<body>
<h1>Add a New Business</h1>
<form action="addBusinessLogic.php" method="POST">
    <!-- Business Details -->
    <h2>Business Details</h2>
    <label for="business_name">Name:</label>
    <input type="text" id="business_name" name="business_name" required><br>

    <label for="business_description">Description:</label>
    <textarea id="business_description" name="business_description"></textarea><br>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country" required><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" required><br>

    <label for="latitude">Latitude:</label>
    <input type="number" id="latitude" name="latitude" step="0.0000001" required><br>

    <label for="longitude">Longitude:</label>
    <input type="number" id="longitude" name="longitude" step="0.0000001" required><br>

    <label for="cost_of_living">Cost of Living:</label>
    <input type="number" id="cost_of_living" name="cost_of_living" step="0.01"><br>

    <label for="local_taxes">Local Taxes:</label>
    <input type="number" id="local_taxes" name="local_taxes" step="0.01"><br>

    <!-- Infrastructure -->
    <h2>Infrastructure</h2>
    <label for="office_quality">Office Quality:</label>
    <select id="office_quality" name="office_quality">
        <option value="Alto">Alto</option>
        <option value="Médio">Médio</option>
        <option value="Baixo">Baixo</option>
    </select><br>

    <label for="tech_availability">Tech Availability:</label>
    <select id="tech_availability" name="tech_availability">
        <option value="Disponível">Disponível</option>
        <option value="Indisponível">Indisponível</option>
    </select><br>

    <label for="expansion_capacity">Expansion Capacity:</label>
    <select id="expansion_capacity" name="expansion_capacity">
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
    </select><br>

    <label for="infrastructure_type">Infrastructure Type:</label>
    <select id="infrastructure_type" name="infrastructure_type">
        <option value="Escritórios">Escritórios</option>
        <option value="Laboratórios">Laboratórios</option>
        <option value="Espaços de coworking">Espaços de coworking</option>
    </select><br>

    <!-- Transport Accessibility -->
    <h2>Transport Accessibility</h2>
    <label for="transport_mode">Transport Mode:</label>
    <select id="transport_mode" name="transport_mode">
        <option value="Rodovias">Rodovias</option>
        <option value="Ferrovias">Ferrovias</option>
        <option value="Aeroportos">Aeroportos</option>
    </select><br>

    <!-- Specializations -->
    <h2>Specializations</h2>
    <label for="specializations">Specializations (comma-separated):</label>
    <input type="text" id="specializations" name="specializations"><br>

    <!-- Innovation Support -->
    <h2>Innovation Support</h2>
    <label for="incubation_programs">Incubation Programs:</label>
    <input type="checkbox" id="incubation_programs" name="incubation_programs"><br>

    <label for="mentorship">Mentorship:</label>
    <input type="checkbox" id="mentorship" name="mentorship"><br>

    <label for="university_partnerships">University Partnerships:</label>
    <input type="checkbox" id="university_partnerships" name="university_partnerships"><br>

    <label for="investment_support">Investment Support:</label>
    <input type="checkbox" id="investment_support" name="investment_support"><br>

    <!-- Costs and Benefits -->
    <h2>Costs and Benefits</h2>
    <label for="membership_cost">Membership Cost:</label>
    <input type="number" id="membership_cost" name="membership_cost" step="0.01"><br>

    <label for="fiscal_incentives">Fiscal Incentives:</label>
    <input type="checkbox" id="fiscal_incentives" name="fiscal_incentives"><br>

    <!-- Networks and Partnerships -->
    <h2>Networks and Partnerships</h2>
    <label for="relevant_partners">Relevant Partners:</label>
    <input type="checkbox" id="relevant_partners" name="relevant_partners"><br>

    <label for="university_links">University Links:</label>
    <input type="checkbox" id="university_links" name="university_links"><br>

    <!-- Partnership Details -->
    <h2>Partnership Details</h2>
    <label for="partner_name">Partner Name:</label>
    <input type="text" id="partner_name" name="partner_name"><br>

    <label for="partner_type">Partner Type:</label>
    <select id="partner_type" name="partner_type">
        <option value="Empresa">Empresa</option>
        <option value="Universidade">Universidade</option>
        <option value="Instituição">Instituição</option>
    </select><br>

    <!-- Environment Quality -->
    <h2>Environment Quality</h2>
    <label for="environment_quality">Environment Quality:</label>
    <select id="environment_quality" name="environment_quality">
        <option value="Alto">Alto</option>
        <option value="Médio">Médio</option>
        <option value="Baixo">Baixo</option>
    </select><br>

    <label for="social_infra_proximity">Social Infrastructure Proximity:</label>
    <input type="checkbox" id="social_infra_proximity" name="social_infra_proximity"><br>

    <label for="safety_level">Safety Level:</label>
    <select id="safety_level" name="safety_level">
        <option value="Alto">Alto</option>
        <option value="Médio">Médio</option>
        <option value="Baixo">Baixo</option>
    </select><br>

    <!-- Amenities -->
    <h2>Amenities</h2>
    <label for="amenity_type">Amenity Type:</label>
    <select id="amenity_type" name="amenity_type">
        <option value="Escola">Escola</option>
        <option value="Hospital">Hospital</option>
        <option value="Comércio">Comércio</option>
    </select><br>

    <button type="submit">Add Business</button>
</form>
</body>
</html>
