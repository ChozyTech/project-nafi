
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
			<?php if($alert): ?>
			<div class="alert alert-danger fade in">
				<?php echo $this->config->item('InvalidUserPw'); ?>
			</div>
			<?php endif; ?>
            <form method="post" action="<?=base_url()?>Authentication/login/">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
              </div>
              <div>
				<button type="submit" class="btn btn-default submit">Login</button>                 
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="<?php echo base_url(); ?>assets/img/logo/logo.png" alt="ChozyTech Logo" height="50" width="71"/> <?php echo $this->config->item('owner_name'); ?></h1>
                  <p>©<?php echo $this->config->item('year'); ?> <?php echo $this->config->item('arr'); ?>. <?php echo $this->config->item('owner_name'); ?>. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>