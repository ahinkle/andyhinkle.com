<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('fetch:github-contributions')->daily();

Schedule::job(\App\Jobs\DebugCarbonTimingJob::class)->everyMinute();
