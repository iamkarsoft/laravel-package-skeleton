<?php 

namespace PackageName\Facades;

use Illuminate\Support\Facades\Facade;

class PackageName extends Facade{
    protected static function getFacadeAccessor(){
        return  'packagename-facade';
    }
}