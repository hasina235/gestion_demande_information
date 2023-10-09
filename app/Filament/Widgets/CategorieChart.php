<?php

namespace App\Filament\Widgets;

use App\Models\Categorie;
// use Filament\Widgets\PieChartWidget;
use ArberMustafa\FilamentGoogleCharts\Widgets\PieChartWidget;

class CategorieChart extends PieChartWidget
{
    protected static ?string $heading = 'Par Categorie';

    protected static ?int $sort = 2;

    protected static ?array $options = [
        'legend' => [
            'position' => 'top',
            'alignment' => 'center',
        ],
        'height' => 400,
        'is3D' => false,
    ];

    protected function getData(): array
    {
        // $data =Categorie::query()->count();
        return [
            ['Label', 'Aggregate'],
            ['Col1', 7.2],
            ['Col2', 23.7],
            ['Col3', 11.1],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
