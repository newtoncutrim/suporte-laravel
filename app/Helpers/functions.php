<?php

use App\Enums\SupportStatus;

if(!function_exists('getStatussupport')){
    function getStatussupport (string $status): string
    {
        return SupportStatus::fromValue($status);
    }
}
