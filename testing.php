<html>
    <!--http://compsci.adelphi.edu/~ryandeisler/IssueTrackingSystem/testing.php-->
<head>
	<title>Issue Tracking System</title>
</head>
<body>
	<h1>
	Issue Tracking System
	</h1>
    
    <?php
    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: login.php");
        exit;
    }
    else
    {
        echo "Welcome, ". $_SESSION['username'] . "<br>";
    }
    
    ?>
    <a href="newIncident.php">New Incidents</a>
    <a href="login.php">Login</a>
    <a href="openincidents.php">OpenList</a>
	<a href="search.php">Search & Edit</a>
    <a href="newCat.php">Create Category</a>
    <a href="logout.php">Logout</a>
	
</body>
</html>

<!--http://compsci.adelphi.edu/~ryandeisler/pageSourceCode.php-->