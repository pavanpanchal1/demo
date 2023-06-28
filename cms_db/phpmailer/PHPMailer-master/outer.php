<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'db.php';

$query = "SELECT Employees.employee_id, Employees.employee_name, Departments.department_name 
FROM Employees
outer JOIN Departments ON Employees.department_id = Departments.department_id  where Employees.employee_id=Departments.department_id";

$result = mysqli_query($conn, $query);

while ($row = $result->fetch_assoc()) {
    echo "<table>";
    echo "<td><br>" . $row['employee_id'] . "</td>";
    echo "<td><br>" . $row['employee_name'] . "</td>";
    echo "<td><br>" . $row['hire_date'] . "</td>";
    echo "<td><br>" . $row['department_id'] . "</td>";
    echo "<td><br>" . $row['department_name'] . "</td>";

    echo "</table>";

}


?>
<style>
    td {
        width: 50px;
    }
</style>