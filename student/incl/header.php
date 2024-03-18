<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plateforme</title>
    <link rel="icon" href="../img/kisspng-display-device-computer-monitors-font-librery-5b38b6ee190c80.2496208815304435021026.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!--liste--->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
   <!-- <script>
				function getScat(val) {
					$.ajax({
					type: "POST",
					url: "get_scat.php",
					data:'id_cat='+val,
					success: function(data){
						$("#list-cat").html(data);
					}
					});
				}

                function selectCountry(val) {
                    $("#search-box").val(val);
                    $("#suggesstion-box").hide();
                }
            </script>-->
    <!--fin liste-->
    <script>
        function calc1(){
            'use strict';
  var n1 = parseInt(document.getElementById("mod1").value);
  var n2 = parseInt(document.getElementById("mod11").value);
  var n3 = (n1+n2)/2;
  document.getElementById('mod12').value = n3;
}
function calc2(){
            'use strict';
  var n1 = parseInt(document.getElementById("mod2").value);
  var n2 = parseInt(document.getElementById("mod21").value);
  var n3 = (n1+n2)/2;
  document.getElementById('mod22').value = n3;
}
function calc3(){
            'use strict';
  var n1 = parseInt(document.getElementById("mod3").value);
  var n2 = parseInt(document.getElementById("mod31").value);
  var n3 = (n1+n2)/2;
  document.getElementById('mod32').value = n3;
}
function calc4(){
            'use strict';
  var n1 = parseInt(document.getElementById("mod4").value);
  var n2 = parseInt(document.getElementById("mod41").value);
  var n3 = (n1+n2)/2;
  document.getElementById('mod42').value = n3;
}
function calc5(){
            'use strict';
  var n1 = parseInt(document.getElementById("mod5").value);
  var n2 = parseInt(document.getElementById("mod51").value);
  var n3 = (n1+n2)/2;
  document.getElementById('mod52').value = n3;
}
function calc6(){
            'use strict';
  var n1 = parseInt(document.getElementById("mod6").value);
  var n2 = parseInt(document.getElementById("mod61").value);
  var n3 = (n1+n2)/2;
  document.getElementById('mod62').value = n3;
}
function calc7(){
            'use strict';
  var n1 = parseInt(document.getElementById("mod7").value);
  var n2 = parseInt(document.getElementById("mod71").value);
  var n3 = (n1+n2)/2;
  document.getElementById('mod72').value = n3;
}
function calc8(){
            'use strict';
  var n1 = parseInt(document.getElementById("mod8").value);
  var n2 = parseInt(document.getElementById("mod81").value);
  var n3 = (n1+n2)/2;
  document.getElementById('mod82').value = n3;
}
function moy(){
    'use strict';
    var n1 =  parseInt(document.getElementById("mod12").value);
    var n2 =  parseInt(document.getElementById("mod22").value);
    var n3 =  parseInt(document.getElementById("mod32").value);
    var n4 =  parseInt(document.getElementById("mod42").value);
    var n5 =  parseInt(document.getElementById("mod52").value);
    var n6 =  parseInt(document.getElementById("mod62").value);
    var n7 =  parseInt(document.getElementById("mod72").value);
    var n8 =  parseInt(document.getElementById("mod82").value);
    var n9 = (n1+n2+n3+n4+n5*2+n6*2+n7+n8)/11;
    document.getElementById('mod9').value = n9;
}


</script>


</head>
