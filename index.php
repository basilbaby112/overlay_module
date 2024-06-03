<?php
include 'header.php';
$mysqli = new mysqli("localhost", "root", "", "overlay_module");
$result = $mysqli->query("SELECT * FROM settings ORDER BY id DESC LIMIT 1");
$settings = $result->fetch_assoc();
?>

        <div class="overlay <?= $settings['overlay_type'] ?>">
            <h4><?= $settings['title'] ?></h4>
        </div>
    <div class="container">
        <h3>Welcome to our homepage!</h3>
            <form id="subscriptionForm">
            <div class="col-6">
                <label class="form-label">Email:</label>
                <input class="form-control" type="email" name="email" required><br>
                <button class="btn btn-primary" type="submit">Subscribe</button>
            </div>
            </form>
    </div>

    <script>
        $(document).ready(function() {
            
            $('#subscriptionForm').on('submit', function(event) {
                event.preventDefault();
                let email = $('input[name="email"]').val();

                $.ajax({
                    url: 'subscribe.php',
                    method: 'POST',
                    data: { email: email },
                    success: function(response) {
                        alert('Thank you for subscribing!');
                        $('.overlay').removeClass('show');
                    },
                    error: function() {
                        alert('There was an error. Please try again.');
                    }
                });
            });
        });
    </script>
</body>
</html>
