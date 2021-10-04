<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class StaticPage extends Model implements HasMedia
{
    use HasMediaTrait;

    public $table = 'static_pages';

    protected $appends = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'page',
        'name',
        'value',
        'created_at',
        'updated_at',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(150)->height(150);
    }

    /*public static function getFileLink($name)
    {
        return url('storage/tmp/uploads/'.$name);
    }*/
    public static function getMediaField($page, $name)
    {
        $obj = self::select('id')
            ->where('page', $page)
            ->where('name', $name)
            ->first();

        $file = null;

        if($obj){
            $file = $obj->getMedia($name)->last();

            if ($file) {
                $file->url       = $file->getUrl();
                $file->thumbnail = $file->getUrl('thumb');
            }
        }

        return $file;
    }

    public static function getField($page, $name){
        $data = @self::select('value')->where('page', $page)->where('name', $name)->first()->value;
        // $data = self::isJson($data)? json_decode($data): $data;
        return $data;
    }

    public static function getAllFields($page){
        $raw_data = self::select('*')->where('page', $page)->get();

        $data = [];
        foreach ($raw_data as $datum){
            $data[$datum->name] = self::isJson($datum->value)? json_decode($datum->value): $datum->value;
        }

        $data = json_decode(json_encode($data));

        return $data;
    }

    public static function updateAllFields($page, Request $request){
        foreach($request->all() as $key => $value){
            if(in_array($key, ['_token', '_method'])){
                continue;
            }

            $field = self::select('*')
                ->where('page', $page)
                ->where('name', $key)
                ->first();

            $value = is_string($value) ? $value: json_encode($value);

            if($field){
                $field->value = $value;
            }else{
                $field = new self;
                $field->page = $page;
                $field->name = $key;
                $field->value = $value;
            }
            $field->save();

            if($request->images && array_key_exists($field->name, $request->images)){
                $image = \App\StaticPage::getMediaField($page, $field->name);
                if(empty($request->images[$field->name])){
                    $image->delete();
                }elseif(@$request->images[$field->name] !== @$image->file_name){
                    $field->addMedia(storage_path('tmp/uploads/' . $field->value))->toMediaCollection($field->name);
                }
            }
        }
        return true;
    }


    public static function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

}
