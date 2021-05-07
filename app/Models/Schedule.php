<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'date',
        'start',
        'stop',
        'category',
        'target_area',
        'intensity',
        'equipment',
    ];

    public function user() {
        return $this
            ->belongsTo(User::class)
            ->withDefault([
                'name' => 'Unknown user',
            ]);
    }

    public function getTimeAttribute()
    {
        if (!$this->stop) {
            return CarbonInterval::create(0);
        }

        $start = Carbon::createFromFormat('Y-m-dH:i:s', $this->date . $this->start);
        $stop = Carbon::createFromFormat('Y-m-dH:i:s', $this->date . $this->stop);

        if ($stop < $start) {
            $stop->addDays(1);
        }

        return $stop->diffAsCarbonInterval($start);
    }
}
