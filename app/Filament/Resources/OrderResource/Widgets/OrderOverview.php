<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Order;
use Illuminate\Support\Number;

class OrderOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
        
        Stat::make('New Orders', Order::query()->where('status', 'new')->count()),
        Stat::make('Order Processing', Order::query()->where('status', 'processing')->count()),
        Stat::make('Order Completed', Order::query()->where('status', 'completed')->count()),
        ];
    }

 }


