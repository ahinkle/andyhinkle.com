<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('fetch:github-contributions')->daily();
