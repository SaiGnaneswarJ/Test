<html>
<head>
    <title>HOME PAGE</title>
</head>
<body>
    <header>
    <button style = "float:right;" onclick="confirmLogout()">Logout</button>
    </header>
    
    <h1>Welcome,<?php echo base64_decode($_GET['data']);?>!</h1>
</body>
</html>
<script>
    function confirmLogout() {
        confirmation = confirm("Are you sure you want to logout?");
        if (confirmation) {
            window.location.href = "logout.php";
        }
    }
</script>

