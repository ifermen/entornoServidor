<?php
/* 
22. Dato un array con información de empleados y sus departamentos:
$empleados = [
 ["nombre" => "Laura", "departamento" => "Ventas", "salario" =>
1200],
 ["nombre" => "Pedro", "departamento" => "Marketing", "salario" =>
1500],
 ["nombre" => "Sofía", "departamento" => "Ventas", "salario" =>
1300],
 ["nombre" => "Javier", "departamento" => "IT", "salario" => 1800],
 ["nombre" => "Marta", "departamento" => "Marketing", "salario" =>
1600],
];
- Calcula el salario medio por departamento.
- Muestra el empleado con el salario más alto.
- Crea una función que reciba el departamento y devuelva un array con los
nombres de los empleados que trabajan ahí
*/

$empleados = [
 ["nombre" => "Laura", "departamento" => "Ventas", "salario" => 1200],
 ["nombre" => "Pedro", "departamento" => "Marketing", "salario" =>1500],
 ["nombre" => "Sofía", "departamento" => "Ventas", "salario" => 1300],
 ["nombre" => "Javier", "departamento" => "IT", "salario" => 1800],
 ["nombre" => "Marta", "departamento" => "Marketing", "salario" => 1600]
];

function avgSalaryByDepartment(){
    global $empleados;
    $totalSalaryByDepartment = [];
    $avgSalaryByDepartment = [];

    foreach($empleados as $employee){
        if(!isset($totalSalaryByDepartment[$employee["departamento"]])){
            $totalSalaryByDepartment[$employee["departamento"]] = 
                [$employee["salario"],1];
        }else{
            $totalSalaryByDepartment[$employee["departamento"]] = 
                [$totalSalaryByDepartment[$employee["departamento"]][0] + $employee["salario"],
                $totalSalaryByDepartment[$employee["departamento"]][1]+1];
        }
    }
/*
    foreach($totalSalaryByDepartment as $department => $total){
        echo $department . " => [" . $total[0] . ", " . $total[1] . "]<br>";
    }
*/
    foreach($totalSalaryByDepartment as $department => $total){
       $avgSalaryByDepartment[$department] = $total[0] / $total[1];
    }

    foreach($avgSalaryByDepartment as $department => $total){
        echo $department . " => " . $total . "<br>";
    }
}

function getEmployeeWithHighestSalary(){
    global $empleados;
    $employeeWithHighestSalary = $empleados[0];

    foreach($empleados as $employee){
        if($employee["salario"]>$employeeWithHighestSalary["salario"]){
            $employeeWithHighestSalary = $employee;
        }
    }

    return $employeeWithHighestSalary;
}

function getEmployeesByDepartment($department){
    global $empleados;
    $employees = [];

    foreach($empleados as $employee){
        if($employee["departamento"] == $department){
            $employees[] = $employee;
        }
    }

    return $employees;
}

avgSalaryByDepartment();

$employeeWithHighestSalary = getEmployeeWithHighestSalary();

echo $employeeWithHighestSalary["nombre"] . "<br>";

$employeeByDepartment = getEmployeesByDepartment("Marketing");

foreach($employeeByDepartment as $employee){
    echo $employee["nombre"] . "<br>";
}