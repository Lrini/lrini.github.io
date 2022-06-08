<?php
 include "function.php";
 $id = $_GET ["id_catering"];
if(hapuscatering ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = 'catering.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = 'catering.php?r=gagal';
			            </script>";
			}
 ?>