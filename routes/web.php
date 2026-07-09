<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
Route::get('/categorias', function () {

    $categorias = json_decode(json_encode([
        ["codigo" => "A02", "nombre" => "Medicamentos para el tratamiento de Trastornos causados por Ácidos"],
        ["codigo" => "A03", "nombre" => "Medicamentos contra Trastornos Funcionales Gastrointestinales"],
        ["codigo" => "A04", "nombre" => "Medicamentos Antieméticos y Antinauseosos"],
        ["codigo" => "A06", "nombre" => "Medicamentos para el Estreñimiento"],
        ["codigo" => "A07", "nombre" => "Medicamentos Antidiarreicos, Antiinflamatorios y Antiinfecciosos Intestinales"],
        ["codigo" => "A10", "nombre" => "Medicamentos usados en Diabetes"],
        ["codigo" => "A11", "nombre" => "Vitaminas"],
        ["codigo" => "A12", "nombre" => "Suplementos Minerales"],
    ]));

    $html = "<table border='1' cellpadding='8' cellspacing='0'>";
    $html .= "<tr><th>CÓDIGO</th><th>CATEGORÍA</th></tr>";

    foreach ($categorias as $categoria) {
        $html .= "<tr>";
        $html .= "<td>$categoria->codigo</td>";
        $html .= "<td>$categoria->nombre</td>";
        $html .= "</tr>";
    }

    $html .= "</table>";

    return $html;
});
Route::get('/medicamentos', function () {

    $medicamentos = json_decode(json_encode([
        ["codigo" => "A02BA02", "no" => 1, "nombre" => "Ranitidina", "dosis" => "50 mg", "forma" => "Líquidos parenterales", "via" => "IM/IV"],
        ["codigo" => "A02BA03", "no" => 2, "nombre" => "Famotidina", "dosis" => "40 mg", "forma" => "Sólidos orales", "via" => "VO"],
        ["codigo" => "A02BC01", "no" => 3, "nombre" => "Omeprazol", "dosis" => "20 mg", "forma" => "Sólidos orales", "via" => "VO"],
        ["codigo" => "A02BC01", "no" => 4, "nombre" => "Omeprazol", "dosis" => "40 mg", "forma" => "Sólidos parenterales", "via" => "IV"],
        ["codigo" => "A03BA01", "no" => 1, "nombre" => "Atropina (Sulfato)", "dosis" => "0.5–1 mg/mL", "forma" => "Líquidos parenterales", "via" => "SC/IM/IV"],
        ["codigo" => "A03BA03", "no" => 2, "nombre" => "Hiosciamina (bromuro de n-butil hioscina)", "dosis" => "10 mg", "forma" => "Sólidos orales", "via" => "VO"],
        ["codigo" => "A03BA03", "no" => 3, "nombre" => "Hiosciamina (bromuro de n-butil hioscina)", "dosis" => "20 mg/mL", "forma" => "Líquidos parenterales", "via" => "IM/IV"],
        ["codigo" => "A03FA01", "no" => 4, "nombre" => "Metoclopramida (clorhidrato)", "dosis" => "5 mg/mL", "forma" => "Líquidos parenterales", "via" => "IM/IV"],
        ["codigo" => "A03FA01", "no" => 5, "nombre" => "Metoclopramida (clorhidrato)", "dosis" => "10 mg", "forma" => "Sólidos orales", "via" => "VO"],
        ["codigo" => "A04AA01", "no" => 1, "nombre" => "Ondansetron", "dosis" => "8 mg", "forma" => "Sólidos orales", "via" => "VO"],
        ["codigo" => "A04AA01", "no" => 2, "nombre" => "Ondansetron", "dosis" => "2 mg/mL", "forma" => "Líquidos parenterales", "via" => "IV"],
        ["codigo" => "A04AA02", "no" => 3, "nombre" => "Granisetron", "dosis" => "1 mg", "forma" => "Sólidos orales", "via" => "VO"],
        ["codigo" => "A04AA02", "no" => 4, "nombre" => "Granisetron", "dosis" => "1 mg/mL", "forma" => "Líquidos parenterales", "via" => "IV"],
        ["codigo" => "R06AA11", "no" => 5, "nombre" => "Dimenhidrinato", "dosis" => "50 mg", "forma" => "Sólidos orales", "via" => "VO"],
        ["codigo" => "R06AA11", "no" => 6, "nombre" => "Dimenhidrinato", "dosis" => "50 mg/mL", "forma" => "Líquidos parenterales", "via" => "IM/IV"],
    ]));

    $html = "<table border='1' cellpadding='8' cellspacing='0'>";
    $html .= "<tr>
                <th>Código</th>
                <th>No</th>
                <th>Nombre</th>
                <th>Dosis</th>
                <th>Forma farmacéutica</th>
                <th>Vía de administración</th>
              </tr>";

    foreach ($medicamentos as $medicamento) {
        $html .= "<tr>";
        $html .= "<td>$medicamento->codigo</td>";
        $html .= "<td>$medicamento->no</td>";
        $html .= "<td>$medicamento->nombre</td>";
        $html .= "<td>$medicamento->dosis</td>";
        $html .= "<td>$medicamento->forma</td>";
        $html .= "<td>$medicamento->via</td>";
        $html .= "</tr>";
    }

    $html .= "</table>";

    return $html;
});

// Ejercicio 1: Catálogo de Clientes VIP
Route::get('/clientes/vip', function() {
    // Creamos la lista de clientes
    $clientes = [
        (object) ['id' => 1, 'nombre' => 'Karen Criollo', 'telefono' => '+503 70000000', 'puntos_acumulados' => 15],
        (object) ['id' => 2, 'nombre' => 'Joel Cruz', 'telefono' => '+503 76000000', 'puntos_acumulados' => 5],
        (object) ['id' => 3, 'nombre' => 'Cristofer Guevara', 'telefono' => '+503 76600000', 'puntos_acumulados' => 25]
    ];

    // Creamos la tabla con los registros de los clientes de forma dinamica
    $html = '
        <table border=1 cellspacing=0>
            <thead>
                <tr>
                    <th>ID CLIENTE</th>
                    <th>NOMBRE</th>
                    <th>TELEFONO</th>
                    <th>PUNTOS ACUMULADOS</th>
                </tr>
            </thead>
            <tbody>
    ';
    foreach($clientes as $cliente) {
        $html .= "
            <tr>
                <td>$cliente->id</td>
                <td>$cliente->nombre</td>
                <td>$cliente->telefono</td>
                <td>$cliente->puntos_acumulados</td>
            </tr>
        ";
    }
    $html .= '
            </tbody>
        </table>
    ';

    // Pintamos en la ventana del navegador la tabla
    echo $html;
});
// Ejercicio 2: Panel de Proveedores Internacionales
Route::get('/proveedores/internacionales', function() { 
    $proveedores = [
        (object) ['empresa' => 'Casilerina balerina', 'pais_origen' => 'Perukistan', 'medicamento_principal' => 'acetaminofen', 'tiempo_entrega_dias' => 9],
        (object) ['empresa' => 'bryaneitor', 'pais_origen' => 'el salvachad', 'medicamento_principal' => 'ibuprofeno', 'tiempo_entrega_dias' => 67],
        (object) ['empresa' => 'MediSupply Asia', 'pais_origen' => 'India', 'medicamento_principal' => 'Paracetamol', 'tiempo_entrega_dias' => 22],
        (object) ['empresa' => 'BioLab Andina', 'pais_origen' => 'Colombia', 'medicamento_principal' => 'Ibuprofeno', 'tiempo_entrega_dias' => 18],
        (object) ['empresa' => 'FarmaExpress Norte', 'pais_origen' => 'México', 'medicamento_principal' => 'Loratadina', 'tiempo_entrega_dias' => 12],
        (object) ['empresa' => 'AndesPharma', 'pais_origen' => 'Chile', 'medicamento_principal' => 'Diclofenaco', 'tiempo_entrega_dias' => 30],
    ];
    $html = '
        <table border=1 cellspacing=0>
            <thead>
                <tr>
                    <th>NOMBRE EMPRESA</th>
                    <th>PAIS DE ORIGEN</th>
                    <th>MEDICAMENTO PRINCIPAL</th>
                    <th>TIEMPO DE ENTREGA EN DIAS</th>
                </tr>
            </thead>
            <tbody>
    ';
    foreach($proveedores as $proveedor) {
                // Evaluamos si el tiempo de entrega es crítico
        if ($proveedor->tiempo_entrega_dias > 15) {
            $alerta = ' (Demora Crítica)';
        } else {
            $alerta = '';
        }
        $html .= "
            <tr>
                <td>$proveedor->empresa</td>
                <td>$proveedor->pais_origen</td>
                <td>$proveedor->medicamento_principal</td>
                <td>$proveedor->tiempo_entrega_dias $alerta </td>
            </tr>
        ";
    }
    $html .= '
            </tbody>
        </table>
    ';

    echo $html;

});
Route::get('/lotes/inventario', function () {

    $lotes = [
        (object) ['codigo_lote' => 'LT-001', 'nombre_medicamento' => 'Casillina Encasillina', 'cantidad_cajas' => 40, 'temperatura_requerida_celsius' => 4],
        (object) ['codigo_lote' => 'LT-002', 'nombre_medicamento' => 'Vitamina J', 'cantidad_cajas' => 150, 'temperatura_requerida_celsius' => 20],
        (object) ['codigo_lote' => 'LT-003', 'nombre_medicamento' => 'Vacuna Antigripal', 'cantidad_cajas' => 60, 'temperatura_requerida_celsius' => 2],
        (object) ['codigo_lote' => 'LT-004', 'nombre_medicamento' => 'Amoxicilina', 'cantidad_cajas' => 85, 'temperatura_requerida_celsius' => 25],
        (object) ['codigo_lote' => 'LT-005', 'nombre_medicamento' => 'Vacuna COVID-19', 'cantidad_cajas' => 30, 'temperatura_requerida_celsius' => -5],
    ];

    $html = '
        <table border=1 cellspacing=0>
            <thead>
                <tr>
                    <th>CÓDIGO DE LOTE</th>
                    <th>MEDICAMENTO</th>
                    <th>CANTIDAD DE CAJAS</th>
                    <th>TEMPERATURA REQUERIDA (°C)</th>
                </tr>
            </thead>
            <tbody>
    ';

    foreach ($lotes as $lote) {

        if ($lote->temperatura_requerida_celsius <= 5) {
            $alerta = ' [Requiere Cadena de Frío]';
        } else {
            $alerta = '';
        }

        $html .= "
            <tr>
                <td>$lote->codigo_lote</td>
                <td>$lote->nombre_medicamento$alerta</td>
                <td>$lote->cantidad_cajas</td>
                <td>$lote->temperatura_requerida_celsius</td>
            </tr>
        ";
    }

    $html .= '
            </tbody>
        </table>
    ';

    echo $html;

});