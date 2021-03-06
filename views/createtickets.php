<?php
session_start();

$_SESSION['id_user_creator'] = 1;

$id_user_creator = $_SESSION['id_user_creator'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="//d2d3qesrx8xj6s.cloudfront.net/dist/bootsnipp.min.css?ver=7d23ff901039aef6293954d33d23c066">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
    <title>TicketOS</title>
    <script>
         function valida(forma){
              forma.submit();
         }
    </script>
  </head>
  <body>
        <form name="forma" class="form-horizontal" method="post">
          <fieldset>
            <input type="hidden" name="id" value="<?php echo (isset($ticket)) ? $ticket['id'] : ""?>" />
            <input type="hidden" name="id_user_creator" value="<?php echo $id_user_creator;?>" />

            <div class="form-group">
              <label class="col-md-4 control-label" for="name">Title</label>
              <div class="col-md-4">
                  <input type="text" name="name" class="form-control" value="<?php echo (isset($ticket)) ? $ticket['name'] : ""?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="description">Description</label>
              <div class="col-md-4">
                  <textarea class="form-control" id="description" name="description"><?php echo (isset($ticket)) ? $ticket['description'] : ""?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="priority">Priority</label>
              <div class="col-md-4">
                <select id="reto" name="priority" class="form-control">
                  <option value="1">Critical</option>
                  <option value="2">High</option>
                  <option value="3">Low</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="id_user_resolve">Assigned User</label>
              <div class="col-md-4">
                <select id="reto" name="id_user_resolve" class="form-control">
                  <option value="1">User 1</option>
                  <option value="2">User 2</option>
                  <option value="3">User 3</option>
                </select>
              </div>
            </div>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="continuar"></label>
              <div class="col-md-4">
                <button id="continuar" name="volver" class="btn btn-primary"  onclick="location='?c=tickets&v=inicio'">Back</button>
                <button id="continuar" name="guardar" class="btn btn-primary"  onclick="valida(this.form)">Save</button>
                <input type="hidden" class="btn btn-primary"  name="c" value="tickets" />
                <input type="hidden" class="btn btn-primary"  name="v" value="<?php echo (isset($ticket)) ? "guardar" : "inserta"?>" />
              </div>
            </div>


          </fieldset>
        </form>
  </body>
</html>
