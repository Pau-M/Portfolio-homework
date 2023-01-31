<?php
        if( ! empty( $_POST["Name"] ) ){
      	 return;
      		}else{
      	 if($_POST["Message"]) {
      mail("mozga.paulina@gmail.com", "New Contact Form submission",
      $_POST["Message"]. $_POST["Email"];
      }
      		}
      ?>