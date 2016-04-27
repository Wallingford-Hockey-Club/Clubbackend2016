<?php
           include 'database.php';
           $pdo = Database::connect();
           $sql = 'SELECT * FROM tbl_club';
           foreach ($pdo->query($sql) as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['club_id'] . '</td>';
                    echo '<td>'. $row['clubname'] . '</td>';
                    echo '</tr>';
           }
           Database::disconnect();
?>
test