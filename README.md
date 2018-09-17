# PHP MinifiyCSS

Kullandığınız tüm CSS dosyalarını tek bir dosya altında sıkıştırmanıza olanak sağlar.

* Orijinal CSS dosyalarınızı herhangi bir şekilde **değiştirmez**, müdahale etmez.
* 24 saatte bir defa çalışır.
* Birden fazla CSS kodlarını tek bir dosyada sıkıştırır.
* Yorum satırlarını kaldırır.
* Kapatma parantezinden önceki noktalı virgülü, önemsiz boşlukları ve boş satırları kaldırır.

## Kolay Kullanım

* Öncelikle sınıfı sayfamıza dahil edelim.
```php
<?php include_once 'minifyCSS.class.php' ?>
```

* HTML Head kısmında CSS dosyalarını sayfamıza dahil ederken ufak bir değişiklik yapacağız, hepsi bu. :)

*Normal CSS dosyalarını dahil edelim.*

```php
<link rel="stylesheet" type="text/css" href="normalize.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
```

**Şimdi ise sınıfımızı kullanarak CSS dosyalarını dahil edelim.**

```php
<link rel="stylesheet" type="text/css" href="<?php minifyCSS::minify(array('normalize.css', 'style.css')) ?>" />
```

## Sonuç

Aşağıdaki gibi bir CSS dosyamız var diyelim. Yorum satırları ve boşluklar ile dolu.

```css
body {
	margin: 0px;
	display:flex;
	justify-content:center;
	align-items:center;
	height:100vh;
}

/* Burası yorum satırıdır. */

h1.title {
	background:#34495e;
	color:#fff;
	padding:20px 100px;
	border-radius:4px;
	transform:rotate(-20deg) skew(25deg) scale(0.8);
	font:normal 500 20px Arial;
}

h2 { background:#f1c40f; color:#fff; font:normal 500 20px Arial; padding:20px; border-radius:4px }

/*
	
	Burası birden fazla
	yorum
	satırıdır.

*/

h1,
h2 { border:4px solid #000 }
```

**minifyCSS** sınıfından geçtikten sonraki CSS kodunu inceleyim.

```css
body{margin:0px;display:flex;justify-content:center;align-items:center;height:100vh}h1.title{background:#34495e;color:#fff;padding:20px 100px;border-radius:4px;transform:rotate(-20deg) skew(25deg) scale(0.8);font:normal 500 20px Arial}h2{background:#f1c40f;color:#fff;font:normal 500 20px Arial;padding:20px;border-radius:4px}h1,h2{border:4px solid #000}
```
