<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

1. Адмін панель для наповнення
- реалізувати авторизацію в адмін панелі за логіном і паролем
+ реалізувати функціонал створення/редагування/видалення новин (має бути загальний сторінка із переліком новин (фото, назва, короткий опис, активність) + окрема сторінка для створення/редагування)
-+ для новин потрібно мати можливість задавати наступні параметри: назва, короткий опис, основний опис, текст (задається через підключений текстовий редактор), можливість задати перелік пов'язаних новин, ознака відображення новини на сайті
- реалізувати можливість сортування новин на загальній сторінці із переліком новин (через перетягування)
2. Виведення на сайті
- на головній сторінці вивести перелік активних новин + параметр кількості новин, які мають відображатись (10, 15, 20);
- якщо новин більше, ніж вибраний показник - має бути пагінація
- новини виводяться у порядку сортування (якщо новини не було сортовано - у порядку створення по спаданню)
- у списку новин виводити фото, назву, короткий опис і дату створення
- на сторінці новини виводити посилання на пов'язані новини (якщо такі є задані)