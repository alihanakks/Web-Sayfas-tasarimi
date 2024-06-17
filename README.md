Bu sayfa hazır template kullanılarak yapılmış bir web sayfasıdır.İçersinde Php,js,mysql bağlantısı bulunmaktadır.
sql tablosunun ayrıntıları şunlardır;

-- serveradı_ders_paket tablosunu oluşturma
CREATE TABLE serveradı_ders_paket (
    id INT(11) NOT NULL,
    paket VARCHAR(50) NOT NULL
);

-- serveradı tablosunu oluşturma
CREATE TABLE serveradı_ders_proje (
    id INT(11) NOT NULL,
    isim VARCHAR(50) NOT NULL,
    soyisim VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    P_id INT(11) NOT NULL,
    PRIMARY KEY (P_id)
);

-- serveradı_ders_proje tablosundaki P_id ile serveradı_ders_paket tablosundaki id arasında yabancı anahtar ilişkisi kurma
ALTER TABLE serveradı_ders_proje
ADD FOREIGN KEY (P_id) REFERENCES serveradı_ders_paket(id);
