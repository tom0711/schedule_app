<?php

namespace wasabi;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
  protected $fillable = [
      'title', 'user_id', 'question',
  ];
}
