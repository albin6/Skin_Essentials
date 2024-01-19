
<div class="footer">
            <p> Skin Essentials <a href="#" target="_blank"></a></p>
         </div>
         <!--//footer-->
     </div>
     <!-- Classie -->
	 <script src="../assets/assets_admin/js/classie.js"></script>
         <script>
             var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                 showLeftPush = document.getElementById( 'showLeftPush' ),
                 body = document.body;

             showLeftPush.onclick = function() {
                 classie.toggle( this, 'active' );
                 classie.toggle( body, 'cbp-spmenu-push-toright' );
                 classie.toggle( menuLeft, 'cbp-spmenu-open' );
                 disableOther( 'showLeftPush' );
             };

             function disableOther( button ) {
                 if( button !== 'showLeftPush' ) {
                     classie.toggle( showLeftPush, 'disabled' );
                 }
             }
         </script>
     <!--scrolling js-->
     <script src="../assets/assets_admin/js/jquery.nicescroll.js"></script>
     <script src="../assets/assets_admin/js/scripts.js"></script>
     <!--//scrolling js-->
     <!-- Bootstrap Core JavaScript -->
    <script src="../assets/assets_admin/js/bootstrap.js"> </script>
 </body>
 </html>