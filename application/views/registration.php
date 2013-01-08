<section id="main">
    <div id="mainwrap" class="clearfix grad-3 brd-lr shdw-3">
        <div id="content">
            <form id="registration-form" method="post" action="<?=base_url('registration/' . $type);?>" autocomplete="off">
                
                <span class="watermark"><?=strtoupper($type);?></span>
                
                <div class="top">
                    <h1>Registration Form</h1>
                </div>
                
                <div class="error center">
                    <?=$error;?>    
                </div>
                
                <div class="fcb">
                    <span class="title">By Facebook</span> <br /><br />
                    <a href="<?=base_url('socials/provider/facebook?redirect=registration/' . $type);?>" onclick="window.open(this.href, 'auth', 'width=600,height=400'); return false;"><img src="<?=base_url('assets/images/default/ifacebook.png')?>" alt="facebook" /></a>
                    <br /><br />
                    <span class="title">OR</span>
                    <br /><br />
                </div>
                
                <div class="item clearfix">
                    <label>Email:</label>                
                    <p>
                        <input class="txt" type="text" name="email" value="<?=set_value('email', '');?>"  tabindex="1"   /> <?=form_error('email');?>
                    </p>
                </div>
                
                <div class="item clearfix">
                    <label>Password:</label>                
                    <p>
                        <input class="txt" type="password" name="password" value="<?=set_value('password', '');?>"  tabindex="2"   /> <?=form_error('password');?>
                    </p>
                </div>
                
                <div class="item clearfix">
                    <label>Confirm password:</label>                
                    <p>
                        <input class="txt" type="password" name="confirm_password" value=""  tabindex="3" /> <?=form_error('confirm_password');?>
                    </p>
                </div>
                
                 <div class="item clearfix">
                    <label></label>
                    <p>
                        <button class="btn submit" tabindex="4">Submit</button>
                    </p>
                </div>               
                <div style="height:50px;"></div>
            </form>
        </div>
    </div>
<section>