<?php

declare(strict_types=1);

namespace App\Models;

class PassportClient extends \Laravel\Passport\Client
{
    /**
     * Determine if the client should skip the authorization prompt.
     *
     * @return bool
     */
    public function skipsAuthorization()
    {
        if (str_contains($this->redirect, 'localhost')) {
            return true;
        }
        return false;
    }
}
