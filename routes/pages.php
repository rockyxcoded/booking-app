<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('guest')->prefix('')->name('page.')->group(function () {

    Route::get('/{path}', function ($path) {

        if ($path === 'tour-videos') {
            return redirect('video-gallery');
        }

        $studlyPath = str($path)->studly();
        $pagePath = resource_path("js/Pages/$studlyPath.vue");

        if (! file_exists($pagePath)) {
            return inertia('Blank');
        }

        $data = [];

        if ($path === 'photo-gallery') {
            $data = [
                'photos' => DB::table('photos')->get(),
            ];
        }

        if ($path === 'video-gallery') {
            $data = [
                'videos' => DB::table('videos')->get(),
            ];
        }

        return Inertia::render($studlyPath, $data);
    });

});
