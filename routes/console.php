<?php

use App\Console\Commands\GitHub\FetchGitHubContributionsCommand;
use App\Console\Commands\Sitemap\GenerateSitemapCommand;
use Illuminate\Support\Facades\Schedule;

Schedule::command(FetchGitHubContributionsCommand::class)->daily();
Schedule::command(GenerateSitemapCommand::class)->daily();
