<?php 
/*################################*/
include 'header.php';
/*################################*/
?>
    <title>HD Film Cenneti | Anket</title>
<style>
  .example-checkbox {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 15px;
    cursor: pointer;
    font-size: 18px;
}
 
.example-checkbox input {
    opacity: 0;
}
 
.checkmark-checkbox {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #bbb;
}
 
.example-checkbox input:checked ~ .checkmark-checkbox {
    background-color: #FF3399;
}
 
.checkmark-checkbox:after {
    content: "";
    position: absolute;
    display: none;
}
 
.example-checkbox input:checked ~ .checkmark-checkbox:after {
    display: block;
}
 
.example-checkbox .checkmark-checkbox:after {
    left: 8px;
    top: 4px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.example-radio {
display: block;
position: relative;
padding-left: 35px;
margin-bottom: 15px;
cursor: pointer;
font-size: 18px;
}
.example-radio input {
opacity: 0;
}
.checkmark-radio {
position: absolute;
top: 4;
left: 0;
height: 18px;
width: 18px;
background-color: #bbb;
border-radius: 50%;
}
.example-radio input:checked ~ .checkmark-radio {
background-color: #FF3399;
}
.checkmark-radio:after {
content: "";
position: absolute;
display: none;
}
.example-radio input:checked ~ .checkmark-radio:after {
display: block;
}
.example-radio .checkmark-radio:after {
top: 6px;
left: 6px;
width: 6px;
height: 6px;
border-radius: 50%;
background: white;
}

.example-radio {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 15px;
    cursor: pointer;
    font-size: 18px;
}
 
.example-radio input {
    opacity: 0;
}
 
.checkmark-radio {
    position: absolute;
    top: 4;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #bbb;
    border-radius: 50%;
}
 
.example-radio input:checked ~ .checkmark-radio {
    background-color: #FF3399;
}
 
.checkmark-radio:after {
    content: "";
    position: absolute;
    display: none;
}
 
.example-radio input:checked ~ .checkmark-radio:after {
    display: block;
}
 
.example-radio .checkmark-radio:after {
    top: 6px;
    left: 6px;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: white;
}
.label-text{
    font-weight: bold;
    color: #444444;
}
</style>

<!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
			    <a href="anasayfa">Anasayfa</a> » <span class="breadcrumb_last" aria-current="page">Anket</span>
			</div>
		</nav>
	</div>
 <!--//breadcrumbs -->
<div class="container">
    <div class="row">

                    <div class="col-md-2"></div>
                    <div class="col-md-8"><br><br>
                    <h1 style="background: linear-gradient(to right, #df0e62 0%, #245EFF 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-align:center;">HD FİLM CENNETİ | ANKET FORMU</h1>

                      <form method="POST" id="anketadd" enctype='multipart/form-data' class="label-text"  style="padding:25px; background-color:whitesmoke;" >
                            <!-- ************************************************** -->
                            <div class="form-group">
                              <label for="exampleFormControlInput1" class="label-text">Kullanıcı Adı</label>
                              <input type="text" name="anket_soru1" id="anket_soru1" class="form-control">
                            </div>
                            <!-- ************************************************** -->
                            <label for="exampleFormControlInput1" class="label-text">Sitemizdeki Kategorilerden En Çok Hangisini Beğendiniz?</label><br>
                            <label class="example-radio">
                                Trend Filmler
                                <input type="radio" value="Trend Filmler" name="anket_soru2" id="anket_soru2">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                En İyiler
                                <input type="radio" value="En İyiler" name="anket_soru2" id="anket_soru2">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                Yerli Filmler 
                                <input type="radio" value="Yerli Filmler" name="anket_soru2" id="anket_soru2">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                IMDB 7+
                                <input type="radio" value="IMDB 7+" name="anket_soru2" id="anket_soru2">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                En Yeni Filmler
                                <input type="radio" value="En Yeni Filmler" name="anket_soru2" id="anket_soru2">
                                <span class="checkmark-radio"></span>
                            </label>
                            <!-- ************************************************** -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="label-text">Hangi Tür Filmleri Seviyorsun?</label>
                                <label class="example-checkbox">
                                Romantik
                                <input type="checkbox" name="anket_soru3[]" id="anket_soru3" value="Romantik">
                                <span class="checkmark-checkbox"></span>
                              </label>
                              <label class="example-checkbox">
                                Komedi
                                <input type="checkbox" name="anket_soru3[]" id="anket_soru3" value="Komedi">
                                <span class="checkmark-checkbox"></span>
                              </label>
                              <label class="example-checkbox">
                                Dram
                                <input type="checkbox" name="anket_soru3[]" id="anket_soru3" value="Dram">
                                <span class="checkmark-checkbox"></span>
                              </label>
                              <label class="example-checkbox">
                                Korku
                                <input type="checkbox" name="anket_soru3[]" id="anket_soru3" value="Korku">
                                <span class="checkmark-checkbox"></span>
                              </label>
                              <label class="example-checkbox">
                                Gerilim
                                <input type="checkbox" name="anket_soru3[]" id="anket_soru3" value="Gerilim">
                                <span class="checkmark-checkbox"></span>
                              </label>    
                              <label class="example-checkbox">
                                Aksiyon
                                <input type="checkbox" name="anket_soru3[]" id="anket_soru3" value="Aksiyon">
                                <span class="checkmark-checkbox"></span>
                              </label>                         
                              <label class="example-checkbox">
                                Bilim Kurgu
                                <input type="checkbox" name="anket_soru3[]" id="anket_soru3" value="Bilim Kurgu">
                                <span class="checkmark-checkbox"></span>
                              </label>
                              <label class="example-checkbox">
                               Diğer
                               <input type="checkbox" name="anket_soru3[]" id="anket_soru3" value="Diğer">
                                <span class="checkmark-checkbox"></span>
                              </label>  
                            </div>
                            <!-- ************************************************** -->
                            <label for="exampleFormControlInput1" class="label-text">Trend Filmlerdeki Filmlerin Hangilerini İzlediniz? (Birden fazla seçim yapabilirsiniz.)</label><br>
                            <label class="example-checkbox">
                              Minyonlar 2 Gru'nun Yükselişi
                              <input type="checkbox" name="anket_soru4[]" id="anket_soru4" value="Minyonlar 2 Gru'nun Yükselişi">
                              <span class="checkmark-checkbox"></span>
                            </label>
                            <label class="example-checkbox">
                              Black Adam
                              <input type="checkbox" name="anket_soru4[]" id="anket_soru4" value="Black Adam">
                              <span class="checkmark-checkbox"></span>
                            </label>
                            <label class="example-checkbox">
                              Siyah Telefon
                              <input type="checkbox" name="anket_soru4[]" id="anket_soru4" value="Siyah Telefon">
                              <span class="checkmark-checkbox"></span>
                            </label>
                            <label class="example-checkbox">
                              Kadın Kral
                              <input type="checkbox" name="anket_soru4[]" id="anket_soru4" value="Kadın Kral">
                              <span class="checkmark-checkbox"></span>
                            </label>
                            <!-- ************************************************** -->
                            <label for="exampleFormControlInput1" class="label-text">Filmi En Çok Nereden İzlemeyi Seviyorsunuz?</label><br>
                            <label class="example-radio">
                                Tablet
                                <input type="radio" name="anket_soru5" id="anket_soru5" value="Tablet">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                Telefon
                                <input type="radio" name="anket_soru5" id="anket_soru5" value="Telefon">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                Bilgisayar
                                <input type="radio" name="anket_soru5" id="anket_soru5" value="Bilgisayar">
                                <span class="checkmark-radio"></span>
                            </label>
                            <!-- ************************************************** -->
                            <label for="exampleFormControlInput1" class="label-text">Film izlerken sizin için hangisi en önemlidir?</label><br>
                            <label class="example-radio">
                                Yüksek görüntü kalitesi ile film izlemek
                                <input type="radio" name="anket_soru6" id="anket_soru6" value="Yüksek görüntü kalitesi ile film izlemek">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                İzlemek istediğim filmlerde dublaj ve altyazı seçenekleri olması
                                <input type="radio" name="anket_soru6" id="anket_soru6" value="İzlemek istediğim filmlerde dublaj ve altyazı seçenekleri olması">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                Reklamsız film izlemek
                                <input type="radio" name="anket_soru6" id="anket_soru6" value="Reklamsız film izlemek">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                İzlediğim filme kaldığım yerden devam edebilmek
                                <input type="radio" name="anket_soru6" id="anket_soru6" value="İzlediğim filme kaldığım yerden devam edebilmek">
                                <span class="checkmark-radio"></span>
                            </label>
                            <!-- ************************************************** -->
                            <label for="exampleFormControlInput1" class="label-text">Filmi Nasıl İzlemeyi Seversiniz?</label><br>
                            <label class="example-radio">
                                Türkçe Dublaj
                                <input type="radio" name="anket_soru7" id="anket_soru7" value="Türkçe Dublaj">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                Türkçe Altyazılı
                                <input type="radio" name="anket_soru7" id="anket_soru7" value="Türkçe Altyazılı">
                                <span class="checkmark-radio"></span>
                            </label>
                            <!-- ************************************************** -->
                            <label for="exampleFormControlInput1" class="label-text">Sitemizdeki Filmlerin Açıklama Kısmını Yeterli Buluyormusunuz?</label><br>
                            <label class="example-radio">
                                Evet
                                <input type="radio" name="anket_soru8" id="anket_soru8" value="Evet">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                Hayır
                                <input type="radio" name="anket_soru8" id="anket_soru8" value="Hayır">
                                <span class="checkmark-radio"></span>
                            </label>
                            <!-- ************************************************** -->
                            <label for="exampleFormControlInput1" class="label-text">Filmi İzlemeden Önce İMDB Puanına bakıyormusunuz?</label><br>
                            <label class="example-radio">
                                Evet
                                <input type="radio" name="anket_soru9" id="anket_soru9" value="Evet">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                Hayır
                                <input type="radio" name="anket_soru9" id="anket_soru9" value="Hayır">
                                <span class="checkmark-radio"></span>
                            </label>
                            <!-- ************************************************** -->
                            <label for="exampleFormControlInput1" class="label-text">İletişim Sayfamızdaki Bize Ulaşın Formunu Beğendiniz  mi?</label><br>
                            <label class="example-radio">
                                Evet
                                <input type="radio" name="anket_soru10" id="anket_soru10" value="Evet">
                                <span class="checkmark-radio"></span>
                            </label>
                            <label class="example-radio">
                                Hayır
                                <input type="radio" name="anket_soru10" id="anket_soru10" value="Hayır">
                                <span class="checkmark-radio"></span>
                            </label>
                            <!-- ************************************************** -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="label-text">Sitemize Eklememizi İstediğiniz Kategori Hangisi?</label>
                                <input type="text" class="form-control" name="anket_soru11" id="anket_soru11" placeholder="Örneğin: Vizyondaki Filmler">
                            </div>
                            <!-- ************************************************** -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="label-text">Sitemize Eklememizi İstediğiniz Film Hangisi?</label>
                                <input type="text" class="form-control" name="anket_soru12" id="anket_soru12">
                            </div>
                            <!-- ************************************************** -->
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="label-text">Sitemizdeki Filmlerden En Çok Hangi Filmi Beğendiniz</label>
                                <input type="text" class="form-control" name="anket_soru13" id="anket_soru13">
                            </div>
                            <!-- ************************************************** -->
                            <div class="form-group">
                              <label for="exampleFormControlSelect1" class="label-text">Sitemizi 10 üzerinden puanlayınız</label>
                              <select class="form-control" name="anket_soru14" id="anket_soru14">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>    
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                            <!-- ************************************************** -->
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1"  class="label-text">Sitemiz Hakkında Görüşünüz Nelerdir Açıklayınız</label>
                            <textarea class="form-control" name="anket_soru15" id="anket_soru15" rows="4"></textarea>
                          </div>
                          <!-- ************************************************** -->
                          <div class="col-xs-12 col-sm-12">
                            <div class="submithny text-right mt-4">
                              <input type="hidden" name="emreylczanket">
                              <button type="submit" class="btn read-button">Anketi Gönder</button>
                            </div>
                          </div>
                          <!-- ************************************************** -->
                        </form>
                    </div>
                    <div class="col-md-2"></div>
            </div>     
      </div>
  </div>


<?php 
/*################################*/
include 'footer.php';
/*################################*/
?>