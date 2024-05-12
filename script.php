<?php

// Simulated user data
$users = [
    'user1' => 'password1',
    'user2' => 'password2',
    // Add more users if needed
];

// Simulated movie data
$movies = [
    'The Godfather',
    'Pulp Fiction',
    'The Shawshank Redemption',
    'The Dark Knight',
    'Inception',
    // Add more movies if needed
];

// Function to authenticate user
function authenticateUser($username, $password) {
    global $users;
    if (isset($users[$username]) && $users[$username] === $password) {
        return true;
    } else {
        return false;
    }
}

// Function to list movies
function listMovies() {
    global $movies;
    echo "Available Movies:\n";
    foreach ($movies as $movie) {
        echo "- $movie\n";
    }
}

// Function to search for movies
function searchMovies($keyword) {
    global $movies;
    $matches = [];
    foreach ($movies as $movie) {
        if (stripos($movie, $keyword) !== false) {
            $matches[] = $movie;
        }
    }
    if (count($matches) > 0) {
        echo "Search results for '$keyword':\n";
        foreach ($matches as $match) {
            echo "- $match\n";
        }
    } else {
        echo "No movies found matching '$keyword'.\n";
    }
}

// Main program

// Simulated user input
$username = 'user1';
$password = 'password1';

// Authenticate user
if (authenticateUser($username, $password)) {
    echo "Login successful. Welcome, $username!\n";
    // List available movies
    listMovies();
    // Simulated search
    $searchKeyword = 'Dark';
    searchMovies($searchKeyword);
} else {
    echo "Invalid username or password. Please try again.\n";
}
?>
