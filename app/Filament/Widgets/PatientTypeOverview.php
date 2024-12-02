<?php

namespace App\Filament\Widgets;

use App\Models\Owner;
use App\Models\Patient;
use App\Models\Treatment;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // $patientsCount = Patient::count();
        // $ownersCount = Owner::count();
        // $treatmentStats = Treatment::get();
        // dd($treatmentStats);
 
        // $treatmentCount = $treatmentStats->total_count;
        // $treatmentRevenue = $treatmentStats->total_price;

        return [
            Stat::make('Pets', 3)
                ->description('Number of Pets')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Owners', 4)
                ->description('Unique')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),
            Stat::make('Total Income generated', 5)
                ->description('In Dollars')
                ->color('success')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('success'),
            Stat::make('Total Treatment done', 6),
        ];
    }
}
