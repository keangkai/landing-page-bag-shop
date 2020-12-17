<?php 
/* Page Name: Home Page */
/* Header : Main Header */
include 'header.php';
?>

<div id="fade" class="section-top">
    <img src="assets/img/payrate1.png" alt="01">
    <img src="assets/img/payrate2.png" alt="02">
</div>

<script>
$(function() {
    $('#fade img').each(function(i) {
        $(this).delay((i++) * 500).fadeTo(1000, 1);
    })
});
</script>


<?php 
/* Footer : Main Footer */
include 'footer.php';
?>