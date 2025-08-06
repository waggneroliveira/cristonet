<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use App\Services\ActivityLogService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use Notifiable, HasFactory, LogsActivity;
    
    protected $fillable = [
        'title',
        'path_image',
        'text',
        'price',
        'active',
        'sorting'
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    public function scopeSorting($query)
    {
        return $query->orderBy('sorting', 'asc');
    }
    public function getActivitylogOptions(): LogOptions
    {
        $activityLogService = new ActivityLogService($this);
        
        return LogOptions::defaults()
            ->logOnly($activityLogService->getLoggableAttributes());
    }
}
