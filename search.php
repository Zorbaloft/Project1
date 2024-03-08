<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the search query from the form submission
    $searchQuery = isset($_POST['search_query']) ? $_POST['search_query'] : '';

    // Redirect to shop.php with the search query as a parameter
    header("Location: Shop.php?search_query=" . urlencode($searchQuery));
    exit();
}


