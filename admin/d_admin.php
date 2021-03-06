<?php
  require_once('head.php');
  $title = "Administrator Hotel | Detail Admin";

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $call = mysqli_query($con, "SELECT * FROM tbl_user WHERE id_user='$id'");
    $data = mysqli_fetch_array($call);
  }
?>
<title><?php echo $title; ?></title>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Detail Admin </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Halaman Utama</a></li>
                                        <li class="breadcrumb-item"><a href="admin.php" class="breadcrumb-link">Admin</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Detail Admin</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Detail Admin</h5>
                            <div class="card-body">
                              <form action="" method="post">
                                <input type="hidden" value="<?php echo $data['id_user']; ?>" name="idbaru">
                                  <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" disabled>
                                  </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <?php if($data['jns_kelamin']=='L'){?>
                                          <div class="input-group">
                                              <label class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" disabled name="jns_kelamin" checked class="custom-control-input"><span class="custom-control-label">Laki-Laki</span>
                                              </label>
                                              <label class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" disabled name="jns_kelamin" class="custom-control-input"><span class="custom-control-label">Perempuan</span>
                                              </label>
                                          </div>
                                        <?php }else{ ?>
                                          <div class="input-group">
                                              <label class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" disabled name="jns_kelamin" class="custom-control-input"><span class="custom-control-label">Laki-Laki</span>
                                              </label>
                                              <label class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" disabled name="jns_kelamin" checked class="custom-control-input"><span class="custom-control-label">Perempuan</span>
                                              </label>
                                          </div>
                                        <?php }?>
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" disabled class="form-control" value="<?php echo $data['email']; ?>" name="email">
                                    </div>
                                    <div class="form-group">
                                      <label>No. Telepon</label>
                                      <input type="text" disabled class="form-control" name="no_telp" value="<?php if($data['no_telp']==null){echo"User Ini Belum Mengisi Nomor Telepon";}else{echo $data['no_telp'];} ?>">
                                    </div>
                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea disabled class="form-control" rows="3" name="alamat"><?php if($data['alamat']==null){echo"User Ini Belum Mengisi Alamat";}else{echo $data['alamat'];} ?></textarea>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php require_once('footer.php'); ?>
