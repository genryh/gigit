<section id="main">
    <div id="mainwrap" class="clearfix grad-3 brd-lr shdw-3">
        <div id="content">
            <?=partial('shared/menu', array('pagename' => 'dashboard'));?> 
            <div id="account-sidebar" class="left">
                <div class="photo">
                    <img src="<?=base_url('assets/images/'.THEME.'/nophoto.png');?>" alt="" />
                </div>
                <div class="sub">
                    <h4>Name</h4>
                    <a class="link2" href="<?=base_url('fan/profile');?>">Edit profile</a>
                </div>
            </div>
            <div id="account-details" class="right">
                <h2>Gigs</h2>
                <div class="gig-details">
                    <table>
                        <thead>
                            <tr>
                            <th class="tB">Band</th>
                            <th class="tG">Gig Date</th>
                            <th class="tL">Location</th>
                            <th class="tS">Status</th>
                            <th class="tA'">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <br />
                <div id="browse-result">
                    <div class="tab clearfix">
                        <a href="#featured" class="active">Featured Bands</a>
                        <a href="#newest">Newest Bands</a> 
                    </div>
                    <div id="featured" class="clearfix">
                        <?
                            foreach($featuredBands as $band) {
                                echo partial('band/shared/browse-item', array('band' => $band));
                            }
                        ?>
                        <div class="more">
                            <a class="link2" href="<?=base_url('band/browse?show=featured');?>">View more featured bands</a>
                        </div>
                    </div>
                    <div id="newest" class="clearfix" style="display:none">
                        <?
                            foreach($newestBands as $band) {
                                echo partial('band/shared/browse-item', array('band' => $band));
                            }
                        ?>
                        <div class="more">
                            <a class="link2" href="<?=base_url('band/browse?sort=create_date');?>">View more newest bands</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>