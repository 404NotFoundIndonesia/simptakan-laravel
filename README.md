<div align="center">
    <p>
        <a href="https://github.com/404NotFoundIndonesia/" target="_blank">
            <img src="https://avatars.githubusercontent.com/u/87377917?s=200&v=4" width="200" alt="404NFID Logo">
        </a>
    </p>

 [![GitHub Stars](https://img.shields.io/github/stars/404NotFoundIndonesia/simptakan-laravel.svg)](https://github.com/404NotFoundIndonesia/simptakan-laravel/stargazers)
 [![GitHub license](https://img.shields.io/github/license/404NotFoundIndonesia/simptakan-laravel)](https://github.com/404NotFoundIndonesia/simptakan-laravel/blob/main/LICENSE)
 
</div>

# Simptakan

Simptakan (_Sistem Informasi Perpustakaan_) is a modern web-based platform designed to revolutionize library management and user experience. It aims to provide a seamless and enjoyable experience for both library administrators and users, enhancing catalog exploration, book borrowing, and reading activity management.

## Technical Requirements
- **Platform**: Web-based application using modern web technologies (HTML5, CSS3, JavaScript).
- **Compatibility**: Support for major web browsers (Chrome, Firefox, Safari, Edge) and mobile platforms (iOS, Android).
- **Security**: Secure user authentication, data encryption, and privacy protection measures.
- **Scalability**: Ability to handle concurrent users and scale resources as needed.

## Technology Stack

- Laravel 11.0
- MySQL Community Server 8.3

## Get Started

### Prerequisite

- You need [PHP](https://www.php.net/downloads) to run this, with a minimum installed version of **PHP 8.3.4**. Make sure you can also access PHP via the command line by adding it to the [path environment variable](https://rgrahardi.medium.com/pengaturan-path-php-dan-composer-di-environment-variables-windows-10-e1e22a637618).
- Make sure [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) is also installed and accessible via the command line.
- Ensure that you have also installed [MySQL](https://dev.mysql.com/downloads/mysql/).
- I recommend installing [Git](https://git-scm.com/downloads) for better code management.

### Get the Source Code
Of course, you need to put this code on your computer first. There are two ways to do this: by __downloading the project zip file__ or __by using Git (recommended)__.

1. **Download the Project Zip**

    You can click on [this link](https://github.com/404NotFoundIndonesia/simptakan-laravel/archive/refs/heads/main.zip) to download the zip file of this project.

2. **Git Clone**

    Make sure that you have installed git. Open the directory where you want to place the source code in the terminal. Then, run the following command:
    ```shell
    git clone git@github.com:404NotFoundIndonesia/simptakan-laravel.git
    ```

### Install Dependencies

Make sure __this project is open in your command line interface__. To confirm your current active directory in the terminal, use the following command: 
```shell
pwd
```

To install backend dependencies, use the following command:
```shell
composer install
```

### How to Run
To run the backend server, use the following command:
```shell
php artisan serve
```

Open `http://localhost:8000` in your browser to access Simptakan. When you want to access Simptakan in a web browser, make sure you **do not close or stop both of those processes**.

Now, you're all set to explore Simptakan! 📚✨


## License

__Simptakan__ is open-sourced software licensed under the [MIT license](https://github.com/404NotFoundIndonesia/simptakan-laravel?tab=MIT-1-ov-file).
