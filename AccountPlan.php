<?php namespace App\Models;

class AccountPlan extends Elegant
{
    protected $fillable = ['plan','duration'];

    protected $rules = [
        'plan'        => 'required|max:255|unique:account_plans',
        'duration'        => 'required|integer',
    ];
}
