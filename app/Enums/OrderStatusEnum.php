<?php

namespace App\Enums;

enum OrderStatusEnum: string
{
    case In_Progress = 'in progress';
    case Done = 'done';
}
