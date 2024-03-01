<?php
namespace App\Models;

use CodeIgniter\Model;

class ImportPermitModel extends Model {
    protected $table         = 'import_permit_data';
    protected $primaryKey = 'id';
    

    protected $allowedFields = [
        'citizenship',
        'nid',
        'passport',
        'other_names',
        'surname',
        'nationality',
        'phone',
        'email',
        'location',
        'business_type',
        'company_name',
        'tin_number',
        'reg_date',
        'business_location',
        'purpose',
        'specify_purpose',
        'product_category',
        'product_name',
        'weight',
        'description',
        'measurement',
        'quantity',
    ];

}
