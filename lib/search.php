<?php

?>

<form class="form form-vertical" action="search.php" method="POST">

                    <div class="control-group">
                      <label>Enter a subreddit</label>
                      <div class="controls">
                        <input type="text" class="form-control" placeholder="Enter Name" name="input_value">
                      </div>
                    </div>



                    <div class="control-group">
                      <label></label>
                      <div class="controls">
                        <input type="submit" class="btn btn-primary" name="submit" onClick="clearform()" id=""> Post
                        </input>
                      </div>
                    </div>

                  </form>
<h1>hello this is the output</h1>
<p><?php 
  include('urlSubmit.php');

  
  ?></p>