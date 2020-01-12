# H171600554_Muhammad-Rizky-Rizaldi_WEB2
Tugas Pemrograman Web II

# Installation
1. Buat MySql DB kosong terlebih dahulu.
2. Clone repo dengan perintah berikut dan tunggu hingga selesai.
   pada terminal:

    ```git clone https://github.com/Rizky92/H171600554_Muhammad-Rizky-Rizaldi_WEB2.git```

3. Masukkan perintah berikut setelah proses clone selesai:

    ```cd H171600554_Muhammad-Rizky-Rizaldi_WEB2``` [enter]

    ```composer install``` [enter]

    ```npm install``` [enter]

    ```cp .env.example .env``` [enter]

    ```php artisan key:generate``` [enter]

4. Terakhir, edit file .env untuk mengganti DB_DATABASE ke DB yang sudah disiapkan.

# Setup
Laravel ini telah dilengkapi dengan Model Factories menggunakan library Faker.  
Setelah menghubungkan .env ke DB, perlu menjalankan perintah berikut:  
  
    php artisan storage:link
    php artisan migrate:fresh --seed
	
Ini akan migrate & populate isi DB.  