<?php
session_start();
require '/Applications/XAMPP/xamppfiles/htdocs/equipa/backend/Util/db_connection.php';

// Prepare query
$query = "
    SELECT businesses.*, 
           infrastructure.office_quality, 
           infrastructure.tech_availability, 
           infrastructure.expansion_capacity, 
           infrastructure_types.type AS infrastructure_type, 
           transport_accessibility.mode AS transport_mode, 
           costs_and_benefits.membership_cost, 
           costs_and_benefits.fiscal_incentives
    FROM businesses
    LEFT JOIN infrastructure ON businesses.id = infrastructure.business_id
    LEFT JOIN infrastructure_types ON businesses.id = infrastructure_types.business_id
    LEFT JOIN transport_accessibility ON businesses.id = transport_accessibility.business_id
    LEFT JOIN costs_and_benefits ON businesses.id = costs_and_benefits.business_id
    WHERE 1=1";

// Prepare parameters array for the query
$params = [];

// Filters
if (!empty($_GET['business_name'])) {
    $query .= " AND businesses.name LIKE :business_name";
    $params[':business_name'] = '%' . $_GET['business_name'] . '%';
}

if (!empty($_GET['country'])) {
    $query .= " AND businesses.country LIKE :country";
    $params[':country'] = '%' . $_GET['country'] . '%';
}

if (!empty($_GET['city'])) {
    $query .= " AND businesses.city LIKE :city";
    $params[':city'] = '%' . $_GET['city'] . '%';
}

if (!empty($_GET['cost_of_living'])) {
    $query .= " AND businesses.cost_of_living <= :cost_of_living";
    $params[':cost_of_living'] = $_GET['cost_of_living'];
}

if (!empty($_GET['local_taxes'])) {
    $query .= " AND businesses.local_taxes <= :local_taxes";
    $params[':local_taxes'] = $_GET['local_taxes'];
}

if (!empty($_GET['fiscal_incentives'])) {
    $query .= " AND costs_and_benefits.fiscal_incentives = :fiscal_incentives";
    $params[':fiscal_incentives'] = $_GET['fiscal_incentives'];
}

if (!empty($_GET['transport_mode'])) {
    $query .= " AND transport_accessibility.mode = :transport_mode";
    $params[':transport_mode'] = $_GET['transport_mode'];
}

// Prepare and execute the query
$stmt = $conn->prepare($query);
$stmt->execute($params);

// Fetch results
$businesses = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Store the results in the session to be accessed later
$_SESSION['businesses'] = $businesses;

// Redirect to the results page
header("Location: ../../../frontend/Dashboard/resultspage.php");

exit();
?>
