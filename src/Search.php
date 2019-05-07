<?php
/**
 * Created by PhpStorm.
 * User: kuzma
 * Date: 06.05.19
 * Time: 22:35
 */
namespace Nicolaslopezj\Searchable;
use App\Good;
class Search
{
    protected $paginate;
    function __construct($paginate=12)
    {
        $this->paginate = $paginate;
    }
    public function getSaearch($request){
        $key = $request->input('search');
        $query = Good::choose()
            ->active()
            ->search($key);
            return $query->paginate($this->paginate);
    }
}
