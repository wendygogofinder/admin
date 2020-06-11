<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Collective Admin Panel a Flat Bootstrap Responsive Website Template | Home :: W3Layouts</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style-starter.css">

  <!-- dataTables --> 
  {{-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
  <!--郵遞區號 -->
  <script src="../assets/js/address.js"></script>

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/28c735465f.js" crossorigin="anonymous"></script>
</head>

<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
@include('layouts.leftzone')
@include('layouts.header')
  <!-- main content start -->
<div class="main-content">
@yield('content')
</div>
<!-- main content end-->
</section>
  <!--footer section start-->
@include('layouts.footer')
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="../assets/js/Chart.min.js"></script>
<script src="../assets/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="../assets/js/bar.js"></script>
<script src="../assets/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="../assets/js/jquery.nicescroll.js"></script>
<script src="../assets/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="../assets/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap4.min.js"></script>
<script>
  //  匯入中文標示
  $("#admin").DataTable({
    language:{
      url:'../assets/datatables-chinese.json'
    },
    columnDefs:[
      {
        targets:3,
        orderable:false,
        searchable:false
      }
    ]
  })
  </script>
</body>

</html>
  