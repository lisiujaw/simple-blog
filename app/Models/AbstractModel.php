<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{
    public function getCreatedAt()
    {
        return $this->{self::CREATED_AT};
    }

    public function getUpdatedAt()
    {
        return $this->{self::UPDATED_AT};
    }
}
