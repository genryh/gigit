        <ul>
            <li <?=$menu == 'site' ? 'class="active"' : '';?>>
                <a href="<?=base_url('admin/site/dashboard');?>">Site</a>
            </li> 
             <li <?=$menu == 'users' ? 'class="active"' : '';?>>
                <a href="<?=base_url('admin/users/band');?>">Users</a>
            </li> 
             <li <?=$menu == 'booking' ? 'class="active"' : '';?>>
                <a href="<?=base_url('admin/booking/bookings');?>">Bookings</a>
            </li>                                 
        </ul>