<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('fetch:github-contributions')->daily();

Schedule::job(new \App\Jobs\DebugCarbonTimingJob)->everyMinute();
