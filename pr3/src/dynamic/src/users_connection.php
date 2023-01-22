<?php
function getConnection() {
    return new mysqli("db", "root", "root", "library_db");
}
