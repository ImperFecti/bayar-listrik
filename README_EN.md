# APLIKASI LISTRIK PASCABAYAR

If you find this repository useful and want to use it, please consider giving it a star. This will show your support to this reposirtory and help others discover it.

## This Website Development Requirements

Here is what you need to download for the first time if you want to develop this web site with my latest source code :

- [Composer 2.7.5](https://getcomposer.org/)
- [CodeIgniter 4 4.5.3](https://github.com/codeigniter4/CodeIgniter4/releases/tag/v4.5.3)
- [XAMPP 8.2.12 Windows](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/)
- [Git](https://git-scm.com/downloads)

## Features

- Login and Register for customer
- Customers can calculate how much electricity bills per month using the integrated calculator inside this website
- Customers can generate electricity bills for payment
- Admin account for managing customers
- Admin can manage customer data and customer billing data
- Edit Profile features for admin account and customer account
- Update Password features for admin account and customer account

## What Do I Use in This Website ?

- CodeIgniter 4 v4.5.3
- Bootstrap v5.3
- Myth/Auth v1.2.1
- GroceryCRUD v2.0.1

## Setup

- Make sure that you have already installed all the website development requirements above.
- [<b>Download](https://github.com/ImperFecti/bayar-listrik/archive/refs/heads/master.zip) this project file </b> and unzip it wherever you want.
- Or you can use <b>git bash</b> with `git bash here` to the specified folder and start cloning this repository with this command `git clone https://github.com/ImperFecti/bayar-listrik.git`.
- Copy and paste `env` file to the same directory file and rename it to `.env` and then paste this code to set the database:

```
# ENVIRONMENT

CI_ENVIRONMENT = development

# APP

app.baseURL = 'http://localhost:8080'
# If you have trouble with `.`, you could also use `_`.
# app_baseURL = ''
# app.forceGlobalSecureRequests = false
# app.CSPEnabled = false

# DATABASE

database.default.hostname = localhost
database.default.database = bayarlistrik
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

- To import the database, go to [`phpmyadmin`](http://localhost/phpmyadmin) and create a new database named `bayarlistrik`.
- In [`phpmyadmin`](http://localhost/phpmyadmin), select the `bayarlistrik` database you created and then select import.
- Import the database named `bayarlistrik.sql` inside directory file `APPPATH\app\Database`.
- This website is currently using [`http://localhost:8080/`](http://localhost:8080/) from spark. To start the localhost with [spark](https://codeigniter.com/user_guide/cli/spark_commands.html), run this command `php spark serve` from your terminal to turn on the localhost.
- If you want to develop this website using XAMPP you can change the <b>baseURL</b> in `App.php` and make sure the project file is saved in `htdocs`.

## Admin Account

If you use the database that I have provided, you can use the admin account that has been registered below:

- Username `admin` password `letslogintoadminaccount`
- Username `admin2` password `letslogintoadminaccount`

## Myth\Auth Library Setup

- Run `composer update` from the terminal to update the dependencies with <b>composer</b>.
- After the update is complete, you can find folder named `myth\auth` inside `APPPATH\app\Vendor` and start setting up this library.
- If you cant find the library inside `Vendor`, try to run this command inside terminal

```
composer require myth/auth
```

- Find `Auth.php` inside `Vendor\myth\auth\Config\` and change the variable below

### Default User Group

Change value `$defaultUserGroup` variable to:

```
public $defaultUserGroup = 'pelanggan';
```

### Views

Change value `$views` variable to:

```
public $views = [
    'login'       => 'Myth\Auth\Views\login',
    'register'    => 'Myth\Auth\Views\register',
    'forgot'      => 'Myth\Auth\Views\forgot',
    'reset'       => 'Myth\Auth\Views\reset',
    'emailForgot' => 'Myth\Auth\Views\emails\forgot',
];
```

### Allow Password Reset via Email

Change value `$activeResetter` variable to:

```
public $activeResetter = null;
```

### Allow Persistent Login Cookies (Remember me)

Change value `$allowRemembering` variable to:

```
public $allowRemembering = true;
```

### Remember Length

Change the value variable '$rememberLength' to whatever you want:

```
public $rememberLength = 30 * DAY;
```

## Preview

- Landing Page
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268927623938183188/image.png?ex=66ae3471&is=66ace2f1&hm=48ae330efbe80e2dfae69fb15d90dc455e09aff6a6fa593f30c58f62d4cdcbf0&)

- Calculator
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929747476549666/kalkulator.png?ex=66ae366b&is=66ace4eb&hm=97602cac1f9deccc852a60660c6404e34aa809c136aa1903b46a75ac8c885b98&)

- Electricity Billing List
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929748189581343/list_tagihan_user.png?ex=66ae366b&is=66ace4eb&hm=8de28fc9c7e3da4d5052698f51f62985ae4f34af768902805fea1bf355ebf485&)

- Invoice
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268931160051023956/image.png?ex=66ae37bc&is=66ace63c&hm=6f5982b197ee402a41ecbfb772bde151bdec6d01df8bcceaa828eb3775e3398f&)

- Admin Dashboard
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929747065372775/admin_dashboard.png?ex=66ae366b&is=66ace4eb&hm=33cae51e9505f3bacf8dc50b1b18a16a2a0bedb5cb7e85b84e46d3ab555661b2&)

- User Management Table
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929746603868301/table_user.png?ex=66ae366b&is=66ace4eb&hm=daeb498fcc8897d5f7253a8804bda1448c666bdf849337611b6148c89a91294f&)

- Customer Billing List Management Table
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929746197151878/table_tagihan.png?ex=66ae366b&is=66ace4eb&hm=f3bc6670d6b48e2d6118d7b924727fd88da7766b79bdfdc2939c2ef576e9f827&)

## Found a problem when developing this application ?

Create new [issue](https://github.com/ImperFecti/bayar-listrik/issues) for this repository or you can try to contact my [email](mailto:adilm8909@gmail.com) / [instagram](https://www.instagram.com/_adilsputra/) / [twitter](https://twitter.com/_adilsputra)

## Want to contribute to this repository ?

I realized that this repository is still not perfect and not finished yet. If u have an idea to improve this repository, <b>[Fork](https://github.com/ImperFecti/bayar-listrik/fork)</b> this repository page to create your own copy of the repository under your GitHub account.
