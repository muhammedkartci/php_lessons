# Kurulum 

## MAMP Kurulumu

1. MAMP uygulamasını indirin.
2. Ardından uygulamayı açarak 'Start Servers' butonuna tıklayarak serverı başlatınız.
Serverlar MAMP dosyasının içinde bulunan 'htdocs' dosyasını renderlar.
3. Serverları başlattıktan sonra 'Open WebStart Page' butonuna tıklayınız.
4. Ardından tarayıcıda açılan sayfanın URL'sindeki 'MAMP/' yazını siliniz ve enter tuşuna basınız. Ve işte, karşınızda htdocs dosyasının içindeki dosyalar.

## phpMyAdmin Database Kurulumu

1. 'http://localhost/' sayfasına girdikten sonra URL'nin devamına '/phpMyAdmin' yazıyoruz.
    `http://localhost/phpMyAdmin`
    ![image info](assets\images\phpMyAdmin-anasayfa.PNG)
    Karşınıza böyle bir sayfa çıkıyor.
2. Ardından sol panelde bulunan *Yeni* butonuna tıklayarak yeni bir database oluşturmaya başlayabilirsiniz. Eğer önceden açılmış bir database kullanmak istiyorsanız bu aşamayı es geçebilirsiniz.
    ![image info](assets\images\phpMyAdmin-yeni-buton.png)
    1. Ardından karşınıza yeni database'in ismini ve dilini giriniz ve oluştur butonuna tıklayınız.
        ![image info](assets\images\phpMyAdmin-yeni-database.PNG)
    2. Database'de herhangi bir tablo bulunmadığı için sizi yeni tablo oluşturma sayfasına yönlendiriyor. Tablo oluştururken tablonun ismini ve sütun sayısını girmenizi istiyor. Sütun sayısı tabloda tutmak istediğiniz elemanların kaç farklı özellik tutmasını istediğinizi belirtiyor.
        ![image info](assets\images\phpMyAdmin-yeni-tablo.PNG)
    3. Sütunların ismini giriyoruz. Herbir tablo için 'id' sütunu koymanızı ve sağ taraftan `A.I` kutusunu işaretlemenizi öneririz. Bu seçenek, tabloda bulunan her eleman için farklı bir id yani ayırt edici bir özellik demektir.
        ![image info](assets\images\phpMyAdmin-yeni-tablo-sütun.PNG)
## GitHub Kurulumu
1. Terminalde MAMP uygulamasının 'htdocs' dosyasını açınız.
2. Terminale aşağıdaki kodu yapıştırınız.
`git clone https://github.com/muhammedkartci/php_lessons.git`

# Pushlama

1. `git add .`
2. `git commit -m "Yaptığınız değişiklikleri yazınız"`
3. `git push` 

# Ders İçerikleri

## Ders 1 - Lesson_1
    Değişkenler
        1. Sayılar -> [integer,float]
        2. Metinler -> [string]
        3. Boolean
## Ders 2 - Lesson_2
    Temel Döngüler
        1. For Döngüsü
        2. While - Do While döngüleri 
    
    Koşullar
        1. If - Else If - Else Koşulları 
        2. Switch Koşulu

## Ders 3 - Lesson_3
    1. phpMyAdmin database bağlantısı
    2. Database'den Veri Çekme
    