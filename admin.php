<?php
 include('partials/header.php');
?>

    <section>
    <div class="jumbotron text-center">
  <h1>Vitaj Admin</h1>
  <section>
    <br>
        <h2>Info od používateľa</h2>
        <?php 

        $conn = mysqli_connect("localhost", "root", "", "web");

        // Kontrola spojenia
        if (!$conn) {
             die("Spojenie s databázou zlyhalo: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM kontakt";
        $result = mysqli_query($conn, $sql);
        
        // 3. Spracovanie dát a vypísanie do HTML kódu
        if (mysqli_num_rows($result) > 0) {
            echo '<table class="my-table" style="border-spacing: 10px; border-collapse: separate;padding-left: 40px; margin: 40px 0;">';
            echo '<thead><tr><th>ID</th><th>Meno</th><th>Email</th><th>Správa</th></tr></thead>';
            echo '<tbody>';
            while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td '>" . $row["name"] . "</td>";
            echo "<td >" . $row["email"] . "</td>";
            echo "<td >" . $row["message"] . "</td>";
            echo "</tr>";
}
echo '</tbody></table>';
            echo '</tbody>';
            echo "</table>";
        } else {
          echo "Žiadne výsledky.";
        }
        
        // 4. Ukončenie spojenia s databázou
        mysqli_close($conn);
        ?>
        <h2>Portfólio</h2>
</div>
    </section>
    
        