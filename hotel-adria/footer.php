<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hotel_Adria
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<h4>Hotel Adria</h4><p>22. novembra bb, 85351 Budva, Montenegro, tel. <a class="footer-tel" href="tel:+38233680800">+382 33 680 800</a>, <a class="footer-email" href="mailto:reception@hoteladria.me">reception@hoteladria.me</a></p>
<p>Managed by <span class="managedby">JAMB</span></p>
<div id="TA_cdsratingsonlynarrow508" class="TA_cdsratingsonlynarrow">
<ul id="KhouKEiO" class="TA_links 9PanXl5R6zcb">
<li id="whMt7Nj" class="Sy1daY8Xj">
<a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a>
</li>
</ul>
</div>

	</footer><!-- #colophon -->

</div><!-- #page -->
<div class="modal" id="bookingModal">
	<div class="modal-content">
	<h2 class="booking-title">Booking</h2>
	<span class="close">&times;</span>
<!-- Booking mask code starts here -->

<!-- This javascript function opens the calendar pop-up. If you want to change the position where the pop-up appears on the screen, alter the values for top and left below. Note that position is based on the top left edge of the computer screen, not the browser window. -->
<script language="javascript" type="text/javascript">
function openCalendar(FormElement){
	var calendarwindow;
	url = "<?php echo esc_url( home_url( '/' ) ); ?>calendar.html?formname=resform&formelement=" + FormElement;
	calendarwindow = window.open(url,"calendar","toolbar=no,width=200,height=144,top=50,left=50,status=no,scrollbars=no,resize=no,menubar=no");
	calendarwindow.focus();
}
</script>

<!-- Populate the values for HotelID and LanguageID below. -->
<form action="https://reservations.travelclick.com/12953" method="get" name="resform" id="resform" target="_blank" class="booking-form">
<input type="hidden" name="HotelID" value="106668" />
<input type="hidden" name="LanguageID" value="1" />
<input type="hidden" name="Rooms" value="1" /> 
<div class="book-checkin">
<label for="DateIn">Check-In Date:</label>
<input name="DateIn" type="text" size="12"/>
<a class="book-kalendar" href="javascript:openCalendar('DateIn')"><img src="<?php echo esc_url( home_url( '/' ) ); ?>calendar.gif" width="20" height="20" border="0" /></a>
</div>
<div class="book-nights">
<label for="Length">Nights:</label>

<span class="booking-select">
<select name="Length">
<option value="1" selected="selected">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="10">11</option>
<option value="10">12</option>
<option value="10">13</option>
<option value="10">14</option>
</select>
</span>
</div>
<div class="book-adults">
<label for="Adults">Adults:</label>
<span class="booking-select">
<select name="Adults">
<option value="1" selected="selected">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</span>
</div>
<div class="book-children">
<label for="Children">Children:</label>
<span class="booking-select">
<select name="Children">
<option value="0" selected="selected">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</span>
</div>
<div class="book-sumbit">
<input type="submit" value="Check" />
</div>
</form>

<!-- This javascript code populates the Check-In Date field with today's date. It must be located after the form close tag. -->

<script type="text/javascript" language="javascript">
function getDateStr() {
	var today = new Date();
	var todayStr = (today.getMonth()+1) + "/" + today.getDate() + "/" + today.getFullYear();;
	document.resform.DateIn.value = todayStr;
}
getDateStr();
</script>

<!-- Booking mask code ends here -->
</div>
</div>

<script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=508&amp;locationId=12877090&amp;lang=en_US&amp;border=true&amp;display_version=2"></script>
<?php wp_footer(); ?>
<script type="text/javascript" language="javascript">
	(function($) {
	
	// $ Works! You can test it with next line if you like
	// console.log($);
	var modal = document.getElementById('bookingModal');

// Get the button that opens the modal
var btn = document.getElementById("bookButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
	console.Log("kliknuo")
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

	
})( jQuery );
	</script>
</body>
</html>
