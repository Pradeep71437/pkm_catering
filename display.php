<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "pkm_catering");

$query = "SELECT * FROM orders";
$result = mysqli_query($connection, $query);

echo "<h2>Order Details:</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>City</th>
                <th>Date</th>
                <th>Guests</th>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Dinner</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        // Check if the keys exist before accessing them
        $uname = isset($row['uname']) ? $row['uname'] : '';
        $unumber = isset($row['unumber']) ? $row['unumber'] : '';
        $umail = isset($row['umail']) ? $row['umail'] : '';
        $ucity = isset($row['ucity']) ? $row['ucity'] : '';
        $udate = isset($row['udate']) ? $row['udate'] : '';
        $uguests = isset($row['uguests']) ? $row['uguests'] : '';

        // Unserialize the arrays
        $breakfast = isset($row['breakfast']) ? unserialize($row['breakfast']) : [];
        $lunch = isset($row['lunch']) ? unserialize($row['lunch']) : [];
        $dinner = isset($row['dinner']) ? unserialize($row['dinner']) : [];

        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['user_name']}</td>
                <td>{$row['user_number']}</td>
                <td>{$row['user_mail']}</td>
                <td>{$row['user_city']}</td>
                <td>{$row['event_date']}</td>
                <td>{$row['total_guests']}</td>
                <td>" . implode(', ', $breakfast) . "</td>
                <td>" . implode(', ', $lunch) . "</td>
                <td>" . implode(', ', $dinner) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No orders found.";
}

mysqli_close($connection);
?>