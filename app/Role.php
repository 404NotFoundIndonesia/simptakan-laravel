<?php

namespace App;

enum Role: string
{
    case ADMIN = 'admin';
    case STAFF = 'staff';
    case MEMBER = 'member';
}
