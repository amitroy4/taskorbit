<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'domain_name',
        'purchase_date',
        'reg_firstname',
        'reg_lastname',
        'reg_city',
        'reg_state',
        'reg_zipcode',
        'reg_country',
        'reg_address',
        'person_name',
        'person_email',
        'person_phone',
        'person_mailing_address',
        'person_nid_number',
        'currency_type',
        'rate',
        'amount',
        'renewal_date',
        'person_image',
        'person_nid_image',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
