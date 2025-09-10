<?php include("topheader.php");?>
<script>
  function changePic(div){
    var picSrc=div.title;
    var myPic=document.getElementById("myPic");
    myPic.src="admin/images/items/"+picSrc;
  }
</script>
<?php
$sel="SELECT * FROM tbl_offer ORDER BY id LIMIT 2 ";
$offer="";
$stmt = $conn->query($sel);
while ($row = $stmt->fetch()) {
  $offer=$offer.'
          <div class="col-12">
            <div class="card text-dark mt-4">
           <a href="SingleOffer.php?off='.$row["id"].'" class="text-decoration-none text-dark">
              <img src="admin/images/offer/'.$row["pic"].'" class="card-img" style="max-height:230px;">
              </a>
            </div>
          </div>
   
  ';
}
$sel="SELECT * FROM tbl_items ORDER BY id DESC LIMIT 8";
$stmt = $conn->query($sel);
$items2="";
$items3="";
$n=0;
while ($row = $stmt->fetch()) {
  $n=$n+1;
  // <a href="singleCategory.php"></a>
  if($n<=4){
    $items2=$items2.' 
            <div class="col-md-3 shadow-sm">
            <a href="singleitem.php?si='.$row["id"].'">
            <div class="effect">
            <img src="admin/images/items/'.$row["pic"].'" class="card-img-top" alt="...">
            </div>
            </a> 
          </div>
          ';
  }
  else if($n>4 && $n<=8){
      $items3=$items3.' 
           <div class="col-md-3 shadow-sm">
            <a href="singleitem.php?si='.$row["id"].'">
            <div class="effect">
            <img src="admin/images/items/'.$row["pic"].'" height="150px"  class="card-img-top" alt="...">
            </div>
            </a> 
          </div>
          ';
    }
}
$c=0;
$sItem="";


$sel="SELECT * FROM tbl_items ORDER BY id DESC LIMIT 1  ";
$stmt = $conn->query($sel);
while ($row = $stmt->fetch()) {
  $sItem=$sItem.'
   <div class="col-md-4">
            <div class="card text-bg-dark">
                <img src="admin/images/items/'.$row["pic"].'" id="myPic" class="card-img" alt="...">
                <div class="card-img-overlay">
                 <div class="backcolor1">
                    <div class="color1" title="'.$row["pic2"].'" onclick="changePic(this);"></div>
                    <div class="color2" title="'.$row["pic3"].'" onclick="changePic(this);"></div>
                 </div>
               </div>
             </div>
         </div>
  ';
}
?>

<body>
  <div class="conatiner-fluid">
    <?php include("topmenu.php");?>
  </div>
  <div class="container-fluid">
    <div class="row ">
      <div class="col-md-8 border">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/cars11.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/car13.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/cars16.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-sm-4 mt-3">
        <div class="row mb-2">
          <?php echo  $offer; ?>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class="row mt-3 ">
        <div class="col-md-12">
          <div class="text-effect">
            <span> The Best Seller</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-3 mb-3">
      <div class="col-8">
        <div class="row">

          <?php echo $items2; ?>
        </div>
        <div class="row mt-3">
          <?php echo $items3; ?>
        </div> 
      </div>
      <?php echo $sItem;?>
      
      

    </div>
    <div class="container-fluid">
      <div class="row bg-dark">
        <div class="col-md-12">
          <div id="text-effect">
            <span> Popular Brands</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-3 ">
      <div class="col-md-2  mt-2">
        <div class="card shadow-sm">
        <img src="images/maruti.png" class="card-img " alt="...">
        </div>
      </div>
      <div class="col-md-2  mt-2">
      <div class="card shadow-sm">
        <img src="images/tata.png" class="card-img" alt="...">
      </div>
    </div>
      <div class="col-md-2  mt-2">
      <div class="card shadow-sm">

        <img src="images/kia.png" class="card-img" alt="...">
      </div>
      </div>

      <div class="col-md-2  mt-2">
      <div class="card shadow-sm">

        <img src="images/toyota.png" class="card-img" alt="...">
    </div>
        </div>
      <div class="col-md-2  mt-2">
      <div class="card shadow-sm">

        <img src="images/hyundai.png" class="card-img" alt="...">
      </div>
</div>
      <div class="col-md-2  mt-2">
      <div class="card shadow-sm">

        <img src="images/mahindra.png" class="card-img" alt="...">
      </div></div>
    </div>

  </div>

  <?php include("footer.php"); ?>