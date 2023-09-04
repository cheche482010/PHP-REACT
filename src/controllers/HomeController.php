<?php
// src/controllers/HomeController.php

namespace App\Controllers;

class HomeController
{
    public function handle()
    {
        // Aquí puedes cargar el modelo, obtener datos si es necesario y mostrar la vista
        include('views/home/index.html');
    }
}
