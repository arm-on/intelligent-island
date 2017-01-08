<?php
include_once('../software/language/en.php');
?>
<?php include_once('head.php');?>
<body>

  <div id="clouds">
  <?php include('nav.php');?>

<div class="container">
  <div class="row">
      <div class="col s12 m4 l4"></div>
      <div class="col s12 m12 l12">
        <ul class="collapsible" data-collapsible="expandable">
          <li>
     <div class="collapsible-header active"><i class="material-icons">vpn_key</i>Traffic Simulation</div>
     <div class="collapsible-body" id="login_inside">
<button class="btn" id="move">Move</button>
       <div class="row" style="text-align:center;">

            <div class="col s12 m12 l12" id="out1">

                <div class="col s1 m1 l1" id="1" style="background-image:url('images/map/road-lr.png');min-width:50px;min-height:50px">0</div>
                <div class="col s1 m1 l1" id="2">0</div>
                <div class="col s1 m1 l1" id="3">0</div>
                <div class="col s1 m1 l1" id="4">0</div>
                <div class="col s1 m1 l1" id="5">0</div>
                <div class="col s1 m1 l1" id="6">0</div>
                <div class="col s1 m1 l1" id="7">0</div>
                <div class="col s1 m1 l1" id="8">0</div>
                <div class="col s1 m1 l1" id="9">0</div>
                <div class="col s1 m1 l1" id="10">0</div>
                <div class="col s1 m1 l1" id="11">0</div>
                <div class="col s1 m1 l1" id="12">0</div>

            </div>
            <div class="col s12 m12 l12" id="out2">

              <div class="col s1 m1 l1" id="13">0</div>
              <div class="col s1 m1 l1" id="14">0</div>
              <div class="col s1 m1 l1" id="15">0</div>
              <div class="col s1 m1 l1" id="16">0</div>
              <div class="col s1 m1 l1" id="17">0</div>
              <div class="col s1 m1 l1" id="18">0</div>
              <div class="col s1 m1 l1" id="19">0</div>
              <div class="col s1 m1 l1" id="20">0</div>
              <div class="col s1 m1 l1" id="21">0</div>
              <div class="col s1 m1 l1" id="22">0</div>
              <div class="col s1 m1 l1" id="23">0</div>
              <div class="col s1 m1 l1" id="24">0</div>

            </div>
            <div class="col s12 m12 l12" id="out3">

              <div class="col s1 m1 l1" id="25">0</div>
              <div class="col s1 m1 l1" id="26">0</div>
              <div class="col s1 m1 l1" id="27">0</div>
              <div class="col s1 m1 l1" id="28">0</div>
              <div class="col s1 m1 l1" id="29">0</div>
              <div class="col s1 m1 l1" id="30">0</div>
              <div class="col s1 m1 l1" id="31">0</div>
              <div class="col s1 m1 l1" id="32">0</div>
              <div class="col s1 m1 l1" id="33">0</div>
              <div class="col s1 m1 l1" id="34">0</div>
              <div class="col s1 m1 l1" id="35">0</div>
              <div class="col s1 m1 l1" id="36">0</div>

            </div>
            <div class="col s12 m12 l12" id="out4">

              <div class="col s1 m1 l1" id="37">0</div>
              <div class="col s1 m1 l1" id="38">0</div>
              <div class="col s1 m1 l1" id="39">0</div>
              <div class="col s1 m1 l1" id="40">0</div>
              <div class="col s1 m1 l1" id="41">0</div>
              <div class="col s1 m1 l1" id="42">0</div>
              <div class="col s1 m1 l1" id="43">0</div>
              <div class="col s1 m1 l1" id="44">0</div>
              <div class="col s1 m1 l1" id="45">0</div>
              <div class="col s1 m1 l1" id="46">0</div>
              <div class="col s1 m1 l1" id="47">0</div>
              <div class="col s1 m1 l1" id="48">0</div>

            </div>
            <div class="col s12 m12 l12" id="out5">

              <div class="col s1 m1 l1" id="49">0</div>
              <div class="col s1 m1 l1" id="50">0</div>
              <div class="col s1 m1 l1" id="51">0</div>
              <div class="col s1 m1 l1" id="52">0</div>
              <div class="col s1 m1 l1" id="53">0</div>
              <div class="col s1 m1 l1" id="54">0</div>
              <div class="col s1 m1 l1" id="55">0</div>
              <div class="col s1 m1 l1" id="56">0</div>
              <div class="col s1 m1 l1" id="57">0</div>
              <div class="col s1 m1 l1" id="58">0</div>
              <div class="col s1 m1 l1" id="59">0</div>
              <div class="col s1 m1 l1" id="60">0</div>

            </div>
            <div class="col s12 m12 l12" id="out6">

              <div class="col s1 m1 l1" id="61">0</div>
              <div class="col s1 m1 l1" id="62">0</div>
              <div class="col s1 m1 l1" id="63">0</div>
              <div class="col s1 m1 l1" id="64">0</div>
              <div class="col s1 m1 l1" id="65">0</div>
              <div class="col s1 m1 l1" id="66">0</div>
              <div class="col s1 m1 l1" id="67">0</div>
              <div class="col s1 m1 l1" id="68">0</div>
              <div class="col s1 m1 l1" id="69">0</div>
              <div class="col s1 m1 l1" id="70">0</div>
              <div class="col s1 m1 l1" id="71">0</div>
              <div class="col s1 m1 l1" id="72">0</div>

            </div>
            <div class="col s12 m12 l12" id="out7">

              <div class="col s1 m1 l1" id="73">0</div>
              <div class="col s1 m1 l1" id="74">0</div>
              <div class="col s1 m1 l1" id="75">0</div>
              <div class="col s1 m1 l1" id="76">0</div>
              <div class="col s1 m1 l1" id="77">0</div>
              <div class="col s1 m1 l1" id="78">0</div>
              <div class="col s1 m1 l1" id="79">0</div>
              <div class="col s1 m1 l1" id="80">0</div>
              <div class="col s1 m1 l1" id="81">0</div>
              <div class="col s1 m1 l1" id="82">0</div>
              <div class="col s1 m1 l1" id="83">0</div>
              <div class="col s1 m1 l1" id="84">0</div>
            </div>
            <div class="col s12 m12 l12" id="out8">

              <div class="col s1 m1 l1" id="85">0</div>
              <div class="col s1 m1 l1" id="86">0</div>
              <div class="col s1 m1 l1" id="87">0</div>
              <div class="col s1 m1 l1" id="88">0</div>
              <div class="col s1 m1 l1" id="89">0</div>
              <div class="col s1 m1 l1" id="90">0</div>
              <div class="col s1 m1 l1" id="91">0</div>
              <div class="col s1 m1 l1" id="92">0</div>
              <div class="col s1 m1 l1" id="93">0</div>
              <div class="col s1 m1 l1" id="94">0</div>
              <div class="col s1 m1 l1" id="95">0</div>
              <div class="col s1 m1 l1" id="96">0</div>
            </div>
            <div class="col s12 m12 l12" id="out9">

              <div class="col s1 m1 l1" id="97">0</div>
              <div class="col s1 m1 l1" id="98">0</div>
              <div class="col s1 m1 l1" id="99">0</div>
              <div class="col s1 m1 l1" id="100">0</div>
              <div class="col s1 m1 l1" id="101">0</div>
              <div class="col s1 m1 l1" id="102">0</div>
              <div class="col s1 m1 l1" id="103">0</div>
              <div class="col s1 m1 l1" id="104">0</div>
              <div class="col s1 m1 l1" id="105">0</div>
              <div class="col s1 m1 l1" id="106">0</div>
              <div class="col s1 m1 l1" id="107">0</div>
              <div class="col s1 m1 l1" id="108">0</div>

            </div>
            <div class="col s12 m12 l12" id="out10">

              <div class="col s1 m1 l1" id="109">0</div>
              <div class="col s1 m1 l1" id="110">0</div>
              <div class="col s1 m1 l1" id="111">0</div>
              <div class="col s1 m1 l1" id="112">0</div>
              <div class="col s1 m1 l1" id="113">0</div>
              <div class="col s1 m1 l1" id="114">0</div>
              <div class="col s1 m1 l1" id="115">0</div>
              <div class="col s1 m1 l1" id="116">0</div>
              <div class="col s1 m1 l1" id="117">0</div>
              <div class="col s1 m1 l1" id="118">0</div>
              <div class="col s1 m1 l1" id="119">0</div>
              <div class="col s1 m1 l1" id="120">0</div>

            </div>
            <div class="col s12 m12 l12" id="out11">

              <div class="col s1 m1 l1" id="121">0</div>
              <div class="col s1 m1 l1" id="122">0</div>
              <div class="col s1 m1 l1" id="123">0</div>
              <div class="col s1 m1 l1" id="124">0</div>
              <div class="col s1 m1 l1" id="125">0</div>
              <div class="col s1 m1 l1" id="126">0</div>
              <div class="col s1 m1 l1" id="127">0</div>
              <div class="col s1 m1 l1" id="128">0</div>
              <div class="col s1 m1 l1" id="129">0</div>
              <div class="col s1 m1 l1" id="130">0</div>
              <div class="col s1 m1 l1" id="131">0</div>
              <div class="col s1 m1 l1" id="132">0</div>

            </div>
            <div class="col s12 m12 l12" id="out12">

              <div class="col s1 m1 l1" id="133">0</div>
              <div class="col s1 m1 l1" id="134">0</div>
              <div class="col s1 m1 l1" id="135">0</div>
              <div class="col s1 m1 l1" id="136">0</div>
              <div class="col s1 m1 l1" id="137">0</div>
              <div class="col s1 m1 l1" id="138">0</div>
              <div class="col s1 m1 l1" id="139">0</div>
              <div class="col s1 m1 l1" id="140">0</div>
              <div class="col s1 m1 l1" id="141">0</div>
              <div class="col s1 m1 l1" id="142">0</div>
              <div class="col s1 m1 l1" id="143">0</div>
              <div class="col s1 m1 l1" id="144">0</div>

            </div>



       </div>


     </div>
         </li>

        </ul>

      </div>

   </div>
<?php include_once('specialthanks.php');?>
 </div>

<?php include_once('footer.php');?>


  <!--  Scripts-->
  <script src="js/jquery-3.1.0.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="../software/javascript/background.js"></script>
  <script>
  p=[
    ['1','2','3','4','5'],
    ['1','5','6','9','10'],
    ['2','3','4','5']
  ]
  ;
  marr=[];
for(c=0;c<p.length;c++){
  marr.push(p[c].length);
}
console.log(marr);
  max=Math.max(...marr);
  console.log(max);
  for(i=0;i<max;i++){

    for(j=1;j<p.length;j++){

        for(k=0;k<j;k++){

            if(p[j][i]==p[k][i] && p[j][i]!='d' && i<p[j].length){
              p[j].splice(i,0,'d');
              p[j].join();
            }

        }

    }


  }
  for(x=0;x<p.length;x++){
    console.log(p[x]);
  }





  </script>

  <script>
  now_place=[];
  $("[id*='out']").css("margin-top","30px");
  function init_grid(){
    for(i=0;i<p.length;i++){
      place=p[i][0];
      $("#"+place).html(i+1);
      now_place[i+1]=place;
    }
  }
  function move(obj_index,place){
    console.log('now place of '+obj_index+' is : '+now_place[obj_index]);
    $("#"+place).html(obj_index);
    // $("#"+now_place[obj_index]).html(0);
    now_place[obj_index]=place;
  }
  init_grid();
  // move(4,5);
  // move(4,6);
  t=1;
$("#move").click(function(){
for(j=1;j<=144;j++){
  $("#"+j).html(0);
}
  for(i=0;i<p.length;i++){
    move(i+1,p[i][t]);
    console.log('moved '+(i+1));
    console.log('to '+p[i][t]);
    console.log('t is : '+t);
  }
  t++;
});
function click_on_btn(){
  $("#move").click();
}
function start_interval(){
  setInterval(click_on_btn,3000);
}
setTimeout(start_interval,5000);
  </script>
</div><!--clouds-->
  </body>
</html>
