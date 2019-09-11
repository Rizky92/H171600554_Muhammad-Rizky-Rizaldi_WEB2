# H171600554_Muhammad-Rizky-Rizaldi_WEB2
Tugas Pemrograman Web II

# Changelog
Commit 5 September 2019
- 6:27 #9ce4e01: Tugas 1 diupload (Login & Register)

Commit 11 September 2019
- 18:43 #003579b: Test Login
- 21:38 #a5dc33f: Login/Register dengan No. Telp berhasil
- 23:42 #e7484dd: Captcha pada Login & Register selesai

# Notes
Commit #e7484dd butuh perubahan pada file berikut:
    \vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php

- baris #65:
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
            'captcha' => 'required|captcha',
        ]);
    }

- baris #147
    return 'telp';
