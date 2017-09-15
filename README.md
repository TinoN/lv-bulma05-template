# Laravel 5.5 (5.4) Basic Template with Bulma 0.5

- Create new Laravel project
```
	$ laravel new PROJECT
```

- Switch into new PROJECT, create Authentication layer and install bulma and font-awesome
```
	$ cd PROJECT
	$ php artisan make:auth
	$ npm install --save bulma font-awesome
```

- Clone the repo, copy it's content to PROJECT and overwrite existing files
```
	$ cd ..
	$ git clone git@github.com:TinoN/lv-bulma05-template.git
	$ cp -r lv-bulma05-template/* PROJECT/
```

- Install PROJECT dependencies
```
	$ cd PROJECT
	$ npm install
	$ npm run dev
```

- Run PROJECT in Browser
```
	$ php artisan serve
```

*Any comments, corrections and/or questions are welcome!*
