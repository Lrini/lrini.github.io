<?php
 include "function.php";
 $id = $_GET ["id_menu"];
if(hapusmenu ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = 'menu.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = 'menu.php?r=gagal';
			            </script>";
			}
 ?>