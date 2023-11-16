
<?php require_once "views/frontend/header.php"?>
   <section class="bg-light">
      <div class="container">
         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb py-2 my-0">
               <li class="breadcrumb-item">
                  <a class="text-main" href="index.php">Trang chủ</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">
                  Liên hệ
               </li>
            </ol>
         </nav>
      </div>
   </section>
   <section class="nm-maincontent py-2">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.41215798107!2d106.76394667481912!3d10.85622335771721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175279e9e134759%3A0x2b4c30bd4df4502a!2zMTIzIMSQLiBIb8OgbmcgRGnhu4d1IDIsIFBoxrDhu51uZyBMaW5oIFRydW5nLCBUaOG7pyDEkOG7qWMsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1700050880161!5m2!1svi!2s"
                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
                  <label for="name" class="text-main">Họ tên</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Nhập họ tên">
               </div>
               <div class="mb-3">
                  <label for="phone" class="text-main">Điện thoại</label>
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Nhập điện thoại">
               </div>
               <div class="mb-3">
                  <label for="email" class="text-main">Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Nhập email">
               </div>
               <div class="mb-3">
                  <label for="title" class="text-main">Tiêu đề</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Nhập tiêu đề">
               </div>
               <div class="mb-3">
                  <label for="detail" class="text-main">Nội dung</label>
                  <textarea name="detail" id="detail" class="form-control"
                     placeholder="Nhập nội dung liên hệ"></textarea>
               </div>
               <div class="mb-3">
                  <button class="btn btn-main">Gửi liên hệ</button>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php require_once "views/frontend/footer.php"?>