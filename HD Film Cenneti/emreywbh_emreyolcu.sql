-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 25 Nis 2023, 19:09:54
-- Sunucu sürümü: 5.7.41
-- PHP Sürümü: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `emreywbh_emreyolcu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket`
--

CREATE TABLE `anket` (
  `anket_id` int(11) NOT NULL,
  `anket_soru1` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru2` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru3` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru4` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru5` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru6` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru7` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru8` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru9` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru10` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru11` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru12` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru13` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru14` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_soru15` text COLLATE utf8_turkish_ci NOT NULL,
  `anket_inceleyen` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `anket_durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Görüntülenmedi',
  `anket_tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anket`
--

INSERT INTO `anket` (`anket_id`, `anket_soru1`, `anket_soru2`, `anket_soru3`, `anket_soru4`, `anket_soru5`, `anket_soru6`, `anket_soru7`, `anket_soru8`, `anket_soru9`, `anket_soru10`, `anket_soru11`, `anket_soru12`, `anket_soru13`, `anket_soru14`, `anket_soru15`, `anket_inceleyen`, `anket_durum`, `anket_tarih`) VALUES
(8, 'Emre Yolcu', 'Trend Filmler', 'Romantik / Komedi', 'Siyah Telefon / Kadın Kral', 'Tablet', 'Yüksek görüntü kalitesi ile film izlemek', 'Türkçe Altyazılı', 'Evet', 'Hayır', 'Evet', 'Vizyondaki Filmler', 'Cakallarla Dans', 'Black Adam', '10', 'Site Çok Güzel Olmuş', 'emreylcz', 'İncelendi', '2022-12-22 20:02:30'),
(9, 'Uğur İlhan', 'En İyiler', 'Dram / Korku / Gerilim / Aksiyon / Bilim Kurgu', 'Minyonlar 2 Gru\'nun Yükselişi / Black Adam / Siyah Telefon / Kadın Kral', 'Tablet', 'Yüksek görüntü kalitesi ile film izlemek', 'Türkçe Altyazılı', 'Evet', 'Hayır', 'Hayır', 'Editor Seçimi', 'Recep İvedik 7', 'Black Adam', '10', 'Harika Bir Site', 'tester', 'Görüntülenmedi', '2022-12-22 20:03:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `comment_eposta` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `comment_yorum` text COLLATE utf8_turkish_ci NOT NULL,
  `comment_profilresmi` text COLLATE utf8_turkish_ci NOT NULL,
  `comment_tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_adsoyad`, `comment_eposta`, `comment_yorum`, `comment_profilresmi`, `comment_tarih`) VALUES
(14, 'Uğur İlhan', 'ugurilhan@gmail.com', 'Recep İvedik 6 Çok güzel 7. filmini bekliyorumm', 'assets/images/faces/2.jpg', '2022-11-29 20:26:24'),
(15, 'Emre Yalçın', 'emreyalcın@gmail.com', 'Exxendeki Filmler ne zaman gelir abiii', 'assets/images/faces/4.jpg', '2022-11-29 20:26:47'),
(16, 'Doğuş Karaoğlu', 'dogus21313@gmail.com', 'Ben saatmı satıyoru', 'assets/images/faces/1.jpg', '2022-11-29 20:27:02'),
(17, 'Bensu Soral', 'bensusorall@gmail.com', 'Pembe oje filmi ne zaman gelir admin beyy', 'assets/images/faces/3.jpg', '2022-11-29 20:27:22'),
(18, 'Hadise Açıkgöz', 'hadise1074@gmail.com', 'O Ses Türkiyenin eski bölümleri ne zaman gelir ?', 'assets/images/faces/7.jpg', '2022-11-29 20:27:41'),
(19, 'Emre Yolcu', 'emre.yolcu16@gmail.com', 'Site çok güzel artık rahatça kaçak film izleyebiliyorumm', 'assets/images/faces/6.jpg', '2022-11-29 20:28:07'),
(20, 'Cem Yılmaz', 'cemyılmaz@gmail.com', '1 Tat 1 Doku ne zaman gelir kardeşimm', 'assets/images/faces/8.jpg', '2022-11-29 20:28:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `contact_konu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `contact_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `contact_tel` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `contact_mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `contact_tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_adsoyad`, `contact_konu`, `contact_mail`, `contact_tel`, `contact_mesaj`, `contact_tarih`) VALUES
(1, 'Uğur ilhan', 'Mekanın sahibi benim', 'Dalga@hotmail.com', '11111111111', 'Dalga', '2023-03-07 14:33:00'),
(15, 'Emre Yolcu', 'Deneme', 'emre.yolcu16@gmail.com', '05522251525', 'deneme', '2022-11-24 14:35:21'),
(17, 'Burak Eyier', 'WebSite', 'burakeyier1345@gmail.com', '05366654900', 'site çok güzel beğendim', '2023-02-16 13:56:00'),
(18, '11', '1', '11', '11', '11', '2023-04-12 21:08:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `menu_ad` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(11) NOT NULL,
  `menu_durum` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_url`, `menu_sira`, `menu_durum`) VALUES
(1, '0', 'Anasayfa', 'anasayfa.php', 1, 'Aktif'),
(2, '0', 'Kategoriler', 'kategoriler.php', 2, 'Aktif'),
(3, '0', 'Blog', 'blog.php', 3, 'Aktif'),
(4, '0', 'Anket', 'anket.php', 4, 'Aktif'),
(5, '0', 'İletişim', 'iletisim.php', 7, 'Aktif'),
(15, '0', 'Deneme2', 'deneme2.php', 15, 'Pasif'),
(16, '0', 'deneme', 'deneme.php', 6, 'Pasif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_ismi` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `movie_resimurl` text COLLATE utf8_turkish_ci NOT NULL,
  `movie_ozet` text COLLATE utf8_turkish_ci NOT NULL,
  `movie_yapimyil` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `movie_tur` text COLLATE utf8_turkish_ci NOT NULL,
  `movie_dil` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `movie_imdb` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `movie_imdblink` text COLLATE utf8_turkish_ci NOT NULL,
  `movie_sure` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `movie_tarih` datetime NOT NULL,
  `movie_kategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_ismi`, `movie_resimurl`, `movie_ozet`, `movie_yapimyil`, `movie_tur`, `movie_dil`, `movie_imdb`, `movie_imdblink`, `movie_sure`, `movie_tarih`, `movie_kategori`) VALUES
(51, 'Kal', '../images/1669566056.jpg', 'Kal Filmi 2022 yılı Yerli yapımı bir filmdir. Ozan Açiktan yönetmenliğinde çekilen bu filmin başrolünde Burak Deniz oynamaktadır. imdb puanlamasına göre film 6.2 puanlama almıştır. Film türü Dram , Romantik olarak belirlenmiştir.Kız arkadaşı tarafından aniden terk edilen Semih, hayatına devam etmek için umutsuzca çabalarken geçmişle yüzleşmeye başlar. Aşk ve ayrılık hakkında “biraz garip” bir hikâye.', '2022', 'Romantik Filmleri / Türk Filmleri', 'Türkçe Dublaj', '6.2', 'https://www.imdb.com/title/tt18450548/?ref_=fn_al_tt_1', '147', '2022-11-27 16:00:00', 'Yerli Filmler'),
(53, 'Aykut Enişte 2', '../images/1669567967.jpg', 'Aykut Enişte 2 Filmi 2021 yılı Yerli yapımı bir filmdir. imdb puanlamasına göre film 6.5 puanlama almıştır. Film türü Komedi olarak belirlenmiştir. Aykut (Cem Gelinoğlu) ve Gülşah (Melis Babadağ), bu kez gerçekten evlenmek için hazırlık yapıyor! Sevdiği kadınla evlenip Atabeyoğlu Ailesi’ne damat olacağı için mutluluktan havalara uçan Aykut, işler yolunda giderse bu kez Gülşah’ı elinden kaçırmamaya kararlı.', '2021', 'Komedi Filmleri / Türk Filmleri', 'Türkçe Dublaj', '6.5', 'https://www.imdb.com/title/tt12738164/?ref_=nv_sr_srsg_1', '158', '2022-11-27 16:01:00', 'Yerli Filmler'),
(54, 'Oflu Hoca Trakya’da', '../images/1669568197.jpg', 'Oflu Hoca Trakya\'da Filmi 2018 yılı Yerli yapımı bir filmdir. Film, Trakya’nın hikâyesinde başkanlığını yaptığı Doğanspor futbol kulübüne, genç yetenek Hayati’yi transfer etmek için Lüleburgaz yollarına düşen Oflu Hoca’nın başına gelen beklenmedik sürprizler konu ediliyor.', '2018', 'Türk Filmleri', 'Türkçe Dublaj', '3.9', 'https://www.imdb.com/title/tt6980392/?ref_=nv_sr_srsg_0', '125', '2022-11-27 16:03:00', 'Yerli Filmler'),
(56, 'Aşk Taktikleri', '../images/1669568412.jpg', 'Aşk Taktikleri izle, Aşk Taktikleri full, Aşk Taktikleri tek parça, Aşk Taktikleri hd yerlifilmcehennemi iyi seyirler diler. Bir reklam yöneticisi ve bir moda tasarımcısı-blog yazarı aşka inanmazlar, bu yüzden diğerinin tepetaklak olmasını sağlamak için alışılmadık taktiklerle iddiaya girerler.', '2022', 'Komedi Filmleri / Romantik Filmleri / Türk Filmleri', 'Türkçe Dublaj', '5.2', 'https://www.imdb.com/title/tt14486678/?ref_=nv_sr_srsg_0', '138', '2022-11-27 16:05:00', 'Yerli Filmler'),
(57, 'Hababam Sınıfı Askerde', '../images/1669568541.jpg', 'Hababam Sınıfı Askerde Filmi 2005 yapımı Hababam Sınıfı Askerde tek parça sansürsüz 1080p yerlifilmcehennemi.com Yaşıtları çoktan iş güç sahibi olan Hababam Sınıfı\'nın dur durak bilmez haylazlıkları artık dayanılmaz boyutlara gelmiştir.', '2005', 'Komedi Filmleri / Türk Filmleri', 'Türkçe Dublaj', '3.2', 'https://www.imdb.com/title/tt0427323/?ref_=nv_sr_srsg_0', '151', '2022-11-27 16:06:00', 'Yerli Filmler'),
(59, 'Müslüm', '../images/1669569146.jpg', 'Müslüm Gürses\'in hayatının biyografi olarak işlendiği bir film ile karşı karşıyayız. Müslüm Baba olarakta bilinen usta arabesk şarkıcı, küçük yaşlarda Adana\'da doğan Müslüm, babasından çektikleri yetmezmiş gibi yoksullukla uğraşan bir gençtir. Adana\'da ses yarışması düzenlendiğinde kendisini göstermek için verdiği mücadeleyi ve sonrasında geldiği konumun ona neleri kaybettirdiğini anlatıyor. Muhterem Nur\'a olan aşkınıda filmin her köşesinde göreceğiz. Yerli Film Cehennemi her zaman sizin yanınızda!', '2018', 'Dram Filmleri / Türk Filmleri', 'Türkçe Dublaj', '7.6', 'https://www.imdb.com/title/tt7832124/?ref_=nv_sr_srsg_0', '132', '2022-11-27 16:08:00', 'Yerli Filmler'),
(60, 'Börü', '../images/1669569329.jpg', 'Börü Filmi 2018 yapımı Kurtların soyundan gelen Freddy Lupin’in gurur duyulacak bir soy ağacı vardır. Bu zamana dek gelmiş geçmiş en korkutucu kurt olma hayaliyle yaşayan Freddy, ilk uluması komik bir anıya dönüşüp, kendisi de süs köpeğine dönüşünce hayatının şokunu yaşayacaktır.Börü izle', '2018', 'Aksiyon Filmleri / Gerilim Filmleri / Türk Filmleri', 'Türkçe Dublaj', '6.7', 'https://www.imdb.com/title/tt8197998/?ref_=nv_sr_srsg_5', '125', '2022-11-27 16:10:00', 'Yerli Filmler'),
(61, 'Zaman Makinesi 1973', '../images/1669569459.jpg', 'Zaman Makinesi 1973 izle, Zaman Makinesi 1973 1080p hd, Zaman Makinesi 1973 tek parça, Zaman Makinesi 1973 yerli film izle Şımarık bir iş adamının oğlu, babasının vasiyetinden kovulur, geriye sadece babasının gençliğinde kullandığı antika araba kalır. Arabanın zaman makinesi olduğu ortaya çıktı.', '2014', 'Komedi Filmleri / Bilim Kurgu Filmleri / Türk Filmleri', 'Türkçe Dublaj', '6.3', 'https://www.imdb.com/title/tt3475504/?ref_=nv_sr_srsg_0', '145', '2022-11-27 16:10:00', 'Yerli Filmler'),
(62, 'Sen Yaşamaya Bak', '../images/1669569615.jpg', 'Sen Yaşamaya Bak izle, Sen Yaşamaya Bak 1080p hd, Sen Yaşamaya Bak tek parça, Sen Yaşamaya Bak yerli film izle Bekâr bir anne olan Melisa hastadır ve çok az ömrü kalmıştır. Bu kısa sürede hem fırtına gibi bir aşk yaşayıp hem de oğlu Can\'ı emanet edebileceği bir adam bulabilecek mi?', '2022', 'Dram Filmleri / Türk Filmleri', 'Türkçe Dublaj', '5.7', 'https://www.imdb.com/title/tt14898794/?ref_=nv_sr_srsg_0', '145', '2022-11-27 16:12:00', 'Yerli Filmler'),
(63, 'Dabbe 4: Cin Çarpması', '../images/1669569739.jpg', 'Cinci Faruk yeni evlenecek olan Kübra\'nın vücuduna giren cinleri çıkarmak için eline aldığı kamera ve bilimsel araştırmalarla büyük bir arayış içerisine girecektir. Dabbe bu sefer yine bir köyde beliriyor. Yerli Film Cehennemi her zaman sizin yanınızda!', '2013', 'Korku Filmleri / Türk Filmleri', 'Türkçe Dublaj', '6.8', 'https://www.imdb.com/title/tt3069758/?ref_=nv_sr_srsg_0', '132', '2022-11-27 16:14:00', 'Yerli Filmler'),
(64, '7. Koğuştaki Mucize', '../images/1669569861.jpg', 'Ada adında dünya tatlısı bir çocukları olmuştur. Askeri darbesi sonrası bölgelere sıkıyönetim komutanları atanmış ve bu bölgeye yeni gelen komutan ailesi ve diğer askerlerle birlikte piknik yaparken kızının kayalıklardan düştüğünü görür ve Memo zihinsel engelli olmasına rağmen kızı sulardan çıkartıp sahile çıkarmayı başarır. Fakat sıkıyönetim komutanı kızının ölümünden Memo\'yu sorumlu tutmaktadır ve cezasını vermek için harekete geçer.', '2019', 'Dram Filmleri / Türk Filmleri', 'Türkçe Dublaj', '8.2', 'https://www.imdb.com/title/tt10431500/?ref_=nv_sr_srsg_0', '137', '2022-11-27 16:15:00', 'Yerli Filmler'),
(65, 'Hadi İnşallah', '../images/1669570020.jpg', 'Hadi İnşallah Filmi 2014 yılı Yerli yapımı bir filmdir. Bu filmin başrolünde Büşra Pekin oynamaktadır. imdb puanlamasına göre film 5.4 puanlama almıştır. Film türü Komedi , Romantik olarak belirlenmiştir. PuCCa, hayatının 4 senesini Ankara\'da geçirir ama o 4 koca sene boyunca beraber olduğu sevgilisinden de ayrılırak, İzmir\'e ailesinin yanına döner. Zor bir ayrılık süreciyle karşı karşıyadır,', '2014', 'Romantik Filmleri / Türk Filmleri', 'Türkçe Dublaj', '5.4', 'https://www.imdb.com/title/tt3982774/?ref_=nv_sr_srsg_0', '135', '2022-11-27 16:17:00', 'Yerli Filmler'),
(66, 'Kadın Kral', '../images/1669570319.jpg', 'The Woman King, 18. ve 19. yüzyıllarda Afrika\'nın en önemli ve güçlü bölgelerinden biri olan Dahomey Krallığı\'nda yaşanan gerçek olaylardan esinlenen bir hikayeyi anlatıyor. Viola Davis\'in, \"Dahomey Amazonları\" olarak bilinen ve tamamı kadınlardan oluşan bir savaşçı topluluğunun generali Namisca karakterine hayat verdiği film, Afrika topraklarını yaşam tarzlarını yok etmek ve nihayetinde onları kökünden sökmek isteyen beyaz işgalcilerden korumak için verdikleri mücadeleyi merkez alacak.', '2022', 'Aksiyon Filmleri / Tarih Filmleri / Dram Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.7', 'https://www.imdb.com/title/tt8093700/?ref_=nv_sr_srsg_0', '144', '2022-11-27 16:17:00', 'Trend Filmler'),
(67, 'Siyah Telefon', '../images/1669570481.jpg', 'The Black Phone, 13 yaşındaki bir çocuğun hikayesini anlatıyor. Utangaç ama zeki bir çocuk olan Finney Shaw, sadist bir katil tarafından ses geçirmez bir bodrum katında alıkonulur. Duvarda duran ve bağlı gibi görünmeyen telefon çalmaya başladığında işler değişir. Finney, telefon aracılığıyla katilin diğer kurbanlarının sesini duyabiliyordur. Finney onların yaşadıklarını yaşamayacağına emindir.', '2022', 'Korku Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '7.5', 'https://www.imdb.com/title/tt7144666/?ref_=nv_sr_srsg_0', '102', '2022-11-27 16:18:00', 'Trend Filmler'),
(69, 'Black Adam', '../images/1669570981.jpg', 'C.C. Beck ve Otto Binder\'ın yaratıcısı olduğu DC çizgi romanlarına göre Black Adam, Shazam\'ın şeytani ikizidir. Ancak ilerleyen zamanlarda Black Adam kötü olmayı bir nevi bırakarak, geçmişte işlediği suçları affettirmek amacıyla anti-kahramana dönüşür. Çizgi romanlarda geçenlere göre, Black Adam Antik Mısır dönemlerinde ortaya çıkar.', '2022', 'Aksiyon Filmleri / Bilim Kurgu Filmleri / Fantastik Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.8', 'https://www.imdb.com/title/tt6443346/?ref_=nv_sr_srsg_0', '125', '2022-11-27 16:21:00', 'Trend Filmler'),
(70, 'Minyonlar 2 Gru\'nun Yükselişi', '../images/1669571430.jpg', 'Despicable Me serisiyle popüler kültürde yer edinen Minyonlar\'ın ikinci filmi Minions: The Rise of Gru, 70\'li yıllarda tarihin en büyük kötülerinden biri olma hayali kuran genç Gru ile yolları kesişen Minyonlar\'ın, kötülükleriyle nam salan Vicious 6 ekibine girmeye çalışan Gru\'ya yardım etmelerini konu ediniyor.', '2022', 'Macera Filmleri / Komedi Filmleri / Animasyon Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.9', 'https://www.imdb.com/title/tt5113044/?ref_=nv_sr_srsg_0', '134', '2022-11-27 16:22:00', 'Trend Filmler'),
(73, 'The Matrix Resurrections', '../images/1669571740.jpg', 'Lana Wachowski tarafından yazılan ve yönetilen Matrix serisinin 4. filmidir.', '2021', 'Aksiyon Filmleri / Bilim Kurgu Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.6', 'https://www.imdb.com/title/tt10838180/?ref_=nv_sr_srsg_0', '150', '2022-11-27 16:23:00', 'En İyi Filmler'),
(75, 'Thor: Aşk ve Gök Gürültüsü', '../images/1669577765.jpg', 'Thor: Ragnarok\'un devamı ve Thor destanının dördüncü filmi.', '2022', 'Aksiyon Filmleri / Macera Filmleri / Fantastik Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.7', 'https://www.imdb.com/title/tt10648342/?ref_=nv_sr_srsg_0', '126', '2022-11-27 16:25:00', 'En İyi Filmler'),
(76, 'Örümcek Adam: Eve Dönüş Yok', '../images/1669578636.jpg', 'Örümcek Adam\'ın gerçek kimliği Peter Parker olarak ortaya çıkmasından sonra gelişen olaylar anlatılıyor. Peter, kimliğinin ortaya çıkmasından sonra büyük suçlamalarla karşı karşıya kalır. Medyanın baskısı altında kalınca yakınındakiler de tehlikeye girer. Peter, Doktor Strange\'den yardım ister.', '2021', 'Aksiyon Filmleri / Macera Filmleri / Bilim Kurgu Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '8.7', 'https://www.imdb.com/title/tt10648342/?ref_=nv_sr_srsg_0', '148', '2022-11-27 16:26:00', 'En İyi Filmler'),
(77, 'Shang-Chi ve 10 Yüzük Efsanesi', '../images/1669579033.jpg', 'The Master of Kung Fu olarak da bilinen Shang-Chi, babası tarafından bir suikastçi olması üzere çocukluğundan itibaren yetiştirilmiştir. Shang-Chi\'nin babası ise ölümsüz bir büyücüdür. Shang-Chi yalnızca sıradan bir suikastçi olmamakla birlikte simya ve insanüstü güçlerle dövüş tekniklerini geliştirir. Babasının yıkıcı güçlere sahip biri olduğunu öğrenen Shang-Chi, güçlerini onun imparatorluğunu yıkmak için kullanacaktır', '2021', 'Aksiyon Filmleri / Macera Filmleri / Bilim Kurgu Filmleri / Fantastik Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '7.9', 'https://www.imdb.com/title/tt9376612/?ref_=nv_sr_srsg_0', '132', '2022-11-27 16:30:00', 'En İyi Filmler'),
(78, 'The Mandalorian', '../images/1669579121.jpg', 'The Mandalorian 1.Sezon izle, The Mandalorian, tek başına savaş veren biridir. Bulunduğu yer ise Yeni Galaktik Cumhuriyet\'in kontrol edemediği bir bölgededir. The Mandalorian\'ın yolu Cara Dune ile kesişir. Cara Dune, Cumhuriyet\'e bağlı olan askerlerden biri olarak biliniyor. Cara, yolu The Mandalorian ile kesiştiği zaman, bulunduğu yere alışmaya çalışmakla meşguldür.', '2019', 'Aksiyon Filmleri / Macera Filmleri / Bilim Kurgu Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '8.8', 'https://www.imdb.com/title/tt8111088/?ref_=nv_sr_srsg_0', '135', '2022-11-27 16:31:00', 'En İyi Filmler'),
(79, 'Prey - Predator 5', '../images/1669579227.jpg', 'Predator 5 filmindePredator serisinin başlamadan 300 yıl evvelki başlangıç hikayesi anlatılmaktadır. Naru kabilesinin Predator saldırısından korumaya çalışacaktır.', '2022', 'Aksiyon Filmleri / Dram Filmleri / Korku Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.7', 'https://www.imdb.com/title/tt11866324/?ref_=nv_sr_srsg_0', '154', '2022-11-27 16:33:00', 'En İyi Filmler'),
(80, 'Matriarch', '../images/1669580142.jpg', 'Gizemli bir hastalığa yakalanan bir kadın, kişisel şeytanlarıyla yüzleşmek için çocukluk evine döner, ancak bunun yerine gerçek bir şeytan keşfeder.', '2022', 'Korku Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.3', 'https://www.imdb.com/title/tt17202326/?ref_=nv_sr_srsg_0', '134', '2022-11-27 16:40:00', 'En Yeni Filmler'),
(81, 'Avarice', '../images/1669580323.jpg', 'Yetenekli bir okçu, acımasız bir ev işgali sırasında kaçırılan kocasını ve kızını kurtarmak zorundadır.', '2022', 'Aksiyon Filmleri / Gerilim Filmleri', 'Türkçe Altyazılı', '5.5', 'https://www.imdb.com/title/tt11151916/?ref_=nv_sr_srsg_0', '89', '2022-11-27 16:42:00', 'En Yeni Filmler'),
(82, 'Good Night Oppy', '../images/1669580411.jpg', '90 günlük bir görev için Mars\'a gönderilen ancak 15 yıl hayatta kalan gezgin Opportunity\'nin ilham verici gerçek hikayesi. Opportunity\'nin Mars\'taki çığır açan yolculuğunu ve milyonlarca kilometre ötedeki bir robot ile onun insanları arasında kurulan olağanüstü bağı izleyin.', '2022', 'Belgesel Filmleri', 'Türkçe Altyazılı', '8.0', 'https://www.imdb.com/title/tt14179942/?ref_=nv_sr_srsg_0', '105', '2022-11-27 16:45:00', 'En Yeni Filmler'),
(83, 'The Violence Action', '../images/1669653355.jpg', 'Gündüzleri sevimli görüntüsüyle sıradan bir üniversite öğrencisi olsa da geceleri yarı zamanlı suikastçı olan Rei, şimdiye kadarki en zorlu hedefiyle karşılaşmak üzeredir.', '2022', 'Aksiyon Filmleri / Dram Filmleri', 'Türkçe Altyazılı', '5.1', 'https://www.imdb.com/title/tt17677492/?ref_=nv_sr_srsg_0', '120', '2022-11-28 18:02:00', 'En Yeni Filmler'),
(84, 'Endişelenme Sevgilim', '../images/1669653479.jpg', 'Alice ve Jack, çok gizli Victory Projesi için çalışan adamları ve ailelerini barındıran deneysel şirket kasabası Victory\'nin ideal toplumunda yaşadıkları için şanslıdırlar. Kurumsal vizyon sahibi ve motivasyonel yaşam koçu olan CEO\'ları Frank tarafından benimsenen 1950\'lerin toplumsal iyimserliği, birbirlerine sıkı sıkıya bağlı çöl ütopyasında günlük yaşamın her yönüne sızmaktadır. Erkekler her gün Victory Projesi Genel Merkezinde \"yenilikçi malzeme geliştirilmesi\" üzerinde çalışırken, eşleri - Frank\'in zarif ortağı Shelley dâhil - zamanlarını topluluklarının güzelliğinin, lüksünün ve sefahatinin tadını çıkararak geçirirler.', '2022', 'Gizem Filmleri / Gerilim Filmleri / Dram Filmleri', 'Türkçe Altyazılı', '6.3', 'https://www.imdb.com/title/tt10731256/?ref_=nv_sr_srsg_0', '123', '2022-11-28 18:05:00', 'En Yeni Filmler'),
(85, 'Elizabeth: Altın Çağ', '../images/1669653616.jpg', '1558-1603 yılları arasında 45 yıl tahtta kalan I. Elizabeth, tarihin en ünlü kraliçelerinden biri idi. İskoçya Kraliçesi kuzeni Mary Stuart, İspanya Kralı Philip ile birlikte İngiliz tahtını eline geçirmek için gizli komplolar düzenlerken I. Elizabeth\'in hayatı da büyük bir karmaşa içindedir. Bir yandan, savaşa hazırlanmakta olan imparatorluğunu koruyabilmek için sorumluluklarını yerine getirmeye çalışırken bir yandan da yakışıklı denizci Raleigh\'e karşı hissettiği tutkulu aşkla başa çıkmaya çalışmaktadır', '2022', 'Tarih Filmleri / Dram Filmleri / Biyografi Filmleri / Savaş Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.8', 'https://www.imdb.com/title/tt0414055/?ref_=nv_sr_srsg_0', '114', '2022-11-28 18:10:00', 'En Yeni Filmler'),
(86, 'Kafestekiler', '../images/1669653896.jpg', 'Tebeşirle çizilmiş sınırların dışına çıkmaya zorlandığında sinir krizi geçiren ve şiddetli tepkiler veren bir çocuk. Reçel kavanozundan çıkan küçük cam parçacıkları. Acaba Paula ve Simôn, travma geçirmiş 6 yaşındaki Clara\'ya yardım etmek isterken korkunç bir tehlikeyi hayatlarına sokmuş olabilir mi? Bir çift, nereden geldiği bilinmeyen travma geçirmiş bir çocuk bulur. Kadın, kızın kimliğini ve karanlık geçmişini ortaya çıkarmak için garip davranışlarını çözmeye çalışır.', '2022', 'Gizem Filmleri / Gerilim Filmleri / Korku Filmleri', 'Türkçe Altyazılı', '7.3', 'https://www.imdb.com/title/tt12683756/?ref_=nv_sr_srsg_0', '106', '2022-11-28 18:13:00', 'En Yeni Filmler'),
(87, 'Dünyanın En Şanslı Kızı', '../images/1669654302.jpg', 'Bir dergide herkesin imrendiği bir işte çalışan, gardırobu müthiş kıyafetlerle dolup taşan ve iyi bir aileden asil biriyle nişanlı olan Ani görünüşte her şeye sahiptir. Ancak Ani bir gün, bir suç belgeseli yönetmeni tarafından gençliğinde prestijli Brentley Okulunda yaşanan şoke edici bir olayı kendi gözünden anlatmaya davet edilir. Bu davet Ani\'yi titizlikle inşa ettiği hayatını mahvedebilecek karanlık bir gerçekle yüzleşmek zorunda bırakır.', '2022', 'Gizem Filmleri / Gerilim Filmleri / Dram Filmleri', 'Türkçe Altyazılı', '6.5', 'https://www.imdb.com/title/tt4595186/?ref_=nv_sr_srsg_0', '113', '2022-11-28 18:16:00', 'En Yeni Filmler'),
(88, 'Kutsal Örümcek', '../images/1669654372.jpg', 'Yönetmen Ali Abbasi, sert, kışkırtıcı, kapkara bir gerilim filmiyle sinemaya dönüyor. İlk gösterimini Cannes Film Festivali’nde yapan Kutsal Örümcek, kendine biçtiği bir misyonla kutsal Meşhed kentini \'ahlâksız ve namussuz sokak kadınlarından temizlemeyi\' hedefleyen saygın vatandaş ve aile babası Said’i izliyor. Cinayetler dehşet saldığında bir kadın gazeteci olayı kendi olanaklarıyla araştırmaya karar veriyor. Ancak feci gerçekler açığa çıktığında bile katilin birçokları tarafından kahraman olarak görüldüğü anlaşılıyor ve adaleti sağlamak gittikçe zorlaşıyor. 2000’de Meşhed’de seks işçilerini hedef alan bir seri katilin eylemleriyle mahkemesinin gerçek hikâyesinden esinlenen Ali Abbasi, ataerkil temelde kadın düşmanlığını eleştiriyor ve şöyle diyor: “Özellikle kadınlar gibi belli grupların insandışılaştırılmaları yalnızca İran’a özgü bir olgu değil, buna çeşitli şekillerde dünyanın dört bir yanında rastlanıyor”. Kutsal Örümcek, Danimarka\'nın Oscar adayı olarak açıklandı.', '2022', 'Suç Filmleri / Gerilim Filmleri / Dram Filmleri', 'Türkçe Altyazılı', '7.5', 'https://www.imdb.com/title/tt18550140/?ref_=nv_sr_srsg_0', '117', '2022-11-28 18:17:00', 'En Yeni Filmler'),
(89, 'Emily the Criminal', '../images/1669654457.jpg', 'Emily, yüklü miktardaki öğrenci borcunu ödemek için mücadele eden genç bir kadındır. Bir an önce iş bulmaya çalışan Emily, geçmişinde yer alan küçük bir sabıka kaydı nedeniyle kurumsal iş dünyasına adımını atamaz. Bu durum Emily\'nin farklı yöntemlere başvurmasına neden olur. Emily, bir yeraltı suç çetesine katılarak kredi kartı dolandırıcılığına başlar.', '2022', 'Suç Filmleri / Gerilim Filmleri / Dram Filmleri', 'Türkçe Altyazılı', '7.2', 'https://www.imdb.com/title/tt15255876/?ref_=nv_sr_srsg_0', '95', '2022-11-28 18:19:00', 'En Yeni Filmler'),
(90, 'Broad Peak', '../images/1669654564.jpg', 'Broad Peak dağına tırmanan Maciej Berbeka, zirve yolculuğunun yarım kaldığını öğrenir. 25 yıl sonra, başladığı işi bitirmek üzere harekete geçer.', '2022', 'Macera Filmleri / Biyografi Filmleri / Dram Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '7.6', 'https://www.imdb.com/title/tt8983230/?ref_=nv_sr_srsg_0', '101', '2022-11-28 18:20:00', 'En Yeni Filmler'),
(91, 'The Northman - Kuzeyli', '../images/1669654656.jpg', 'Robert Eggers’ın İzlandalı şair ve romancı Sjon ile birlikte yazdığı senaryo üzerine kurulu olan The Northman, 10. yüzyılda İzlanda’ da yaşayan Viking prensi Amleth’in babasının öldürülmesini ve suikastçılarından kaçmasını konu ediniyor. Büyümüş ve intikam için aç olan Amleth, ailesinin ölümünden sorumlu adamları öldürmek için kanla dolu bir yolculuğa koyuluyor.', '2022', 'Aksiyon Filmleri / Macera Filmleri / Dram Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '7.7', 'https://www.imdb.com/title/tt11138512/?ref_=nv_sr_srsg_0', '127', '2022-11-28 18:23:00', 'En Yeni Filmler'),
(92, 'Fantastik Canavarlar: Dumbledore\'un Sırları', '../images/1669654791.jpg', 'Adından anlaşılacağı üzere film, Dumbledore’un saklı kalmış sırlarını gün yüzüne çıkartacağının sinyallerini veriyor. Bu yeni filmde Profesör Albus Dumbledore, giderek güçlenen karanlık büyücü Gellert Grindelwald’ın büyücülük dünyasının kontrolünü ele geçirmek için harekete geçtiğini bilir. Onu tek başına durduramayacağını bilen Dumbledore, Newt Scamander’ı, eski ve yeni canavarlarla karşılaşacakları ve Grindelwald’ın giderek artan takipçileriyle çatışacakları tehlikeli bir görevde insanlara liderlik etmesi görevlendirir.', '2022', 'Macera Filmleri / Fantastik Filmleri / Aile Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.4', 'https://www.imdb.com/title/tt4123432/?ref_=nv_sr_srsg_0', '123', '2022-11-28 18:25:00', 'En Yeni Filmler'),
(93, 'Paralel Anneler', '../images/1669654877.jpg', 'Paralel Anneler, doğum yapacakları bir hastane odasında denk gelen iki kadın Janis ve Ana\'yı konu alıyor. İkisi de bekar ve hamile kalmış. Orta yaşlı Janis pişman değil ve çok mutlu. Diğeri, genç Ana, korkmuş, pişmanlık duymuş ve travma geçirmiş durumda. Janis, hastane koridorlarında uyurgezerler gibi hareket ederken onu cesaretlendirmeye çalışıyor. Gece saatlerinde değiş tokuş ettikleri birkaç sır, ikisi arasında çok yakın bir bağ oluşturacak ve şans eseri, her ikisinin de hayatını değiştirecek kadar büyük gelişmeye yol açacak.', '2022', 'Dram Filmleri', 'Türkçe Altyazılı', '7.1', 'https://www.imdb.com/title/tt12618926/?ref_=nv_sr_srsg_0', '123', '2022-11-28 18:30:00', 'En Yeni Filmler'),
(94, 'Ahtapottan Öğrendiklerim', '../images/1669654950.jpg', 'Tükenmiş bir yönetmen çocukluğuna damga vuran okyanusa geri döner. Su altında bulduğu bir dost onun hayatını değiştirir. Bir yönetmen, Güney Afrika\'da yosun ormanında yaşayan bir ahtapot ile sıra dışı bir dostluk kurar ve kendi dünyasının gizemlerini paylaşan bu hayvandan çok şey öğrenir.', '2022', 'Belgesel Filmleri', 'Türkçe Altyazılı', '8.1', 'https://www.imdb.com/title/tt12618926/?ref_=nv_sr_srsg_0', '84', '2022-11-28 18:32:00', 'En Yeni Filmler'),
(95, 'The Fallout', '../images/1669655268.jpg', 'Vada, liseye giden genç bir kızdır. Onun hayatı, okulda yaşadığı bir olaydan sonra bambaşka bir hal alır. Yaşadığı trajedinin ardından Vada\'nın ailesi ve arkadaşları ile olan ilişkisi tamamen değişir. Dünyaya farklı açılardan bakmaya başlayan Vada, yaşadığı trajedinin sonuçlarıyla mücadele etmeye çalışır.', '2022', 'Dram Filmleri', 'Türkçe Altyazılı', '7.1', 'https://www.imdb.com/title/tt11847410/?ref_=nv_sr_srsg_0', '96', '2022-11-28 18:37:00', 'En Yeni Filmler'),
(96, 'Crawlspace', '../images/1669655379.jpg', 'Bir kulübede vahşi bir cinayete tanık olduktan sonra, katiller gizli bir servet için mülkü didik didik ararken bir adam bir boşlukta saklanır.', '2022', 'Gerilim Filmleri', 'Türkçe Altyazılı', '4.7', 'https://www.imdb.com/title/tt14394620/?ref_=nv_sr_srsg_0', '90', '2022-11-28 18:40:00', 'En Yeni Filmler'),
(97, 'Kimi', '../images/1669655474.jpg', 'KIMI, agorafobisi olan bir teknoloji şirketi çalışanın, yeni bir projede çalışırken bir şiddet suçunun kayıtlarını keşfetmesini ve devamında yaşananları anlatıyor. Ne yapacağını bilemeyen genç kadın, şirketinin liderlerinin ataleti karşısında cinayetin sahibini kendisi bulmaya karar verir. Bunun için korkularıyla yüzleşmek zorunda kalan kadının, katili bulmak için öncelikle agorafobisini yenmesi ve dairesinden çıkması gerekmektedir.', '2022', 'Suç Filmleri / Gerilim Filmleri / Dram Filmleri', 'Türkçe Altyazılı', '6.3', 'https://www.imdb.com/title/tt14394620/?ref_=nv_sr_srsg_0', '89', '2022-11-28 18:42:00', 'En Yeni Filmler'),
(98, 'X', '../images/1669655563.jpg', 'Senaryosu da Ti West tarafından kaleme alınan film, 1970\'li yılların sonlarında geçiyor ve porno film çekmek için Texas\'ta yer alan ıssız bir çifttlik evine giden bir grup gencin başına gelen ürpertici olayları anlatıyor.', '2022', 'Gerilim Filmleri / Korku Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.6', 'https://www.imdb.com/title/tt13560574/?ref_=nv_sr_srsg_0', '106', '2022-11-28 18:44:00', 'En Yeni Filmler'),
(99, 'Kara Yengeç', '../images/1669655736.jpg', 'Black Crab, savaşın parçaladığı kıyamet sonrası bir dünyada geçen, İsveç yapımı ve aksiyon dolu bir gerilim filmidir. Altı asker, sonu gelmez ve zorlu bir kış mevsiminde nihayet savaşı bitirebilecek bir paketin teslimatı için hayatlarını tehlikeye atarak donmuş denizi aşmaları gereken gizli bir göreve gönderilir. Askerler, onları bekleyen tehlikeleri ve güvenebilecekleri biri olup olmadığını bilmeden düşman bölgesine girer. Öte yandan, asker olmadan önce hız patenciliği yapan Caroline Edh için bu görevin bambaşka bir amacı vardır. Başrolünü Noomi Rapace\'ın, yönetmenliğini ise Adam Berg\'ün üstlendiği Black Crab hayatlarını mahveden savaşı bitirmek için tehlikeli bir göreve çıkan altı askerin yaşadıklarını konu alıyor.', '2022', 'Aksiyon Filmleri / Macera Filmleri / Dram Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '6.4', 'https://www.imdb.com/title/tt6708668/?ref_=nv_sr_srsg_0', '109', '2022-11-28 18:45:00', 'En Yeni Filmler'),
(100, 'Decibel', '../images/1669655854.jpg', 'Film, şehrin ortasında sese duyarlı bir bombanın keşfedilmesi ile başlıyor. Bir yıl önce denizaltıda meydana gelen olayın ardından gerçekleşen bu terör saldırısını durdurmak için denizaltı komutanı, muhabir, Savunma Güvenlik Destek Komutanlığı üyesi gibi önemli isimler bir araya gelir.', '2022', 'Aksiyon Filmleri / Dram Filmleri / Korku Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '9.6', 'https://www.hdfilmcehennemi.life/decibel/', '110', '2022-11-28 19:14:00', 'IMDB 7+'),
(101, 'Esaretin Bedeli', '../images/1669658002.webp', 'Fragmanı izle\r\nEsaretin Bedeli - The Shawshank Redemption\r\nGenç ve başarılı bir banker olan Andy Dufresne, karısını ve onun sevgilisini öldürmek suçundan ömür boyu hapse mahkum edilir ve Shawshank hapishanesine gönderilir. İşkence, tecavüz, dayak dahil her türlü kötü koşulun hüküm sürdüğü hapishane koşullarında, Andynin hayata bağlı ve her daim iyi bir şeyler bulma çabası içindeki hali, çevresindeki herkesi çok etkileyecektir. Bir süre sonra parmaklıkların arkasında bile özgür bir yaşam olabileceğine bütün mahkumları inandırır. Bu mahkumlardan biri olan Red ve Andy, unutulmaz bir dostluk kurarak hapishaneyi bambaşka bir yer haline getirirler.', '1994', 'Dram Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '9.3', 'https://www.imdb.com/title/tt0111161/?ref_=nv_sr_srsg_0', '142', '2022-11-28 19:16:00', 'IMDB 7+'),
(102, 'Ayla', '../images/1669658183.jpg', 'Prince of Persia The Sands of Time- Pers Prensi: Zamanın Kumları Filminin Özeti: Sahibi tarafından eski bir hançeri koruması için görevlendirilen gencin macera dolu hikayesi anlatılmaktadır.', '2017', 'Tarih Filmleri / Dram Filmleri / Savaş Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '8.3', 'https://www.imdb.com/title/tt6316138/?ref_=nv_sr_srsg_2', '135', '2022-11-28 19:20:00', 'IMDB 7+'),
(103, 'Joker-', '../images/1669658323.jpg', 'Joker Filminin Özeti; Gündüzleri palyaço geceleri yüzüne maske takıp geçini sağlan Arthur çok yalnız bir adamdır. İnsanların onu dışlaması bir süre sonra psikolojisini olumsuz yönde etkileyecek ve artık kendini suç ve kaosun tam ortasında bulacaktır.', '2019', 'Gerilim Filmleri / Dram Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '8.4', 'https://www.imdb.com/title/tt7286456/?ref_=nv_sr_srsg_0', '132', '2022-11-28 19:24:00', 'IMDB 7+'),
(104, 'Yenilmezler 4 Oyunun Sonu', '../images/1669658492.jpg', 'Thanos\'un sonsuzluk eldivenini almak mücadele eden kahramanlar bu durumda hiç mutlu değillerdir. Çünkü eldiven yüzünden dünyayı çok mutsuz etmeye başlamıştır. Bu süreçte Iron ve Nebula\'nın içinde bulunduğu kontrolsüz uzay gemisi içinde sonsuzluğa sürüklenen kahramanlarda bu durumla mücadele etmektedirler.', '2020', 'Aksiyon Filmleri / Macera Filmleri / Bilim Kurgu Filmleri / Fantastik Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '8.4', 'https://www.imdb.com/title/tt4154796/?ref_=nv_sr_srsg_0', '182', '2022-11-28 19:28:00', 'IMDB 7+'),
(105, 'Başlangıç', '../images/1669658840.webp', 'Dom Cobb (Leonardo DiCaprio) çok yetenekli bir hırsızdır. Uzmanlık alanı, zihnin en savunmasız olduğu rüya görme anında, bilinçaltının derinliklerindeki değerli sırları çekip çıkarmak ve onları çalmaktır. Cobb’un bu ender mahareti, onu kurumsal casusluğun tehlikeli yeni dünyasında aranan bir oyuncu yapmıştır. Ancak, aynı zamanda bu durum onu uluslararası bir kaçak yapmış ve sevdiği herşeye malolmuştur. Cobb’a içinde bulunduğu durumdan kurtulmasını sağlayacak bir fırsat sunulur. Ona hayatını geri verebilecek son bir iş; tabi eğer imkansız “başlangıç”ı tamamlayabilirse. Mükemmel soygun yerine, Cobb ve takımındaki profesyoneller bu sefer tam tersini yapmak zorundadır; görevleri bir fikri çalmak değil onu yerleştirmektir.', '2010', 'Aksiyon Filmleri / Macera Filmleri / Bilim Kurgu Filmleri / Gerilim Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '8.8', 'https://www.imdb.com/title/tt1375666/?ref_=nv_sr_srsg_0', '148', '2022-11-28 19:32:00', 'IMDB 7+'),
(106, 'Çığlık 5', '../images/1669659289.jpg', 'Ekranlara ilk filmi geldiği an da filmin çok sevileceği ve devamının da çekileceği açıkça aşina olan Çığlık filminin sonunda beşinci bölümü de neredeyse hazır ve 2021 yılında vizyona girmesi de kesin gözüyle bakılmakta. Henüz 2021 yılının hangi ay ve gününde vizyona geleceği belli olmasa da yayın yılı bile filmin hayran kitlesini rahatlatmış durumda. Filmin konu detayından çok fazla bahsedilmese de filmin odak noktasının uzun bir süre sonra eski kasabasına dönen bir kadının, kasabada işlenen bir dizi seri suçu çözmeye çalıştığına dair olduğunu biliyoruz.', '2021', 'Gizem Filmleri / Gerilim Filmleri / Korku Filmleri', 'Türkçe Dublaj / Türkçe Altyazılı', '8.9', 'https://www.imdb.com/title/tt11245972/?ref_=nv_sr_srsg_0', '126', '2022-11-28 19:37:00', 'IMDB 7+');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `settings_title1` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title2` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title3` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title4` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `settings_title5` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `settings_sayfaismi` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `settings_logo` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_favicon` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_telefon` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `settings_eposta` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_maps` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_footer1a` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_footer1b` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `settings_footer2a` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `settings_footer2b` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `settings_status` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_title1`, `settings_title2`, `settings_title3`, `settings_title4`, `settings_title5`, `settings_sayfaismi`, `settings_logo`, `settings_favicon`, `settings_adres`, `settings_telefon`, `settings_eposta`, `settings_maps`, `settings_footer1a`, `settings_footer1b`, `settings_footer2a`, `settings_footer2b`, `settings_status`) VALUES
(1, 'HD Film Cenneti | Anasayfa', 'HD Film Cenneti | Kategoriler', 'HD Film Cenneti | Blog', 'HD Film Cenneti | İletişim', 'HD Film Cenneti | Bakım Modu', 'HD Film Cenneti', '../logo/1679843423.ico', '../logo/1679851621.ico', 'Yeni, Atatürk Cd. No:113, 43500 Simav/Kütahya', '05522251525', 'emre.yolcu16@gmail.com', 'https://cdn.akakce.com/z/alpella/alpella-harby-karamelli-kaplamali-25-gr.jpg', '© 2023 HD Film Cenneti | Tüm Hakları Saklıdır | Designed by', 'emreylcz.jpg', '© 2023 HD Film Cenneti  | Tüm Hakları Saklıdır | Designed by', 'emreylcz.jpg', '{\"trendfilmler\":\"on\",\"enyenifilmler\":\"on\",\"yerlifilmler\":\"on\",\"imdb7\":\"on\",\"eniyiler\":\"on\",\"kayitol\":\"on\",\"bakimmodu\":\"off\"}');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `emreylcz_id` int(11) NOT NULL,
  `emreylcz_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `emreylcz_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `emreylcz_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `emreylcz_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `emreylcz_admin` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'User',
  `emreylcz_perm` varchar(500) COLLATE utf8_turkish_ci NOT NULL DEFAULT '{"kullaninicigoruntuleme":"off","kullaniniciekle":"off","kullaniniciislem":"off","filmgoruntulenme":"off","filmekle":"off","filmislem":"off","anketgoruntulenme":"off","anketislem":"off","yorumgoruntulenme":"off","yorumislem":"off","iletisimgoruntulenme":"off","iletisimislem":"off","menugoruntulenme":"off","menuekleme":"off","menuislem":"off","ayarlargoruntulenme":"off","ayarlarislem":"off"}',
  `emreylcz_profilresmi` text COLLATE utf8_turkish_ci NOT NULL,
  `emreylcz_tarih` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifirlama_kodu` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`emreylcz_id`, `emreylcz_kadi`, `emreylcz_adsoyad`, `emreylcz_mail`, `emreylcz_sifre`, `emreylcz_admin`, `emreylcz_perm`, `emreylcz_profilresmi`, `emreylcz_tarih`, `sifirlama_kodu`) VALUES
(3, 'emreylcz', 'Emre YOLCU', 'emre.yolcu16@gmail.com', '7999a79aba2c38b93527c9ba922753a8', 'Admin', '{\"kullaninicigoruntuleme\":\"on\",\"kullaniniciekle\":\"on\",\"kullaniniciislem\":\"on\",\"filmgoruntulenme\":\"on\",\"filmekle\":\"on\",\"filmislem\":\"on\",\"anketgoruntulenme\":\"on\",\"anketislem\":\"on\",\"yorumgoruntulenme\":\"on\",\"yorumislem\":\"on\",\"iletisimgoruntulenme\":\"on\",\"iletisimislem\":\"on\",\"menugoruntulenme\":\"on\",\"menuekleme\":\"on\",\"menuislem\":\"on\",\"ayarlargoruntulenme\":\"on\",\"ayarlarislem\":\"on\"}', '../userpicture/1679758755.ico', '2022-11-23 01:41:26', 'emreyolcu__641cf71200d1e'),
(30, 'tester', 'tester', 'tester@gmail.com', '8e607a4752fa2e59413e5790536f2b42', 'Admin', '{\"kullaninicigoruntuleme\":\"on\",\"kullaniniciekle\":\"on\",\"kullaniniciislem\":\"on\",\"filmgoruntulenme\":\"on\",\"filmekle\":\"on\",\"filmislem\":\"on\",\"anketgoruntulenme\":\"on\",\"anketislem\":\"on\",\"yorumgoruntulenme\":\"on\",\"yorumislem\":\"on\",\"iletisimgoruntulenme\":\"on\",\"iletisimislem\":\"on\",\"menugoruntulenme\":\"on\",\"menuekleme\":\"on\",\"menuislem\":\"on\",\"ayarlargoruntulenme\":\"on\",\"ayarlarislem\":\"on\"}', 'assets/images/faces/5.jpg', '2023-03-20 00:19:02', ''),
(31, 'tester2', 'tester2', 'tester2@gmail.com', '15b77a30a83f263f8ead38b7f1192494', 'User', '{\"kullaninicigoruntuleme\":\"off\",\"kullaniniciekle\":\"off\",\"kullaniniciislem\":\"off\",\"filmgoruntulenme\":\"off\",\"filmekle\":\"off\",\"filmislem\":\"off\",\"anketgoruntulenme\":\"off\",\"anketislem\":\"off\",\"yorumgoruntulenme\":\"off\",\"yorumislem\":\"off\",\"iletisimgoruntulenme\":\"off\",\"iletisimislem\":\"off\",\"menugoruntulenme\":\"off\",\"menuekleme\":\"off\",\"menuislem\":\"off\",\"ayarlargoruntulenme\":\"off\",\"ayarlarislem\":\"off\"}', '../userpicture/1679264391.jpg', '2023-03-20 00:31:25', ''),
(36, 'jipke', 'sadıç', 'jipeknekilan@nazir.com', 'e10adc3949ba59abbe56e057f20f883e', 'User', '{\"kullaninicigoruntuleme\":\"off\",\"kullaniniciekle\":\"off\",\"kullaniniciislem\":\"off\",\"filmgoruntulenme\":\"off\",\"filmekle\":\"off\",\"filmislem\":\"off\",\"anketgoruntulenme\":\"off\",\"anketislem\":\"off\",\"yorumgoruntulenme\":\"off\",\"yorumislem\":\"off\",\"iletisimgoruntulenme\":\"off\",\"iletisimislem\":\"off\",\"menugoruntulenme\":\"off\",\"menuekleme\":\"off\",\"menuislem\":\"off\",\"ayarlargoruntulenme\":\"off\",\"ayarlarislem\":\"off\"}', 'assets/images/faces/8.jpg', '2023-03-27 15:17:58', ''),
(37, 'Ugurİlhan', 'Ugur ilhan', 'Dalga1@hotmail.com', '5430db62d1e1ed2e430d136978173fee', 'Admin', '{\"kullaninicigoruntuleme\":\"on\",\"kullaniniciekle\":\"on\",\"kullaniniciislem\":\"on\",\"filmgoruntulenme\":\"on\",\"filmekle\":\"on\",\"filmislem\":\"on\",\"anketgoruntulenme\":\"on\",\"anketislem\":\"on\",\"yorumgoruntulenme\":\"on\",\"yorumislem\":\"on\",\"iletisimgoruntulenme\":\"on\",\"iletisimislem\":\"on\",\"menugoruntulenme\":\"on\",\"menuekleme\":\"on\",\"menuislem\":\"on\",\"ayarlargoruntulenme\":\"on\",\"ayarlarislem\":\"on\"}', 'assets/images/faces/6.jpg', '2023-04-04 03:32:56', ''),
(38, 'testt', 'test test', 'testt@gma.cm', '68eacb97d86f0c4621fa2b0e17cabd8c', 'User', '{\"kullaninicigoruntuleme\":\"off\",\"kullaniniciekle\":\"off\",\"kullaniniciislem\":\"off\",\"filmgoruntulenme\":\"off\",\"filmekle\":\"off\",\"filmislem\":\"off\",\"anketgoruntulenme\":\"off\",\"anketislem\":\"off\",\"yorumgoruntulenme\":\"off\",\"yorumislem\":\"off\",\"iletisimgoruntulenme\":\"off\",\"iletisimislem\":\"off\",\"menugoruntulenme\":\"off\",\"menuekleme\":\"off\",\"menuislem\":\"off\",\"ayarlargoruntulenme\":\"off\",\"ayarlarislem\":\"off\"}', 'assets/images/faces/6.jpg', '2023-04-25 18:49:56', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anket`
--
ALTER TABLE `anket`
  ADD PRIMARY KEY (`anket_id`);

--
-- Tablo için indeksler `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`emreylcz_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anket`
--
ALTER TABLE `anket`
  MODIFY `anket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `emreylcz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
