<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_person extends Model
{
    use HasFactory;


    protected $primaryKey = 'ContactPersonID';

    protected $fillable = [
        'ContactPersonID',
        'CompanyLicense',
        'Name',
        'Title',
        'P_O_Box',
        'Email',
    ];
}
