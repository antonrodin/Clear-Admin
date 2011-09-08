<div id="header-inside-left">
    <h1>Clear Admin</h1>
    <p>Description of your website management panel</p>
</div>
<div id="header-inside-right">
    <div class="logout">
        <p>Welcome <?php echo $this->session->userdata('username'); ?>! <a href="<?php echo site_url() . '/admin/login/signout.html' ?>">Sign out</a></p>
    </div>
</div>