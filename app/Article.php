<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

  protected $fillable = [
    'title',
    'body',
    'published_at',
  ];

  protected $dates = [
    'published_at',
  ];

  public function scopePublished ($query)
  {
    $query->where('published_at', '<=', Carbon::now());
  }

  public function scopeUnPublished ($query)
  {
    $query->where('published_at', '>=', Carbon::now());
  }

  public function setPublishedAtAttribute ($date)
  {
    $publishedAt = Carbon::parse($date);
    $this->attributes['published_at']= $publishedAt;
  }

}
