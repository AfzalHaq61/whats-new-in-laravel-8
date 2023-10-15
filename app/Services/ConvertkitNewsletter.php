<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class ConvertkitNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client)
    {
        //
    }

    public function Subscribe(string $email, string $list = null) {

        $list ??= config('services.mailchimp.lists.subscribers');

        return $response = $this->client->lists->addListMember($list, [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }
}
