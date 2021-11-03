<h2>Run the application following the steps below</h2>

<h3>Before anything else, make sure that your mysql is up and running and create a database that can feed your application</h3>
<h3>From the terminal, cd to the folder where you the project to be and run:</h3>
<p>git clone https://github.com/Koumou/WIL-Management.git</p>

<p>cd Wil-Management</p>
<p>composer install</p>
<p>npm install</p>

<h3>Important: copy the .env.example file and rename it as .env, and in this, replace DB_DATABASE=laravel for DB_DATABASE=the_name_of_the_database_you_created. and go back to your command line terminal</h3>
<p>php artisan key:gen</p>

<p>php artisan migrate</p>
<p>php artisan serve</p>

HAPPY CODING!
