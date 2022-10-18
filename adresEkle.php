<?php
   if(!isset($_SESSION["userName"])) {
      header("Location: index.php");
   }
   unset($_SESSION["alert"]);
?>
  <hr>
      <div class="user__navbar">
         <div class="user__navbar__link"><a href="user-bilgileri">Üzvlük məlumatları</a></div>
         <div class="user__navbar__link"><a href="adresler">Adreslər</a></div>
         <div class="user__navbar__link"><a href="sevimliler">Sevimlilər</a></div>
         <div class="user__navbar__link"><a href="sherhler">Şərhlər</a></div>
         <div class="user__navbar__link"><a href="sifarishler">Sifarişlər</a></div>
      </div>
   <hr>
<div class="havaleWrapper"> 
 
   <div class="havaleWrapper__form">
         <?php
            if(isset($_SESSION["message"])) {
               $mess = $_SESSION["message"];
               echo "<div class='alert alert-danger' role='alert'>
                  $mess
               </div>";
            }
          ?>
      <h4 class="havaleWrapper__form__title">Adresler</h4>
      <div class="havaleWrapper__form__subtitle">Aşağıdan adreslərinizi yeniləyə bilərsiniz</div>
      <form method="post" action="adesQeydiyyati">  
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Ad Soyad</label>
               <input type="text" name="full_name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">        
            </div>
            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Adres</label>
               <input type="text"  name="adres" class="form-control" id="exampleInputPassword1">  
            </div>
            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">İlçe</label>
               <input  type="text"   name="ilce" class="form-control" id="exampleInputPassword1">    
            </div>
            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Şehir</label>
               <input  type="text"   name="city" class="form-control" id="exampleInputPassword1">      
            </div>
            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Telefon Nömrəsi</label>
               <input  type="text"  name="phone" class="form-control" id="exampleInputPassword1">
            </div>
            <button class="btn btn-primary">adresi kaydet</button>
           
      </form>
   </div>
   <div class="havaleWrapper__desc">
      <h4 class="havaleWrapper__form__title">Reklam</h4>
      <div class="havaleWrapper__form__subtitle">MegaShoes.com reklamları</div>
     
      <div class="hesapReklamAlani">
         <img src="assets/images/facebook-advertising-ss-1920-800x450.webp" alt="">
      </div>   
     

      

    
   </div>
</div>