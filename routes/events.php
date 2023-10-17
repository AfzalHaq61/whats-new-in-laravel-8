<?php

use App\Events\GiftCertificatePurchased;
use Illuminate\Support\Facades\Event;

use function Illuminate\Events\queueable;

Event::listen(queueable(function(GiftCertificatePurchased $event) {
    dd($event);
}));

