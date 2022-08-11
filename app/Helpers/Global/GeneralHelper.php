<?php

use Carbon\Carbon;

if (! function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name', 'Laravel Boilerplate');
    }
}

if (! function_exists('carbon')) {
    /**
     * Create a new Carbon instance from a time.
     *
     * @param $time
     *
     * @return Carbon
     * @throws Exception
     */
    function carbon($time)
    {
        return new Carbon($time);
    }
}

if (! function_exists('homeRoute')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function homeRoute()
    {
        if (auth()->check()) {
            if (auth()->user()->isAdmin()) {
                return 'admin.dashboard';
            }

            if (auth()->user()->isUser()) {
                return 'frontend.user.dashboard';
            }
        }

        return 'frontend.index';
    }
}

if (! function_exists('volumeConversion')) {

    /**
     * Convert the given volume from the given unit to the given unit.
     *
     * @return string // L / ml
     */
    function volumeConversion($volume)
    {
        if ($volume < 1000) {
            return $volume.' ml';
        }
        if ($volume < 1000000) {
            return round($volume / 1000, 2).' L';
        }
        if ($volume < 1000000000) {
            return round($volume / 1000000, 2).' Ml';
        }
    }
}
