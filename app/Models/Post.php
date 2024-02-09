<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;
    protected $guarded = false;

   // protected $table = 'posts';

  //  protected $fillable = ['title','content','image','likes','category_id'];


    public function category() {

        return $this->belongsTo(Category::class, 'category_id', 'id');

    }

    public function tags() {
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    }


}
