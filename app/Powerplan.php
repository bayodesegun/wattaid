<? php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Powerplan extends Model
{
  public $fillable = ['month', 'day', 'location', 'hour0', 'hour1', 'hour2', 'hour3', 'hour4', 'hour5', 'hour6', 'hour7', 'hour8', 'hour9', 'hour10', 'hour11', 'hour12', 'hour13', 'hour14', 'hour15', 'hour16', 'hour17', 'hour18', 'hour19', 'hour20', 'hour21', 'hour22', 'hour23'];
}