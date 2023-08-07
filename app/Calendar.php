<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
  protected $fillable = [
      'Title', 'StartDate', 'EndDate','Description','Type'
  ];

  public $timestamps = false;
}
