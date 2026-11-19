<?php
namespace App\Http\Controllers;
use App\Providers\Orders\Index;
use App\Providers\Orders\Get;
use App\Providers\Orders\Update;
use App\Providers\Orders\Create;
use App\Providers\Orders\Delete;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Interfaces\ControllerInterface;

class OrderController extends Controller implements ControllerInterface
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $index = new Index();
        return $index->Index();
    }

    public function get(int $id)
    {
        $get = new Get();

        return $get->get($id);
    }

    public function update(Request $request, int $id)
    {
        $update = new Update();

        return $update->update($request, $id);
    }

    public function create(Request $request)
    {
        $create = new Create();

        return $create->create($request);
    }

    public function delete(int $id)
    {
        $delete = new Delete();

        return $delete->delete($id);
    }
}