<p dir="rtl" style="font-size:26px;font-weight:bold;">لارا ترست</p>
<p dir="rtl" style="font-size:22px;">لارا ترست هي عبارة عن لوحة تحكم تم تصميمها بواسطة إطار العمل <a href="https://laravel.com" target="_blank">Laravel</a>
 مع دمج حزمة <a href="https://laratrust.santigarcor.me" target="_blank">Laratrust</a>  لمنح الأدوار والصلاحيات المناسبة للمستخدمين كلا حسب الحاجة.</p>
<p dir="rtl" style="font-size:24px;font-weight:bold;">تحتوي لوحة التحكم على :</p>
<p dir="rtl" style="font-size:18px">إنشاء حساب والتحقق من البريد الإلكتروني.</p>
<p dir="rtl" style="font-size:18px">تسجيل الدخول.</p>
<p dir="rtl" style="font-size:18px">استعادة كلمة المرور.</p>
<p dir="rtl" style="font-size:18px">منح الصلاحيات للأدوار.</p>
<p dir="rtl" style="font-size:18px">منح الأدوار و الصلاحيات للمستخدمين.</p>
<p dir="rtl" style="font-size:18px">توجيه المستخدمين حسب الأدوار والصلاحيات.</p>
<p dir="rtl" style="font-size:22px;font-weight:bold;">قبل البدء:</p>

```bash

git clone https://github.com/Ensaia/laravel-laratrust.git
cd laravel-laratrust
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed

```
<p dir="rtl" style="font-size:22px;font-weight:bold;">ابدأ خادم التطوير:</p>

```bash

# Terminal
php artisan serve

```


