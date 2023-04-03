<?php

//Almacena en la memoria del server
$computadora = [
  "CPU"       =>      "Intel Core i7",
  "RAM"       =>      32,
  "STORAGE"   =>      ["SSD", "HDD"],
  "SO"        =>      "WINDOWS",
  "VERSION"   =>       10,
  "APPS"     =>       ["Office", "VScode", "NetBeans", "Xampp"]
];

//echo $computadora["CPU"];
echo json_encode($computadora);