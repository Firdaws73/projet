<?php
session_start();
include("db.php"); // Inclure le fichier de connexion à la base de données

if (isset($_POST['add_to_favorites'])) {
    $userID = $_SESSION['id_client']; // Récupérer l'ID de l'utilisateur à partir de la session (suppose que l'utilisateur est connecté)
    $propertyID = $_POST['id_pro']; // Récupérer l'ID de la propriété à ajouter aux favoris

    // Vérifier si la propriété exis    te déjà dans les favoris de l'utilisateur
    $checkQuery = "SELECT * FROM user WHERE id_client = ? AND id_pro = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ii", $userID, $propertyID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        // Si la propriété n'est pas déjà dans les favoris de l'utilisateur, l'ajouter
        $addToFavoritesQuery = "INSERT INTO Favoris (UserID, PropertyID) VALUES (?, ?)";
        $stmt = $conn->prepare($addToFavoritesQuery);
        $stmt->bind_param("ii", $userID, $propertyID);

        if ($stmt->execute()) {
            echo "La propriété a été ajoutée aux favoris avec succès!";
            // Redirection vers une autre page ou actions supplémentaires si nécessaire
        } else {
            echo "Une erreur s'est produite lors de l'ajout de la propriété aux favoris.";
        }
    } else {
        echo "La propriété est déjà dans vos favoris.";
    }
}
?>
