<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'people',
        'people_update',
        'contact',
        'contact_update',
        'list_contact',
        'modal_list_contacts',
        'modal_update_pessoa',
        'modal_insert_contato',
        'modal_update_contato',
        'check_people',
        'view_lita_contacts',
        'modal_update_contact'

    ];
}
