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
        $patientsCount = Patient::count();
        $ownersCount = Owner::count();
        $treatmentStats = Treatment::selectRaw('COUNT(*) as total_count, SUM(price) as total_price')->first();
 
        $treatmentCount = $treatmentStats->total_count;
        $treatmentRevenue = $treatmentStats->total_price;
    
        return [
            Stat::make('Pets', $patientsCount)
                ->description('Number of Pets')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Owners', $ownersCount)
                ->description('Unique')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),
            Stat::make('Total Income generated', $treatmentRevenue)
                ->description('some description')
                ->color('success')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('success'),
            Stat::make('Total Treatment done', $treatmentCount),
        ];
    }
}
