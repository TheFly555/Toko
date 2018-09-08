<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'templates/header.php'; ?>
    <title>Portfilio</title>
  </head>
  <body>
    <?php include_once 'templates/navbar.php'; ?>

    <div class="header-2016-2017">
      <hr>
      <h3>Schooljaar - 2016/2017 <a href="#" type="button" data-toggle="collapse" data-target="#collapse20162017" class="btn btn-outline-primary btn-sm collapse-button">More</a></h3>
      <div class="collapse collapse-content-2016-2017" id="collapse20162017">
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalHtml" href="#modalHtml">HTML - Van Helden</a>
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalPhp" href="#modalPhp">PHP - Van Helden</a>
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalJquery" href="#modalJquery">JQuery - Van Helden</a>
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalCsharp" href="#modalCsharp">C# - Van Helden</a>
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalJavascript" href="#modalJavascript">JavaScript - Van Helden</a>
      </div>
      <hr>
      <h3>Schooljaar - 2017/2018 <a href="#" type="button" data-toggle="collapse" data-target="#collapse20172018" class="btn btn-outline-primary btn-sm collapse-button">More</a></h3><br>
      <div class="collapse collapse-content-2017-2018 border_3px" id="collapse20172018">
        <h6>Keuzenvak - Van Helden:</h6>
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalHtml" href="#modalHtml">Frontend - Labs</a>
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalPhp" href="#modalPhp">Frontend - Materials</a>
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalJquery" href="#modalJquery">Frontend - Oefeningen</a>
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalCsharp" href="#modalCsharp">Frontend - Webbouw</a>
        <a class="btn btn-outline-primary"  data-toggle="modal" data-target="#modalJavascript" href="#modalJavascript">Frontend - JavaScript</a>
        <hr>
      </div>
    </div>
    <!-- <div class="modal fade" id="modalHtml" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><b>HTML - Van Helden</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group">
              <?php //getHtmlOpdrachtenVanHelden();?>
            </div>
          </div>Opdrachten/htmlopdrachten/opdracht3/Opdracht
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalPhp" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><b>PHP - Van Helden</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group">
              <?php //getPhpOpdrachtenVanHelden();?>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalJquery" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><b>JQuery - Van Helden</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group">
              <?php //getJqueryOpdrachtenVanHelden();?>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalCsharp" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><b>C# - Van Helden</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group">
              <?php //getCsharpOpdrachtenVanHelden();?>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalJavascript" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><b>Javascript - Van Helden</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group">
              <?php //getJavascriptpOpdrachtenVanHelden();?>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> -->
    <?php
    // $modal_titles = array("HTML - Van Helden", "PHP - Van Helden","JQuery - Van Helden","C# - Van Helden","Javascript - Van Helden");
    // $database_functions = array("getHtmlOpdrachtenVanHelden()","getPhpOpdrachtenVanHelden()","getJqueryOpdrachtenVanHelden()","getCsharpOpdrachtenVanHelden()","getJavascriptpOpdrachtenVanHelden()");
    // function(){
    //   $i = 0;
    //  while ($i <= count($modal_titles)) {
    //
    //     echo "<div class='modal fade' id='modalJavascript' role='dialog'>";
    //     echo "<div class='modal-dialog'>";
    //     echo "<div class='modal-content'>";
    //     echo "<div class='modal-header'>";
    //     echo "<h5 class='modal-title'><b>". $modal_titles[$i] ."</b></h5>";
    //     echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
    //     echo "<span aria-hidden='true'>&times;</span>";
    //     echo "</button>";
    //     echo "</div>";
    //     echo "<div class='modal-body'>";
    //     echo "<div class='list-group'>";
    //     echo $database_functions[$i];
    //     echo "</div>";
    //     echo "</div>";
    //     echo "<div class='modal-footer'>";
    //     echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
    //     echo "</div>";
    //     echo "</div>";
    //     echo "</div>";
    //     echo "</div>";
    //
    //   }
    // }


    function modal($modal_titles, $database_functions){
          echo "<div class='modal fade' id='modalJavascript' role='dialog'>";
          echo "<div class='modal-dialog'>";
          echo "<div class='modal-content'>";
          echo "<div class='modal-header'>";
          echo "<h5 class='modal-title'><b>". $modal_titles ."</b></h5>";
          echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
          echo "<span aria-hidden='true'>&times;</span>";
          echo "</button>";
          echo "</div>";
          echo "<div class='modal-body'>";
          echo "<div class='list-group'>";
          echo $database_functions;
          echo "</div>";
          echo "</div>";
          echo "<div class='modal-footer'>";
          echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
    }
    ?>
    <!-- Optional JavaScript -->
    <?php include_once 'templates/footer.php'; ?>
  </body>
</html>
