<?php

use App\Console\Commands\GitHub\FetchGitHubContributionsCommand;
use Illuminate\Support\Facades\Schedule;

Schedule::command(FetchGitHubContributionsCommand::class)->daily();
