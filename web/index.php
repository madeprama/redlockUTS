<!DOCTYPE html>
<html>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $db = new mysqli('databasee','root','','Redlock');
                $query = "SELECT * FROM users";
                $result = $db->query($query);
                $count = 0;
                while ($row = $result->fetch_assoc()) {
                    $count = $count + 1;
                    echo "<tr>";
                    echo "<td>".$row['ID']."</td>";
                    echo "<td>".$row['Nama']."</td>";
                    echo "<td>".$row['Alamat']."</td>";
                    echo "<td>".$row['Jabatan']."</td>";
                    echo "</tr>";
                }
                echo "Result: ". "$count";
            ?>
        </tbody>
    </table>
</body>
</html>
