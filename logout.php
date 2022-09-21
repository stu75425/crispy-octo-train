<?php
session_start();
// Destroy session
if(session_destroy()) {
    // Redirecting to Homepage
    header("Location: index.html");
}
?>