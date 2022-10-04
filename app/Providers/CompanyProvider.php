<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;

class CompanyProvider extends EloquentUserProvider
{
    /**
     * 与えられた credentials からユーザーのインスタンスを探す
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        return parent::retrieveByCredentials($credentials);
    }
}