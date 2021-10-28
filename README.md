# PHPGuru - Headfirst

- Learn by practice real world example
- Environment : https://phpguru.herokuapp.com/

## Development

> You must config your proxy as local host or virtual host

Eg: http://phpguru-headfirst.local

```php
<VirtualHost *:80>
	DocumentRoot "E:/desk/phpguru-headfirst"
	ServerName phpguru-headfirst.local
	ErrorLog E:/desk/php-localhost/logs/phpguru-headfirst_error.log
	CustomLog E:/desk/php-localhost/logs/phpguru-headfirst_access.log combined
</VirtualHost>
```

> Start

```bash
cd web/themes/phpguru
yarn start
```

> Watch and reload custom url

```bash
cd web/themes/phpguru && yarn start --env=url=http://phpguru-headfirst.local/admin.php
```

## Excercise

1. Learning Portal

Admin:

- User must sign in before using this application
- Ability to add learning category
- Ability to add learning topic: title, content
- Ability to format code
- Deploy your code on heroku

Portal:

- Header with logo
- Menu with category
- List lastest topic
- List hostest topic

## Heroku Cheatsheet

- https://devcenter.heroku.com/articles/deploying-php#the-procfile

## Material Reference

- https://themes.materializecss.com/pages/admin-grid
- https://materializecss.com/collapsible.html
