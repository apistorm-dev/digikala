# digikala Storm
وب سرویس دریافت اطلاعات محصول از - دیجی کالا

برای دریافت اطلاعات محصولات دیجی کالا به صورت کلاسیفای شده از این پکیج استفاده کنید
## سازگاری با برنامه های کدنویسی
این پکیج با برنامه ی 

PHPStorm
VSCode

کاملا سازگار است و با توجه به کلاسیفای شدن وب سرویس, شما میتوانید قبل از ارسال درخواست ها, نتایج را به صورت تودرتو بوسیله ی ساجسشن بررسی کنید مشابه تصویر ذیل

![](https://github.com/apistorm-dev/digikala/blob/main/.pictures/1.png)

## نصب پکیج
برای نصب کافیست دستور زیر را در پوش ی پروژه ی خود اجرا کنید:

```bash 
composer require yiiman/digikala
```
## تست پکیج
جهت تست پکیج کافیست از کلاس

``YiiMan\Digikala\DigikalaStorm``

یک شیء بسازید و از داخل کلاس, متدهای موجود را فراخوانی کنید:
```php
use YiiMan\Digikala\DigikalaStorm;

$sdk = new DigikalaStorm();
// دریافت اطلاعات دسته بندی تبلت
$category=$sdk->getCategory('tablet');
// بررسی اتصال صحیح و دریافت اطلاعات
if ($category->isSuccess()) {
    $priceTitle=$category->filters->price->title;
    print_r($priceTitle);
}

// دریافت اطلاعات محصول شماره 3699809
$product = $sdk->getProduct('3699809');
// بررسی اتصال صحیح و دریافت اطلاعات
if ($product->isSuccess()) {
    
    $title=$product->product->title_fa;
    $specs=$product->product->specifications[0]->attributes;
    print_r($title);
    print_r($specs);
}
```

## قدرت گرفته از
[APIStorm](https://github.com/apistorm-dev)