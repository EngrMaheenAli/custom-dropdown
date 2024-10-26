<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['languages'])) {
        $languages = $_POST['languages'];
        echo "<h2>You selected the following languages:</h2>";
        echo "<ul>";
        foreach ($languages as $language) {
            echo "<li>" . htmlspecialchars($language) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<h2>No languages were selected.</h2>";
    }
}
?>
