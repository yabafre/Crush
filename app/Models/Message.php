<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $message
 * @property mixed|string $token
 * @method static where(string $string, $token)
 */
class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'token',
    ];
}
