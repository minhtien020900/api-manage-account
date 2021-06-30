<?php


namespace App\Http\Service;


use App\Models\AccountType;

class AccountTypeService
{
    public function getAll()
    {
        return Account::all();
    }

    public function create($request)
    {
        $accountType = AccountType::create($request->all());
        return $accountType;
    }
}
