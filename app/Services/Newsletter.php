<?php

namespace App\Services;

interface Newsletter
{
    public function Subscribe(string $email, string $list = null);
}
