<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class DebugCarbonTimingJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public ?Carbon $date = null,
    ) {
        Log::debug('Initial DebugCarbonTimingJob', [
            'date' => $this->date->format('Y-m-d H:i:s'),
        ]);

        $this->date ??= today()->subDay();
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::debug('Handling DebugCarbonTimingJob', [
            'date' => $this->date->format('Y-m-d H:i:s'),
        ]);
    }
}
