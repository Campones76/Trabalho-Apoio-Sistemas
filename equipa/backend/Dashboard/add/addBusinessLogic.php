<?php
session_start();
require '/Applications/XAMPP/xamppfiles/htdocs/equipa/backend/Util/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Begin transaction
        $conn->beginTransaction();

        // Your database operations here
        $stmt = $conn->prepare("INSERT INTO businesses (name, description, country, city, latitude, longitude, cost_of_living, local_taxes)
            VALUES (:name, :description, :country, :city, :latitude, :longitude, :cost_of_living, :local_taxes)");
        $stmt->execute([
            ':name' => $_POST['business_name'],
            ':description' => $_POST['business_description'] ?? null,
            ':country' => $_POST['country'],
            ':city' => $_POST['city'],
            ':latitude' => $_POST['latitude'],
            ':longitude' => $_POST['longitude'],
            ':cost_of_living' => $_POST['cost_of_living'] ?? null,
            ':local_taxes' => $_POST['local_taxes'] ?? null,
        ]);

        // Get the last inserted business ID
        $business_id = $conn->lastInsertId();

        // Insert into infrastructure table
        $stmt = $conn->prepare("INSERT INTO infrastructure (business_id, office_quality, tech_availability, expansion_capacity) 
            VALUES (:business_id, :office_quality, :tech_availability, :expansion_capacity)");
        $stmt->execute([
            ':business_id' => $business_id,
            ':office_quality' => $_POST['office_quality'],
            ':tech_availability' => $_POST['tech_availability'],
            ':expansion_capacity' => $_POST['expansion_capacity'],
        ]);

        // Insert into infrastructure_types table
        $stmt = $conn->prepare("INSERT INTO infrastructure_types (business_id, type) 
            VALUES (:business_id, :type)");
        $stmt->execute([
            ':business_id' => $business_id,
            ':type' => $_POST['infrastructure_type'],
        ]);

        // Insert into transport_accessibility table
        $stmt = $conn->prepare("INSERT INTO transport_accessibility (business_id, mode) 
            VALUES (:business_id, :mode)");
        $stmt->execute([
            ':business_id' => $business_id,
            ':mode' => $_POST['transport_mode'],
        ]);

        // Handle specializations
        if (!empty($_POST['specializations'])) {
            $specializations = explode(',', $_POST['specializations']);
            foreach ($specializations as $spec) {
                // Check if specialization already exists
                $stmt = $conn->prepare("SELECT id FROM specializations WHERE name = :name");
                $stmt->execute([':name' => trim($spec)]);
                $specialization = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$specialization) {
                    // Insert new specialization
                    $stmt = $conn->prepare("INSERT INTO specializations (name) VALUES (:name)");
                    $stmt->execute([':name' => trim($spec)]);
                    $specialization_id = $conn->lastInsertId();
                } else {
                    $specialization_id = $specialization['id'];
                }

                // Link specialization with the business
                $stmt = $conn->prepare("INSERT INTO business_specializations (business_id, specialization_id) 
                    VALUES (:business_id, :specialization_id)");
                $stmt->execute([
                    ':business_id' => $business_id,
                    ':specialization_id' => $specialization_id,
                ]);
            }
        }

        // Insert into innovation_support table
        $stmt = $conn->prepare("INSERT INTO innovation_support (business_id, incubation_programs, mentorship, university_partnerships, investment_support) 
            VALUES (:business_id, :incubation_programs, :mentorship, :university_partnerships, :investment_support)");
        $stmt->execute([
            ':business_id' => $business_id,
            ':incubation_programs' => isset($_POST['incubation_programs']) ? 1 : 0,
            ':mentorship' => isset($_POST['mentorship']) ? 1 : 0,
            ':university_partnerships' => isset($_POST['university_partnerships']) ? 1 : 0,
            ':investment_support' => isset($_POST['investment_support']) ? 1 : 0,
        ]);

        // Insert into costs_and_benefits table
        $stmt = $conn->prepare("INSERT INTO costs_and_benefits (business_id, membership_cost, fiscal_incentives) 
            VALUES (:business_id, :membership_cost, :fiscal_incentives)");
        $stmt->execute([
            ':business_id' => $business_id,
            ':membership_cost' => $_POST['membership_cost'] ?? null,
            ':fiscal_incentives' => isset($_POST['fiscal_incentives']) ? 1 : 0,
        ]);

        // Insert into networks_and_partnerships table
        $stmt = $conn->prepare("INSERT INTO networks_and_partnerships (business_id, relevant_partners, university_links) 
            VALUES (:business_id, :relevant_partners, :university_links)");
        $stmt->execute([
            ':business_id' => $business_id,
            ':relevant_partners' => isset($_POST['relevant_partners']) ? 1 : 0,
            ':university_links' => isset($_POST['university_links']) ? 1 : 0,
        ]);

        // Insert into partnership_details table
        if (!empty($_POST['partner_name']) && !empty($_POST['partner_type'])) {
            $stmt = $conn->prepare("INSERT INTO partnership_details (business_id, partner_name, type) 
                VALUES (:business_id, :partner_name, :type)");
            $stmt->execute([
                ':business_id' => $business_id,
                ':partner_name' => $_POST['partner_name'],
                ':type' => $_POST['partner_type'],
            ]);
        }

        // Insert into environment_quality table
        $stmt = $conn->prepare("INSERT INTO environment_quality (business_id, environment_quality, social_infra_proximity, safety_level) 
            VALUES (:business_id, :environment_quality, :social_infra_proximity, :safety_level)");
        $stmt->execute([
            ':business_id' => $business_id,
            ':environment_quality' => $_POST['environment_quality'],
            ':social_infra_proximity' => isset($_POST['social_infra_proximity']) ? 1 : 0,
            ':safety_level' => $_POST['safety_level'],
        ]);

        // Insert into amenities table
        $stmt = $conn->prepare("INSERT INTO amenities (business_id, type) 
            VALUES (:business_id, :type)");
        $stmt->execute([
            ':business_id' => $business_id,
            ':type' => $_POST['amenity_type'],
        ]);

        // Commit transaction
        $conn->commit();
        echo "Business added successfully!";
    } catch (Exception $e) {
        // Rollback on error
        $conn->rollBack();
        echo "Failed to add business: " . $e->getMessage();
    }
}
?>
