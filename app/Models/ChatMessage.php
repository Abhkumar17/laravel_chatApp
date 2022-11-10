<?php
/**
 * Created by PhpStorm.
 * User: ParthVaidya
 * Date: 19-10-2014
 * Time: 00:27
 */
namespace App;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $table='chat_messages';
} 