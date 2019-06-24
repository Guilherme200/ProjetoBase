<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function __construct()
    {
        $this->repository = new UserRepository();
        $this->resource = UserResource::class;
    }

    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $user = $this->repository->create($data);

        $message = _m('user.success.create');
        return $this->chooseReturn('success', $message, 'admin.users.edit', $user->id);
    }

    public function edit($id)
    {
        $user = $this->repository->find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        $isPasswordChange = data_get($data, 'password', false);
        if (!$isPasswordChange) {
            unset($data['password']);
        }

        $this->repository->update($id, $data);
        $message = _m('user.success.update');
        return $this->chooseReturn('success', $message, 'admin.users.edit', $id);
    }

    public function show($id)
    {
        $user = $this->repository->find($id);
        return view('admin.users.show', compact('user'));
    }

    public function destroy($id)
    {
        try {
            $this->repository->delete($id);
            return $this->chooseReturn('success', _m('user.success.destroy'));
        } catch (\Exception $e) {
            return $this->chooseReturn('error', _m('user.error.destroy'));
        }
    }
}
