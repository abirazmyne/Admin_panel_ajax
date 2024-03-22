<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public static $supplier, $description, $image, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image         = $request->file('image');
        self::$imageName     = self::$image->getClientOriginalName();
        self::$directory     = 'upload/client-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }
    public static function newSupplier($request)
    {
        self::$imageUrl = self::getImageUrl($request);
        self::$supplier = new Supplier();
        return self::saveBasicInfo(self::$supplier,$request,self::$imageUrl);

    }

    public static function updateSupplier($request, $id)
    {
        self::$supplier = Supplier::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$supplier->image))
            {
                unlink(self::$supplier->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }

        else
        {
            self::$imageUrl = self::$supplier->image;
        }

        self::saveBasicInfo(self::$supplier, $request, self::$imageUrl );
    }

    public static function deleteSupplier($id)
    {
        self::$supplier = Supplier::find($id);
        if (file_exists(self::$supplier->image))
        {
            unlink(self::$supplier->image);
        }
        self::$supplier->delete();
    }
    public static function saveBasicInfo($supplier,$request,$imageUrl)
    {
        $supplier->category_id          = $request->category_id;
        $supplier->brand_id             = $request->brand_id;
        $supplier->name                 = $request->name;
        $supplier->address              = $request->address;
        $supplier->phone                = $request->phone;
        $supplier->email                = $request->email;
        $supplier->image                = $imageUrl;
        $supplier->save();
        return $supplier;
    }
}
