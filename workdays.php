
date_default_timezone_set( Asia/Jerusalem );

function activate_chat_on_workdays() {
  // Get the current day of the week
  $day_of_week = date(w);

  // Get the current hour
  $hour = date(G);

  // Check if it is a weekday (Sunday through Thursday)
  // and if the current hour is between 8:30 AM and 5:30 PM
  if ( $day_of_week >= 0 && $day_of_week <= 4 && $hour >= 8.5 && $hour < 17.5 ) {
    ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src=https://embed.tawk.to/62c6e5b87b967b1179987fd1/1g7cf2n7u;
s1.charset=UTF-8;
s1.setAttribute(crossorigin,*);
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <?php
  }
}
add_action( wp_footer, activate_chat_on_workdays );
