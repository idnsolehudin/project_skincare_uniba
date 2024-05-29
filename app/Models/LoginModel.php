<?php

namespace Myth\Auth\Models;

use CodeIgniter\Model;
use DateTime;

class LoginModel extends Model
{
    protected $table          = 'auth_logins';
    protected $primaryKey     = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields  = [
        'ip_address', 'email', 'user_id', 'date', 'success',
    ];
    protected $useTimestamps   = false;
    protected $validationRules = [
        'ip_address' => 'required',
        'email'      => 'required',
        'user_id'    => 'permit_empty|integer',
        'date'       => 'required|valid_date',
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function rememberUser(int $userID, string $selector, string $validator, string $expires)
    {
        $expires = new DateTime($expires);

        return $this->db->table('auth_tokens')->insert([
            'user_id'         => $userID,
            'selector'        => $selector,
            'hashedValidator' => $validator,
            'expires'         => $expires->format('Y-m-d H:i:s'),
        ]);
    }

    public function getRememberToken(string $selector)
    {
        return $this->db->table('auth_tokens')
            ->where('selector', $selector)
            ->get()
            ->getRow();
    }

    public function updateRememberValidator(string $selector, string $validator)
    {
        $authConfig = config('Auth');

        return $this->db->table('auth_tokens')
            ->where('selector', $selector)
            ->update([
                'hashedValidator' => hash('sha256', $validator),
                'expires'         => (new DateTime())->modify('+' . $authConfig->rememberLength . ' seconds')->format('Y-m-d H:i:s'),
            ]);
    }

    public function purgeRememberTokens(int $id)
    {
        return $this->builder('auth_tokens')->where(['user_id' => $id])->delete();
    }

    public function purgeOldRememberTokens()
    {
        $config = config('Auth');

        if (! $config->allowRemembering) {
            return;
        }

        $this->db->table('auth_tokens')
            ->where('expires <=', date('Y-m-d H:i:s'))
            ->delete();
    }
}
