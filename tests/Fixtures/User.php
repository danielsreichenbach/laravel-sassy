<?php

namespace Kogito\Sassy\Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
use Kogito\Sassy\Billable;

class User extends Model
{
    use Billable, Notifiable;

    protected $guarded = [];

    /**
     * Get the address to sync with Recurly.
     *
     * @return array|null
     */
    public function recurlyAddress()
    {
        return [
            'phone' => '+4912345678901',
            'street1' => 'Eine Strasse 1',
            'street2' => '',
            'city' => 'Berlin',
            'region' => 'Berlin',
            'postal_code' => '13409',
            'country' => 'DE',
        ];
    }
}
