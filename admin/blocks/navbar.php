<div id="menu" class="navbar navbar-inverse navbar-static-top">
               <div class="container">
                   <div class="navbar-header">
                      <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#responsive-menu">
                       <span class="sr-only">Open navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                      </button>
                       
                   </div>
                   <div class="collapse navbar-collapse" id = "responsive-menu">
                       <ol class="nav navbar-nav">
                           <li><a href="catalog.php" ><h4 class = "head">Catalog</h4></a></li>
                           <li><a href="Add.php" ><h4 class = "head">Add</h4></a></li>
                           <li><a href="Edit.php" ><h4 class = "head">Edit</h4></a></li>
                           <li><a href="Delete.php" ><h4 class = "head">Delete</h4></a></li>
                       </ol>
                       <form action = "Search_Res.php" method= "post" class = "navbar-form navbar-right hidden-sm" id = "black">
                           <div class="input-group">
                                    <input name="section_type" placeholder="Enter city, name, type, or id" class="namen" required />
                                    <span class="input-group-btn">
                                        <input class="btnnn"  name="submit" type="submit" value="Go!"></>
                                    </span>
                                </div><!-- /input-group -->
                       </form>
                   </div>
               </div>
           </div>