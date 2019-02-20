<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'کاربری با این نام کاربری در سیستم یافت نشد. اگر مایل هستید یک محرومیتی را بدون رابطه با نام کاربری خاصی اضافه کنید، کادر نام کاربری را خالی بگذارید.',
'No user ID message'		=>	'هیچ کاربری با این شناسه ثبت نام نکرده است.',
'User is admin message'		=>	'کاربر %s یک مدیر اصلی میباشد و نمیتوان آن را مسدود کرد . اگر میخواهید یک مدیر اصلی را مسدود کنید ، اول باید رتبه آن را کاهش دهید.',
'User is mod message'		=>	'کاربر %s یک مدیر انجمن میباشد و نمیتوان آن را مسدود کرد . اگر میخواهید یک مدیر انجمن را مسدود کنید ، اول باید رتبه آن را کاهش دهید.',
'Must enter message'		=>	'شما باید یک نام کاربری ، یک آدرس IP و (حداقل) یک آدرس ایمیل را وارد کنید.',
'Cannot ban guest message'	=>	'کاربر مهمان را نمیتوان مسدود کرد.',
'Invalid IP message'		=>	'شما IP / محدوده IP نامعتبری را وارد کرده اید.',
'Invalid e-mail message'	=>	'آدرس ایمیل ( برای مثال user@domain.com ) یا قسمتی از دامنه آدرس ایمیل ( مثل domain.com ) که شما وارد کرده اید معتبر نمیباشد.',
'Duplicate domain message'	=>	'دامنه %s قبلا ً مسدود شده است.',
'Duplicate e-mail message'	=>	'آدرس ایمیل %s قبلا ً مسدود شده است.',
'Invalid date message'		=>	'شما تاریخ انقضاء نامعتبری را وارد کرده اید.',
'Invalid date reasons'		=>	'فرمت باید بصورت YYYY-MM-DD باشد و تاریخ باید حداقل یک روز در آینده باشد.',
'Ban added redirect'		=>	'مسدود اضافه شد. درحال تغییر مسیر …' ,
'Ban edited redirect'		=>	'مسدود ویرایش شد. درحال تغییر مسیر …',
'Ban removed redirect'		=>	'مسدود حذف شد. درحال تغییر مسیر …',

'New ban head'				=>	'محرومیت جدید',
'Add ban subhead'			=>	'افزودن محرومیت',
'Username label'			=>	'نام کاربری',
'Username help'				=>	'نام کاربری برای مسدود کردن (غیرحساس به بزرگی و کوچکی حروف).',
'Username advanced help'	=>	'نام کاربری برای مسدود کردن (غیرحساس به بزرگی و کوچکی حروف). صفحه بعدی به شما اجازه میدهد IP و ایمیل دلخواهی را وارد کنید . اگر فقط میخواهید یک IP/محدوده IP یا ایمیل را مسدود کنید فقط اینجا را خالی بگذارید.',

'Ban search head'			=>	'جستجوی مسدود شده ها',
'Ban search subhead'		=>	'متنی برای جستجو بنویسید',
'Ban search info'			=>	'برای جستجو مسدود شده ها در پایگاه داده . یک شرط یا چند شرط را برای جستجو وارد کنید . کاراکتر <strong>*</strong> ستاره قابل قبول است . برای نمایش همه مسدود شده ها تمام کادرها را خالی بگذارید.',
'Date help'					=>	'(yyyy-mm-dd)',
'Message label'				=>	'پیام',
'Expire after label'		=>	'انقضاء بعد از',
'Expire before label'		=>	'انقضاء قبل از',
'Order by label'			=>	'مرتب سازی براساس',
'Order by username'			=>	'نام کاربری',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'ایمیل',
'Order by expire'			=>	'تاریخ انقضاء',
'Ascending'					=>	'صعودی',
'Descending'				=>	'نزولی',
'Submit search'				=>	'جستجو',

'E-mail label'				=>	'ایمیل',
'E-mail help'				=>	'ایمیل یا دامنه ایمیلی که مایل به مسدود کردن آن هستید ( برای مثال : someone@somewhere.com  یا somewhere.com ) برای اطلاعات بیشتر " اجازه به آدرس های ایمیل مسدود شده " در مجوزها را ببینید.',
'IP label'					=>	'آدرس IP / محدوده IP',
'IP help'					=>	'آدرس IP یا محدوده IP که مایل به مسدود کردن آن هستید ( برای مثال : 150.11.110.1 یا 150.11.110 ) . آدرس ها را با فاصله از هم جدا کنید . اگر یک IP که از قبل وارد شده آخرین IP شناخته شده این کاربر در پایگاه داده است.',
'IP help link'				=>	'برای مشاهده آمار IP این کاربر %s کلیک کنید.',
'Ban advanced head'			=>	'تنظیمات پیشرفته محرومیت',
'Ban advanced subhead'		=>	'الحاق محرومیت توسط IP و ایمیل',
'Ban message label'			=>	'پیام محرومیت',
'Ban message help'			=>	'یک پیام برای نمایش به کاربر مسدود شده هنگامی که از تالار گفتگو دیدن میکند.',
'Message expiry subhead'	=>	'پیام محرومیت و انقضای آن',
'Ban IP range info'			=>	'هنگام مسدود کردن یک محدوده IP باید بسیار احتیاط کنید چون امکان این دارد که با چندین کاربر با جزئی از IP مشابه مطابقت داشته باشد.',
'Expire date label'			=>	'تاریخ انقضاء',
'Expire date help'			=>	'تاریخی که این محرومیت باید بطور خودکار برداشته شود ( فرمت : yyyy-mm-dd ) . برای برداشتن بصورت دستی خالی بگذارید.',

'Results head'				=>	'نتیجه جستجو',
'Results username head'		=>	'نام کاربری',
'Results e-mail head'		=>	'ایمیل',
'Results IP address head'	=>	'IP/محدوده-IP',
'Results expire head'		=>	'تاریخ انقضاء',
'Results message head'		=>	'پیام',
'Results banned by head'	=>	'مسدود شده توسط',
'Results actions head'		=>	'عملیات',
'No match'					=>	'مطابقت ندارد',
'Unknown'					=>	'نامشخص',

);