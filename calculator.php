<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#feed01"/>

<title>Calculator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="author" content="Themezinho">
<meta name="description" content="For all kind of construction company website">
<meta name="keywords" content="consto, business, construction, company, industrial, building, projects, corporate, apartments, flat, condo, brick, website, design, animation, transition, themezinho">

<!-- CSS FILES -->

<link rel="stylesheet" href="css/lineicons.css">
<link rel="stylesheet" href="css/odometer.min.css">
<link rel="stylesheet" href="css/fancybox.min.css">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<style> 

</style>
</head>
<body>
<section class="content-section calculator" style="margin-top:-50px;">
  <div class="bg-image" data-background="images/section-bg01.jpg"></div>
  <!-- end bg-image -->
  <div class="container-fulid">
    <div class="row no-gutters">
      <div class="col-12">
        <div class="section-title text-left">
         <h2 style="text-align: center;"> Calculator</h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      <div class="col-lg-4 mr-auto ml-auto">
        <form class="form" name = "form1">
          <div class="row">
            <div class="form-group col-md-12">
            <input id = "calc" type ="text" name = "answer" style="margin-left:20px; width: 90%; border: 5px solid #f1f2e6;border-radius: 3px;"> <br> <br>
            
                <div class="button">     
                <input class="button ml-1" type="button"  value="1" onclick = "form1.answer.value += '1' ">
                <input class="button ml-1" type="button"  value="2" onclick = "form1.answer.value += '2' ">
                <input class="button ml-1" type="button"  value="3" onclick = "form1.answer.value += '3' ">
                <input class="button ml-1" type="button"  value="+" onclick = "form1.answer.value += '+' ">

                <div class="row mt-5">
                <input class="button ml-4" type="button"  value="4"  onclick = "form1.answer.value += '4' ">
                <input class="button ml-2" type="button"  value="5"  onclick = "form1.answer.value += '5' ">
                <input class="button ml-2" type="button"  value="6"  onclick = "form1.answer.value += '6' ">
                <input class="button ml-2" type="button"  value="-"  onclick = "form1.answer.value += '-' ">
                </div>
                
                <div class="row mt-5">
                <input class="button ml-4" type="button"  value="7"  onclick = "form1.answer.value += '7' ">
                <input class="button ml-2" type="button"  value="8"  onclick = "form1.answer.value += '8' ">
                <input class="button ml-2" type="button"  value="9"  onclick = "form1.answer.value += '9' ">
                <input class="button ml-2" type="button"  value="*"  onclick = "form1.answer.value += '*' ">
                </div>

                <div class="row mt-5">
                <input class="button ml-4" type="button"  value="0"  onclick = "form1.answer.value += '0' ">
                <input class="button ml-2" type="button"  value="."  onclick = "form1.answer.value += '.' ">
                <input class="button ml-2" type="button"  value="C"  onclick = "form1.answer.value += ' ' ">
                <input class="button ml-2" type="button"  value="/"  onclick = "form1.answer.value += '/' ">
                </div>

                <div class="price-box mt-5 button" type="submit" onclick = "form1.answer.value = eval(form1.answer.value) "> <small>Calculate</small> <span>=</span> </div>
              
              <!-- edn range-slider --> 
            </div>
            <!-- end form-group -->           
              <!-- end price-box --> 
            </div>
            <!-- end form-group --> 
          </div>
          <!-- end form row -->
        </form>
        <!-- end mortgage-form --> 
      </div>
      <!-- end col-9 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
</body>
</html>