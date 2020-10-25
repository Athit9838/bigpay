<?php include_once('templates/header.php');
include "connect.php" ?>
<div class="container col-md-8">
    <h2>ติดต่อเรา</h2>
    <p>ต้องารติดต่อเรารายละเอียดตามด้านล่างนี้เลยค่ะ</p>
    <p>E-mail :: pantippantip@gmail.com</p>
    <p>Line ID :: <a href="#" class="text-underline"><u>@pantippantip</u></a></p>
    <div class="container">
        <a href="#"><img src="https://www.thaiandroidtv.com/contact/line-tat.jpg" alt=""></a>
        <form>
            <div class="form-group ">
                <div class="col-md-6 col-sm-8"><span>ชื่อ :: </span></div>
                <div class="col-md-6 col-sm-8"><input type="text" class="form-control" name="name"></div>

            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-8"><span>เบอร์โทร :: </span></div>
                <div class="col-md-6 col-sm-8"><input type="text" class="form-control" name="phone"></div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-8"><span>อีเมล์ :: </span></div>
                <div class="col-md-6 col-sm-8"><input type="text" class="form-control" name="email"></div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-8"><span>หัวข้อเรื่อง :: </span></div>
                <div class="col-md-6 col-sm-8"><input type="text" class="form-control" name="topic"></div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-8"><span>ข้อความ :: </span></div>
                <div class="col-md-6 col-sm-8">
                    <textarea type="text" class="form-control" name="message"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ส่งข้อความ</button>
            <button type="reset" class="btn btn-danger">ล้างข้อความ</button>
        </form>
    </div>
</div>
<?php include_once('templates/footer.php') ?>