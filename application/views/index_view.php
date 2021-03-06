<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile Thechathat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>
<body>
    <!-- สร้างเมนู -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index_view.php" class="navbar-brand"><MY PROFILE THECHATHAT></a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo site_url('profile/index');?>" class="nav-link">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?php echo site_url('profile/about');?>" class="nav-link">ประวัติส่วนตัว</a>
                    <li class="nav-item">
                    </li>
                    <a href="<?php echo site_url('profile/workings');?>" class="nav-link">ผลงาน</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">เกี่ยวกับเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal">ติดต่องาน</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- การสร้าง Slider -->
    <section id="slider">
         <div class="carousel slide" data-bs-ride="carousel" id="mySlider">
             <ol class="carousel-indicators">
                 <button data-bs-target="#mySlider" data-bs-slide-to="0" class="active"></button>
                 <button data-bs-target="#mySlider" data-bs-slide-to="1"></button>
                 <button data-bs-target="#mySlider" data-bs-slide-to="2"></button>
             </ol>
             <div class="carousel-inner">
                 <div class="carousel-item carousel-image-1 active">
                     <div class="container">
                         <div class="carousel-caption d-none d-sm-block">
                             <h1 class="display-3">My Profile</h1>
                             <p>Mr.Thechathat Thipsorn</p>
                         </div>
                     </div>
                 </div>
                 <div class="carousel-item carousel-image-2 ">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ปัจจุบันศึกษา</h1>
                            <p>มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก ระดับปริญญาตรี
                                สาขา เทคโนโลยีสารสนเทศ (IT)
                            </p>
                        </div>
                    </div>
                 </div>
                 <div class="carousel-item carousel-image-3 ">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">Mr.Thechathat Thipsorn</h1>
                            <p>Mr.Thechathat Thipsorn</p>
                        </div>
                    </div>
                 </div>
                 <button class="carousel-control-prev" data-bs-target="#mySlider" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </button>
                 <button class="carousel-control-next" data-bs-target="#mySlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
             </div>
         </div>
    </section>

    <!-- Service Section -->
    <section id="service" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <i class="fas fa-user-tie fa-3x mb-2"></i>
                    <h3>ประวัติส่วนตัว</h3>
                    <p>ชื่อจริง:นายเตชทัต ทิพย์สอน 
                        <div></div>
                        ชื่อเล่น : เซท 
                        <div></div>
                        อายุ 22
                        <div></div>
                        เกิดวันที่ : 13 กรกฏาคม 2542
                    </p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fas fa-user-graduate fa-3x mb-2"></i>
                    <h3>ปัจจุบันศึกษา</h3>
                    <p>มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก
                        ระดับปริญญาตรี
                        <div></div>
                        สาขา เทคโนโลยีสารสนเทศ (IT)</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fas fa-photo-video fa-3x mb-2"></i>
                    <h3>ข้อมูลติดต่อ</h3>
                    <p>เบอร์ติดต่อ : 095-290-8098
                        <div></div>
                        Email : Thechathat_42@gmail.com
                        <div></div>
                        บ้านเลขที่ 399/91 หมู่ 10 ตำบลน้ำรึม อำเภอเมืองตาก จังหวัดตาก
                        <div></div>
                        63000</p>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->
    <section id="about" class="p-5">
        <div class="dark-overlay">
            <div class="row">
                <div class="col">
                    <div class="container pt-5">
                        <h1>เกี่ยวกับเรา</h1>
                        <p>ตอนนี้กำลังศึกษาอยู่ในระดับปริญญาตรี ปีที่ 3 ของมหาวิทยาลัยราชมงคลล้านนา ตาก</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallary -->
    <section id="gallary" class="p-5">
        <div class="container">
            <h1 class="text-center">รูปภาพที่ชื่นชอบ</h1>
            <p class="text-center">ชอบความธรรมชาติและสดใส</p>
            <!-- Image -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/01/30/15/14/akita-5964180__340.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/01/27/07/19/book-5953965__340.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/02/10/13/20/wren-6002068__340.jpg" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/02/02/21/20/sea-5975484__340.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/02/08/15/02/mountains-5995081__340.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/02/07/19/57/gazelle-5992510__340.jpg" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/01/26/21/16/macaw-5952965__340.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2017/01/21/13/55/nature-1997282__340.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2020/12/03/12/35/giraffe-5800387__340.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center p-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Copyright &copy; Thechathat Official 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ติดต่องาน</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>อีเมล</label>
                            <input type="email" placeholder="ป้อนอีเมลของคุณ" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>หัวข้อ</label>
                            <input type="text" placeholder="เสนอหัวข้องานของคุณ" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>รายละเอียด</label>
                            <textarea id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-success">ส่งข้อมูล</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>