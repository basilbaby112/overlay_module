<?php
include 'header.php';
$mysqli = new mysqli("localhost", "root", "", "overlay_module");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $targeting_rule = $_POST['targeting_rule'];
    $overlay_type = $_POST['overlay_type'];
    $display_rule = $_POST['display_rule'];

    $stmt = $mysqli->prepare("INSERT INTO settings (title, targeting_rule, overlay_type, display_rule) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $targeting_rule, $overlay_type, $display_rule);
    $stmt->execute();
    $stmt->close();

    echo "Settings saved!";
}
?>

    <div class="container">
    <h3>Settings</h3>
        <div class="mb-3">
            <form method="post" action="">
                <label class="form-label">Title:</label>
                <input class="form-control" type="text" name="title" required><br>

                <label class="form-label">Targeting Rule:</label>
                <select class="form-select" name="targeting_rule">
                    <option value="homepage">Homepage</option>
                </select><br>

                <label class="form-label">Overlay Type:</label>
                <select class="form-select" name="overlay_type">
                    <option value="footer_slidein">Footer SlideIn</option>
                    <option value="modal_overlay">Modal Overlay</option>
                </select><br>

                <label class="form-label">Display Rules:</label>
                <select class="form-select" name="display_rule">
                    <option value="once_per_day">Once per day</option>
                    <option value="once_per_session">Once per session</option>
                </select><br>

                <button class="btn btn-primary" type="submit">Save Settings</button>
            </form>
        </div>
    </div>
</body>
</html>
