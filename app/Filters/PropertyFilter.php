<?php

namespace App\Filters;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class PropertyFilter extends ApiFilter
#http://localhost:8000/api/properties?status[eq]=inactive
{
  protected $safeParms = [
    "rooms" => ["gt", "eq"],
    "space" => ["gt", "eq"],
    "price" => ["gt", "eq", "lt", "gte", "lte"],
    "city" => ["eq"],
    "rentingType" => ["eq"],
    "postDate" => ["gt", "eq", "lt", "gte", "lte"],
    "status" => ["eq"],
  ];

  protected $operatorMap = [
    'eq' => '=',
    'lt' => '<',
    'lte' => '<=',
    'gt' => '>',
    'gte' => '>=',
  ];

  protected $columnMap = [
    "rentingType" => "renting_type",
    "postDate" => "created_at",
  ];
}
