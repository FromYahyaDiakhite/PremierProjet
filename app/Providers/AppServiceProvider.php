<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Mail\Events\MessageSent;
use App\Models\EmailArchive;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /* Event::listen(MessageSent::class, function (MessageSent $event) {
        $message = $event->message;

        EmailArchive::create([
            'subject' => $message->getSubject(),
            'to' => json_encode(array_keys($message->getTo() ?? [])),
            'cc' => json_encode(array_keys($message->getCc() ?? [])),
            'bcc' => json_encode(array_keys($message->getBcc() ?? [])),
            'body' => $message->getBody(),
            'type' => 'sent',
        ]);
    }); */
    }
}
