
      <div id="push"></div>
    </div>
    <div id="footer">
      <div class="container">
          <p class="muted credit text-center" style="font-size: x-small;">
            <?php if(date("Y")!="2014") echo "2014-"; echo date("Y");?> &copy; Ayo Ayco. All Rights Reserved. <?php if($_GET['id']!="login") echo "<a id=\"secret-link\" href=\"?id=login\">Super Secret Sign In</a>";?>
          </p>
      </div>
     </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip();
		})
    </script>
  </body>
</html>