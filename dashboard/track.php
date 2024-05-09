<?php
include '../db.php'; // Make sure this file contains your database connection details

// Function to get and increment visitor count
function getAndIncrementVisitorCount($conn) {
    // Start transaction
    mysqli_begin_transaction($conn);

    // Lock the table for write
    mysqli_query($conn, "LOCK TABLES visitor_count WRITE");

    // Read the current count
    $result = mysqli_query($conn, "SELECT total_count FROM visitor_count WHERE id = 1");
    $row = mysqli_fetch_assoc($result);
    $currentCount = $row['count'];
    $newCount = $currentCount + 1;

    // Update the count
    mysqli_query($conn, "UPDATE visitor_count SET total_count = $newCount WHERE id = 1");

    // Unlock tables
    mysqli_query($conn, "UNLOCK TABLES");

    // Commit transaction
    mysqli_commit($conn);

    return $newCount;
}

$visitorCount = getAndIncrementVisitorCount($conn);

echo '<div class="mt-6 text-3xl font-medium leading-8">' . number_format($visitorCount) . '</div>';
echo '<div class="mt-1 text-base text-slate-500">Unique Visitor</div>';
?>
