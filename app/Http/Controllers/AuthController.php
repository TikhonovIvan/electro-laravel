<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->paginate(5);
        return view('admin.users.index',[
            'users' => $users
        ]);
    }

  /*Форма регистрации пользователя */
    public function create()
    {
        return view('auth.register');
    }


    /*
    Регистрация пользователя
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'phone' => ['required'],
            'postal_code' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
        ]);

        User::create($validated);
        return redirect()->route('login.form')->with('success', 'Регистрация успешна пройдена');

    }

    /*Форма авторизации*/
    public function loginForm()
    {
        return view('auth.login');
    }

    /*Авторизация пользователя*/
    public function loginAuth(Request $request)
    {
        $validated = $request->validate([

            'email' => ['required', 'email',],
            'password' => ['required'],
        ]);

        if(Auth::attempt($validated)){
            return redirect()->route('account.form')->with('success', 'Добро пожаловать');
        }
        return back()->withErrors([
            'email' => 'Ошибка логин и пароль'
        ]);

    }

    /*Выйти из аккаунта*/
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function accountForm()
    {
        $user = User::query()->find(Auth::id());
        return view('account', [
            'user' => $user,
        ]);
    }

    public function accountFormUpdate(Request $request, string $id)
    {

        $user = User::query()->find(Auth::id());
        $validated = $request->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'phone' => ['required'],
            'postal_code' => ['required'],
            'email' => ['required', 'email',  Rule::unique('users')->ignore($user->id)],
            'password' => ['required'],
        ]);

        // Хэшируем пароль перед обновлением
        $validated['password'] = bcrypt($validated['password']);

        if (  $user->update($validated)){
            return redirect()->route('account.form')->with('success', 'Данные обновлены');
        }

        return back()->with('error', 'Проверьте поля')->withInput();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit',[
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'phone' => ['required'],
            'postal_code' => ['required'],
            'email' => ['required', 'email',  Rule::unique('users')->ignore($user->id)],
            'password' => [],
        ]);

        // Хэшируем пароль перед обновлением
        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }
        if (  $user->update($validated)){
            return redirect()
                ->route('admin.user.edit', ['id' => $user->id])
                ->with('success', 'Данные пользователя обновлены');
        }

        return back()->with('error', 'Проверьте поля')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::query()->findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Пользователь удален');
    }
}
