
    <!-- blog page -->
    <section class="blog-page news-section causes-details">
        <div class="container">
            <div class="row">
                <div class="content-side col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php  
                                foreach ($list as $row)
                                {  
                                      
                            ?>
                            <div class="single-item  wow fadeInUp">
                              <div class="row">
                                <div class="img-box col-md-5">
                                    <div class="img-holder">
                                        <figure><a href="single-blog.html"><img src="<?php echo base_url().'images/'.$row->image;?>" alt=""></a></figure>
                                    </div>
                                    
                                </div>
                                <div class="news-content col-md-7">
                                    <h4><a href="single-blog.html"><?php echo $row->name;?></a></h4>
                                    <div class="text">
                                        <p><?php echo $row->description;?> </p>
                                    </div>
                                    <a href="#" class="btn-two">Read More</a>
                                </div>                              
                              </div>
                            </div>
                            <?php  
                                } 
                            ?>
                        </div>
                        
                       
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="sidbar">
                        <div class="sidbar-search">
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search..." required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget sidebar-category">
                            <div class="sidbar-title"><h4>Categories</h4></div>
                            <ul class="list">
                                <?php
                                foreach ($categories as $cat)
                                { 
                                ?>
                                <li><a href="<?php echo base_url().'index.php/homeController/filterCategory/'.$cat->categoryId;?>"><?php echo $cat->category .' ('.$cat->total.')';?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="sidebar-widget sidbar-tag">
                            <div class="sidbar-title"><h4>Popular Cities</h4></div>
                            <ul class="list">
                                <?php

                                foreach ($cities as $city)
                                { 
                                ?>
                                <li><a href="<?php echo base_url().'index.php/homeController/filterCity/'.$city->cityid;?>"><?php echo $city->city?></a></li>
                                
                                <?php
                                }
                                ?>
                                
                            </ul>
                        </div>
                        <div class="sidebar-widget sidbar-archive">
                            <div class="sidbar-title"><h4>Archives</h4></div>
                            <ul class="list">
                                <li><a href="#">Jan 2018</a></li>
                                <li><a href="#">Feb 2018</a></li>
                                <li><a href="#">Mar 2018</a></li>
                                <li><a href="#">Apr 2018</a></li>
                                <li><a href="#">May 2018</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog page end -->