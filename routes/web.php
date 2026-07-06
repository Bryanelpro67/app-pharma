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
require __DIR__.'/settings.php';
