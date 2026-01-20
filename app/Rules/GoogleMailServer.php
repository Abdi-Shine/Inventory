<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class GoogleMailServer implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $domain = substr(strrchr($value, "@"), 1);

        if (! $domain) {
            $fail('The :attribute must be a valid email address.');
            return;
        }

        $mxRecords = dns_get_record($domain, DNS_MX);

        if (! $mxRecords) {
            $fail('The :attribute domain does not have any mail servers (MX records).');
            return;
        }

        $googleMxServers = [
            'smtp.google.com',
            'aspmx.l.google.com',
            'alt1.aspmx.l.google.com',
            'alt2.aspmx.l.google.com',
            'alt3.aspmx.l.google.com',
            'alt4.aspmx.l.google.com',
            'googlemail.com', // Sometimes seen
        ];

        $isGoogle = false;
        foreach ($mxRecords as $record) {
            $target = strtolower(rtrim($record['target'], '.'));
            foreach ($googleMxServers as $googleServer) {
                if (str_ends_with($target, $googleServer)) {
                    $isGoogle = true;
                    break 2;
                }
            }
        }

        if (! $isGoogle) {
            $fail('The :attribute must be a Google Mail address (it does not use Google mail servers).');
        }
    }
}
