<?php

use Webazin\LaravelNuxt\Facades\Nuxt;

Nuxt::route('{path?}')->middleware('web')->name('nuxt')->where('path', '.*');
