<?php


$url = 'https://lier-asvo.no/produkt/bjork-1000l-30cm-til-selvtork/';
$data = file_get_contents( $url );



if ( strpos( '      <div class="asvo_buy">
<p class="stock out-of-stock">Tomt på lager</p>
<p class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#107;&#114;</span>&nbsp;1.499,00</bdi></span></p>
</div>
', $data ) === false )
{

         $to = "suhib88@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:suhib88@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

}
