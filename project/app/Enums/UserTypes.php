<?php

namespace App\Enums;

abstract class UserTypes extends Enum
{
    const ADMIN = 'admin';
    const CLIENT = 'client';
    const CLINIC = 'clinic';
    const VET = 'vet';
}
